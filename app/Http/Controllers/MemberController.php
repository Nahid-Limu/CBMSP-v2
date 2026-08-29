<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

use DB;
use Intervention\Image\Facades\Image as Image;
use Validator;

class MemberController extends Controller
{
    //---Display Member list.
    public function showMemberList()
    {
        // dd(121);
        $Members = Member::where('status', 1)->get(['id','name','mid','photo','phone','tea_board_registration_number','tea_garden_address','amount_of_tea_garden']);
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

                        $button .= '&nbsp<button type="button" onclick="idCard('.$data->id.')" name="idCard" id="'.$data->id.'" class="edit btn btn-outline-info btn-sm " data-bs-toggle="modal" data-bs-target="#IdCardModal" ><i class="bx bxs-id-card"> ID Card</i></button>';

                        $button .= '&nbsp<button type="button" onclick="deleteModal('.$data->id.',\''.$data->name.'\',\'Member List\')" name="delete" id="'.$data->id.'" class="delete btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#DeleteModal" ><i class="bx bx-trash"> Delete</i></button></div>';
                        
                        return $button;
                    })
                    ->rawColumns(['photo','action'])
                    ->addIndexColumn()
                    ->make(true);
        }

        return view('admin.member.memberList');
    }

    //---Store a newly created Member.
    public function store(Request $request)
    {
        // dd($request->all());

        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'photo' => 'required|image|mimes:jpg,jpeg,png|max:10240',
        //     'nid' => 'required|string|unique:members,nid',
        //     'dob' => 'required|date',
        //     'father_name' => 'required|string',
        //     'mother_name' => 'required|string',

        //     'zila' => 'required|string',
        //     'upazila' => 'required|string',
        //     'union_parishad' => 'required|string',
        //     'village' => 'required|string',

        //     'phone' => 'required|string|unique:members,phone',
        //     'email' => 'nullable|email|unique:members,email',

        //     'amount_of_tea_garden' => 'required|nullable|numeric|between:0,99.99',
        //     'tea_garden_address' => 'required|nullable|string',
        //     'dag_number' => 'nullable|string',
        //     'mouja_name' => 'nullable|string',
        //     'tea_board_registration_number' => 'nullable|string',
        // ], 
        // [

        //         'photo.max' => 'The image file is too large. (10 MB Max)',

        // ]);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'nid' => 'required|string|unique:members,nid',
            'dob' => 'required|date',
            'father_name' => 'required|string',
            'mother_name' => 'required|string',

            'zila' => 'required|string',
            'upazila' => 'required|string',
            'union_parishad' => 'required|string',
            'village' => 'required|string',

            'phone' => 'required|string|unique:members,phone',
            'email' => 'nullable|email|unique:members,email',

            'amount_of_tea_garden' => 'required|nullable|numeric|between:0,99.99',
            'tea_garden_address' => 'required|nullable|string',
            'dag_number' => 'nullable|string',
            'mouja_name' => 'nullable|string',
            'tea_board_registration_number' => 'nullable|string',
            'reference' => 'required|string|nullable',
        ], 
        [

                'nid.unique' => 'আপনার এনআইডি (NID) নম্বর থেকে আবেদন করা হয়েছে',
                'photo.max' => 'The image file is too large. (2 MB Max)',
                'dob' => 'The Date of Birth field is required',
                'reference.required' => 'রেফারেন্স কোড - ( সম্মেলন আইডি / ফি প্রদানের বিকাশ নাম্বারের শেষ ৩ সংখ্যা  )',

        ]);

        if($validator->fails())
        {
            return response()->json(['errors' => $validator->errors()->all()]);
        }
        //validation [end]
        
        $data = $request->all();
        
        if ($request->hasFile('photo')) {
            
            $image = $request->file('photo');
            
            $filename = time().'.'.$image->getClientOriginalExtension();
            // $filename = $request->name.'.'.$image->getClientOriginalExtension();
            $path = public_path('assets/img/Members/' . $filename);
            Image::make($image->getRealPath())->resize(300, 300)->save($path);

            $data['photo'] = $filename;
        }
        
        Member::create($data);
       
        // return redirect()->back()->with('success', 'Member Registration successfully.');
        return response()->json(['success' => ' সদস্য নিবন্ধন সফলভাবে সম্পন্ন হয়েছে... ']);
    }

    //---Display the specified Member.
    public function viewMember($id)
    {
        // dd($id);
        $Member = Member::find($id);
        return response()->json($Member);
    }

    //---Display the Pending Member list.
    public function showPendingMember(Member $member)
    {
        // dd(121);
        $PendingMember = Member::where('status', 0)->get(['id','name','photo','phone','reference','tea_garden_address','amount_of_tea_garden']);
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

    //---Update the Member status.
    public function approveMember (Request $request, Member $member)
    {
        // dd($request->all());
        $count = Member::where('status', 1)->count();
        $Member = Member::find($request->id);

        $Member->status = 1;
        $Member->mid  = "CBMSP-".$count+1;
        $Member->save();

        if ($Member->id) {
            return response()->json(['success' => 'Member Approved Successfully.']);
        } else {
            return response()->json(['failed' => 'Update failed.']);
        }
    }

    //---Update the Member in storage.
    public function updateMember (Request $request, Member $member)
    {

        $Member = Member::find($request->id);
        $Member->update($request->all());

        if ($Member) {
            return response()->json(['success' => 'Data Update Successfully.']);
        } else {
            return response()->json(['failed' => 'Update failed.']);
        }
        
    }

    //---Remove the Member from storage.
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
