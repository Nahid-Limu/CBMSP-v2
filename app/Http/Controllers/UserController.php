<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Member;
use App\Models\Event;
use App\Models\Notice;
use App\Models\InsectAndDisease;
use App\Models\Blog;

use App\Models\User;
// use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;

class UserController extends Controller
{
        //---Display Insect And Disease list.
    public function userList()
    {
        $User = User::where('type', '>', 2)->get(['id','name','username','type']);
    //    dd($User);
        if(request()->ajax())
        {
            return datatables()->of($User)
            
                    ->editColumn('type', function ($data) {
                        $type = ($data->type) == 3 ? "Blog User" : "";
                        return $type;
                    })
                    
                    ->addColumn('action', function($data){

                        $button = '<div class="d-flex justify-content-center "><button type="button" disabled onclick="editData('.$data->id.')" name="edit" id="'.$data->id.'" class="edit btn btn-outline-success btn-sm " data-bs-toggle="modal" data-bs-target="#EditBlogModal" ><i class="bx bx-edit"> Edit</i></button>';
                        $button .= '&nbsp<button type="button" disabled onclick="deleteModal('.$data->id.',\''.$data->name.'\',\'User List\')" name="delete" id="'.$data->id.'" class="delete btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#DeleteModal" ><i class="bx bx-trash"> Delete</i></button></div>';
                        
                        return $button;
                    })
                    ->rawColumns(['type','action'])
                    ->addIndexColumn()
                    ->make(true);
        }
        return view('admin.user.userList');
    }

        //---Store a newly created Data.
    public function userAdd(Request $request)
    {
        // dd($request->all());
        //validation [start]
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:255', 'unique:users', 'alpha_dash'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if($validator->fails())
        {
            return response()->json(['errors' => $validator->errors()->all()]);
        }
        //validation [end]

        $data = $request->all();

        $data['password'] = Hash::make($request->password);

        User::create($data);

        return response()->json(['success' => 'User Created successfully.']);
    }
    
}
