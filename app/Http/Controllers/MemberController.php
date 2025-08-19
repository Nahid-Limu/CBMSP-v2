<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

use DB;
use Intervention\Image\Facades\Image as Image;
use Validator;

class MemberController extends Controller
{
    /**
     * Display Member list.
     */
    public function showMemberList()
    {
        // dd(121);
        $Members = Member::where('status', 1)->get(['id','name','photo','nid','dob','tea_garden_address','amount_of_tea_garden']);
        // dd($Members);
        if(request()->ajax())
        {
            return datatables()->of($Members)
            
                    ->addColumn('photo', function($data){
                        $url= asset('assets/img/Members').'/'.$data->photo; 
                        $button = " <div class='text-center'>
                                        <img src='$url' class='img-fluid' style='widows: 40px; height: 40px;'>
                                    </div>  ";
                        // $button .= '&nbsp;&nbsp;';
                        return $button;   
                    })
                    
                    ->addColumn('action', function($data){
            
                        $button = '<div class="d-flex justify-content-center"><button type="button" onclick="viewData('.$data->id.')" name="view" id="'.$data->id.'" class="view btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#ViewMemberModal" ><i class="bx bx-show"> View</i></button>';

                        $button .= '&nbsp<button type="button" onclick="editData('.$data->id.')" name="edit" id="'.$data->id.'" class="edit btn btn-outline-success btn-sm " data-bs-toggle="modal" data-bs-target="#EditMemberModal" ><i class="bx bx-edit"> Edit</i></button>';

                        $button .= '&nbsp<button type="button" onclick="deleteModal('.$data->id.',\''.$data->name.'\',\'Member List\')" name="delete" id="'.$data->id.'" class="delete btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#DeleteModal" ><i class="bx bx-trash"> Delete</i></button></div>';
                        
                        return $button;
                    })
                    ->rawColumns(['photo','action'])
                    ->addIndexColumn()
                    ->make(true);
        }

        return view('admin.member.memberList');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'nid' => 'required|string|unique:members,nid',
            'dob' => 'required|date',
            'father_name' => 'required|string',
            'mother_name' => 'required|string',
            'village' => 'required|string',
            'union_parishad' => 'required|string',
            'upazila' => 'required|string',
            'zila' => 'required|string',
            'phone' => 'required|string|unique:members,phone',
            'email' => 'nullable|email|unique:members,email',
            'amount_of_tea_garden' => 'nullable|numeric|between:0,99.99',
            'tea_garden_address' => 'nullable|string',
            'dag_number' => 'nullable|string',
            'mouja_name' => 'nullable|string',
        ]);
        
        $data = $request->all();
        
        if ($request->hasFile('photo')) {
            // $photoPath = $request->file('photo')->store('photos', 'public');
            // $data['photo'] = $photoPath;

            $image = $request->file('photo');
            
            $filename = $request->name.'.'.$image->getClientOriginalExtension();
            $path = public_path('assets/img/Members/' . $filename);
            Image::make($image->getRealPath())->resize(600, 600)->save($path);

            $data['photo'] = $filename;
        }
        
        Member::create($data);
       
        return redirect()->back()->with('success', 'Member Registration successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function viewMember($id)
    {
        // dd($id);
        $Member = Member::find($id);
        return response()->json($Member);
    }

    /**
     * Display the Pending Members.
     */
    public function showPendingMember(Member $member)
    {
        // dd(121);
        $PendingMember = Member::where('status', 0)->get(['id','name','photo','nid','dob','tea_garden_address','amount_of_tea_garden']);
        // dd($PendingMember);
        if(request()->ajax())
        {
            return datatables()->of($PendingMember)
            
                    ->addColumn('photo', function($data){
                        $url= asset('assets/img/Members').'/'.$data->photo; 
                        $button = " <div class='text-center'>
                                        <img src='$url' class='img-fluid' style='widows: 40px; height: 40px;'>
                                    </div>  ";
                        // $button .= '&nbsp;&nbsp;';
                        return $button;   
                    })
                    
                    ->addColumn('action', function($data){
            
                        $button = '<div class="d-flex justify-content-center"><button type="button" onclick="viewData('.$data->id.')" name="view" id="'.$data->id.'" class="view btn btn-outline-primary btn-sm " data-bs-toggle="modal" data-bs-target="#ViewMemberModal" ><i class="bx bx-show"> View</i></button>';

                        // $button .= '&nbsp<button type="button" onclick="editData('.$data->id.')" name="edit" id="'.$data->id.'" class="edit btn btn-outline-success btn-sm " data-bs-toggle="modal" data-bs-target="#EditTeacherModal" ><i class="bx bx-edit"> Edit</i></button>';

                        $button .= '&nbsp<button type="button" onclick="deleteModal('.$data->id.',\''.$data->name.'\',\'Pending Member List\')" name="delete" id="'.$data->id.'" class="delete btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#DeleteModal" ><i class="bx bx-trash"> Delete</i></button></div>';
                        
                        return $button;
                    })
                    ->rawColumns(['photo','action'])
                    ->addIndexColumn()
                    ->make(true);
        }

        return view('admin.member.pendingMemberList');
    }

    /**
     * Update the Member approve
     */
    public function approveMember (Request $request, Member $member)
    {
        // dd($request->all());
        $Member = Member::find($request->id);

        $Member->status = 1;
        $Member->save();

        if ($Member->id) {
            return response()->json(['success' => 'Member Approved Successfully.']);
        } else {
            return response()->json(['failed' => 'Update failed.']);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateMember (Request $request, Member $member)
    {
        
        // dd($request->all());
        // $Member = Member::find($request->id);

        // // Update text fields
        // $Member->name = $request->name;
        // $Member->nid = $request->nid;
        // $Member->dob = $request->dob;
        // $Member->father_name = $request->father_name;
        // $Member->mother_name = $request->mother_name;
        // $Member->village = $request->village;
        // $Member->union_parishad = $request->union_parishad;
        // $Member->upazila = $request->upazila;
        // $Member->zila = $request->zila;
        // $Member->phone = $request->phone;
        // $Member->email = $request->email;
        // $Member->amount_of_tea_garden = $request->amount_of_tea_garden;
        // $Member->tea_garden_address = $request->tea_garden_address;
        // $Member->dag_number = $request->dag_number;
        // $Member->mouja_name = $request->mouja_name;
       
        // $Member->save();

        $Member = Member::find($request->id);
        $Member->update($request->all());

        if ($Member) {
            // $member->update($request->validated());
            return response()->json(['success' => 'Data Update Successfully.']);
        } else {
            return response()->json(['failed' => 'Update failed.']);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteMember($id)
    {
        // dd(121);
        $Member = Member::find($id);

        $photo=$Member->photo;

        if($photo!=null){
            $path = public_path() . "/assets/img/Members/" . $photo;
            if (file_exists($path)) {
                unlink($path);
            }
        }
        
        if ($Member) {
            $Member->delete();
            return response()->json(['success' => 'Member Delete Successfully.']);
        } else {
            return response()->json(['failed' => 'Member Delete failed.']);
        }
    }
}
