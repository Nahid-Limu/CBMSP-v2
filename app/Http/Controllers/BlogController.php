<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

use Validator;
use DB;
use Intervention\Image\Facades\Image as Image;

class BlogController extends Controller
{
    //---Display Insect And Disease list.
    public function blogList()
    {
        $Blog = Blog::orderBy('created_at', 'desc')->get(['id','title','content','image','user_id','is_published']);
        // $Blog = DB::table('blogs')
        //                     ->join('users', 'blogs.user_id', '=', 'users.id')
        //                     ->select('blogs.id','blogs.title','blogs.content','blogs.image','blogs.created_at', 'users.name as user_name',)
        //                     ->get();

        // dd(auth()->user()->id);
       
        if(request()->ajax())
        {
            return datatables()->of($Blog)
            
                    ->addColumn('image', function($data){
                        $url= asset('assets/img/blog').'/'.$data->image; 
                        $button = " <div class='text-center'>
                                        <img src='$url' class='img-fluid w-100' style='widows: 100px; height: 100px;'>
                                    </div>  ";
                        // $button .= '&nbsp;&nbsp;';
                        return $button;   
                    })

                    ->editColumn('content', function ($data) {
                        $content = html_entity_decode($data->content);
                        // return Str::limit($description, 40);
                        return $content;
                    })

                    ->editColumn('is_published', function ($data) {
                        $is_published = ($data->is_published) == 1 ? "<div class='text-center'><i class='bx bx-message-square-check bx-md' style='color:green' ></i> </br><kbd>Published</kbd></div>" : "<div class='text-center'><i class='bx bx-window-close bx-md' style='color:red' ></i> </br><kbd>Unpublish</kbd></div>";
                        return $is_published;
                    })
                    
                    ->addColumn('action', function($data){

                        // $isAuthor = ( auth()->id() == $data->user_id ) ? 'disabled' : '' ;
                        $isAuthor = ( auth()->id() == $data->user_id || auth()->user()->type == 1 ) ? '' : 'd-none' ;

                        $button = '<div class="d-flex justify-content-center '.$isAuthor.' "><button type="button" onclick="editData('.$data->id.')" name="edit" id="'.$data->id.'" class="edit btn btn-outline-success btn-sm " data-bs-toggle="modal" data-bs-target="#EditBlogModal" ><i class="bx bx-edit"> Edit</i></button>';
                        $button .= '&nbsp<button type="button" onclick="deleteModal('.$data->id.',\''.$data->title.'\',\'Blog List\')" name="delete" id="'.$data->id.'" class="delete btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#DeleteModal" ><i class="bx bx-trash"> Delete</i></button></div>';
                        
                        return $button;
                    })
                    ->rawColumns(['image','content','is_published','action'])
                    ->addIndexColumn()
                    ->make(true);
        }
        return view('admin.blog.blogList');
    }

    //---Store a newly created Data.
    public function blogAdd(Request $request)
    {
        // dd($request->all());
        //validation [start]
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'nullable|string',
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
            
            $filename = time().'.'.$image->getClientOriginalExtension();
            // $filename = $request->title.'.'.$image->getClientOriginalExtension();
            $path = public_path('assets/img/blog/' . $filename);
            Image::make($image->getRealPath())->resize(1000, 600)->save($path);

            $data['image'] = $filename;
        }
        //image uplode [end]

        $data['user_id'] = auth()->id();

        Blog::create($data);

        return response()->json(['success' => 'Blog Added successfully.']);
    }

    //---Display the specified Data.
    public function blogEdit($id)
    {
        $Blog = Blog::find($id);
        return response()->json($Blog);
    }

    //---Update the specified resource in storage.
    public function blogUpdate(Request $request)
    {
        // dd($request->all());
        $data = $request->all();

        $Blog = Blog::find($request->id);
        
        // Check if an image file is uploaded [start]
        if ($request->hasFile('image')) {

            // Delete old image if exists
            if ($Blog->image && file_exists(public_path('assets/img/blog/' . $Blog->image) ) ) {
                unlink(public_path('assets/img/blog/' . $Blog->image));
            }

            // Store the new image
            $image = $request->file('image');
            
            $filename = time().'.'.$image->getClientOriginalExtension();
            // $filename = $request->title.'.'.$image->getClientOriginalExtension();
            $path = public_path('assets/img/blog/' . $filename);
            Image::make($image->getRealPath())->resize(1000, 600)->save($path);

            

            // Save image name to the database
            $data['image'] = $filename;
        }
        // Check if an image file is uploaded [end]

        $Blog->update($data);

        if ($Blog) {
            return response()->json(['success' => 'Data Update Successfully.']);
        } else {
            return response()->json(['failed' => 'Update failed.']);
        }
    }

    //---Remove the specified resource from storage.
    public function blogDelete($id)
    {
        $Blog = Blog::find($id);
        // dd($Teacher);
        $image=$Blog->image;

        if($image!=null){
            $path = public_path() . "/assets/img/blog/" . $image;
            if (file_exists($path)) {
                unlink($path);
            }
        }
        
        if ($Blog) {
            $Blog->delete();
            return response()->json(['success' => 'Delete Successfully....!!!']);
        } else {
            return response()->json(['failed' => 'Delete failed.']);
        }
    }
}
