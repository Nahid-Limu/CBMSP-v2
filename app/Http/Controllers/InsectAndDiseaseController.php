<?php

namespace App\Http\Controllers;

use App\Models\InsectAndDisease;
use Illuminate\Http\Request;

use Validator;
use DB;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Support\Str;

class InsectAndDiseaseController extends Controller
{
    //---Display Insect And Disease list.
    public function insectAndDiseaseList()
    {
        $InsectAndDisease = InsectAndDisease::orderBy('created_at', 'desc')->get(['id','type','name','image','description','pinned']);
        // dd($InsectAndDisease);
        if(request()->ajax())
        {
            return datatables()->of($InsectAndDisease)
            
                    ->addColumn('image', function($data){
                        $url= asset('assets/img/insectAndDisease').'/'.$data->image; 
                        $button = " <div class='text-center'>
                                        <img src='$url' class='img-fluid w-100' style='widows: 100px; height: 100px;'>
                                    </div>  ";
                        // $button .= '&nbsp;&nbsp;';
                        return $button;   
                    })

                    ->editColumn('description', function ($data) {
                        $description = html_entity_decode($data->description);
                        // return Str::limit($description, 40);
                        return $description;
                    })

                    ->editColumn('pinned', function ($data) {
                        $pinned = ($data->pinned) == 1 ? "<i class='bx bx-map-pin bx-lg' style='color:#e61e13' ></i> </br><kbd>Pinned</kbd>" : "";
                        return $pinned;
                    })
                    
                    ->addColumn('action', function($data){
            
                        $button = '<div class="d-flex justify-content-center"><button type="button" onclick="editData('.$data->id.')" name="edit" id="'.$data->id.'" class="edit btn btn-outline-success btn-sm " data-bs-toggle="modal" data-bs-target="#EditEventModal" ><i class="bx bx-edit"> Edit</i></button>';
                        $button .= '&nbsp<button type="button" onclick="deleteModal('.$data->id.',\''.$data->title.'\',\'Event List\')" name="delete" id="'.$data->id.'" class="delete btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#DeleteModal" ><i class="bx bx-trash"> Delete</i></button></div>';
                        
                        return $button;
                    })
                    ->rawColumns(['image','description','pinned','action'])
                    ->addIndexColumn()
                    ->make(true);
        }
        return view('admin.insectanddisease.insectanddiseaseList');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function insectAndDiseaseAdd(Request $request)
    {
        // dd($request->all());
        //validation [start]
        $validator = Validator::make($request->all(), [
            'type' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
        ]);

        if($validator->fails())
        {
            return response()->json(['errors' => $validator->errors()->all()]);
        }
        //validation [end]

        $data = $request->all();

        //image uplode [start]
        if ($request->hasFile('image')) {
            
            $image = $request->file('image');
            
            $filename = $request->name.'.'.$image->getClientOriginalExtension();
            $path = public_path('assets/img/insectAndDisease/' . $filename);
            Image::make($image->getRealPath())->resize(600, 600)->save($path);

            $data['image'] = $filename;
        }
        //image uplode [end]

        InsectAndDisease::create($data);

        return response()->json(['success' => 'Treatment Added successfully.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(InsectAndDisease $insectAndDisease)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InsectAndDisease $insectAndDisease)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InsectAndDisease $insectAndDisease)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InsectAndDisease $insectAndDisease)
    {
        //
    }
}
