<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Member;
use App\Models\Event;
use App\Models\Notice;
use App\Models\InsectAndDisease;
use App\Models\Blog;
use App\Models\User;
use App\Models\EventMember;
use DB;

use Intervention\Image\Facades\Image as Image;
use Validator;

class UserViewController extends Controller
{
    public function home()
    {
        $ToatalMember = Member::where('status', 1)->Count();
        $ToatalEvent = Event::all()->Count();
        $ToatalNotice = Notice::all()->Count();
        $ToatalTreatment = InsectAndDisease::all()->Count();
        return view('homePage', compact('ToatalMember','ToatalEvent','ToatalNotice','ToatalTreatment') );
    }
    
    public function events()
    {
        $Events = Event::orderBy('event_date', 'desc')->paginate(4);
        return view('events', compact('Events'));
    }

    public function eventDetails($id)
    {
        $id = (base64_decode($id));
        $Event = Event::find($id);
       
        return view('eventDetails', compact('Event'));
    }

    public function notice()
    {
        $Notices = Notice::orderBy('id', 'desc')->get();
        // $Events = Event::orderBy('event_date', 'desc')->paginate(4);
        return view('notice', compact('Notices'));
    }

    public function noticeDetails($id)
    {
        $id = (base64_decode($id));
        $Notice = Notice::find($id);
        return view('noticeDetails', compact('Notice'));
    }

    //--Cha Saba [Start]---
    function treatment(Request $request)
    {
        // dd($request->all());
        $RecentDiseases = InsectAndDisease::orderBy('updated_at', 'desc')->where('pinned', 1)->get();
        
        if (isset($request->id)) {
            // echo "id.";
            $TreatmentsList = InsectAndDisease::orderBy('id', 'asc')->where('type', $request->type)->get(['id','type','name']);
            $TreatmentDetails = InsectAndDisease::find($request->id);

            return view('treatment', compact('RecentDiseases','TreatmentsList','TreatmentDetails'));
        }
        // echo "type only.";
        $TreatmentsList = InsectAndDisease::orderBy('id', 'asc')->where('type', $request->type)->get(['id','type','name']);
        
        return view('treatment', compact('TreatmentsList','RecentDiseases'));
    }

    function fertilizer()
    {
        return view('fertilizer');
    }

    function foliarSpray()
    {
        return view('foliarSpray');
    }

    function dolomite()
    {
        return view('dolomite');
    }

    function shadeTree()
    {
        return view('shadeTree');
    }

    function gardenPruning()
    {
        return view('gardenPruning');
    }

    function matureGardenPruning()
    {
        return view('matureGardenPruning');
    }

    function afterPruning()
    {
        return view('afterPruning');
    }
    //--Cha Saba [End]---

    function blog()
    {
        $blogs = DB::table('blogs')
                            ->join('users', 'blogs.user_id', '=', 'users.id')
                            ->select('blogs.id','blogs.title','blogs.content','blogs.image','blogs.created_at', 'users.name as user_name',)
                            ->where('is_published', 1)
                            ->orderBy('blogs.created_at', 'desc')
                            ->get();

        // dd($blogs);
        return view('blog', compact('blogs'));
    }

    public function blogDetails($id)
    {
        $id = (base64_decode($id));
        // $Blog = Blog::find($id);
        $Blog = DB::table('blogs')
                            ->join('users', 'blogs.user_id', '=', 'users.id')
                            ->select('blogs.id','blogs.title','blogs.content','blogs.image','blogs.created_at', 'users.name as user_name',)
                            ->where('blogs.id',$id)
                            ->first();
        // dd($Blog);
        return view('blogDetails', compact('Blog'));
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function memberRegistration()
    {
        return view('memberRegistration');
    }

    public function factoryList()
    {
        // dd();result
        return view('factoryList');
    }

    public function eventRegistration()
    {
        return view('eventRegistration');
    }

    //---Store a newly created Member.
    public function eventMemberAdd(Request $request)
    {
        // dd(121);
        // dd($request->all());

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|unique:event_members,phone',
            'photo' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'address' => 'required|nullable|string',
            'bkash_code' => 'required|string|nullable',
            'shirt_size' => 'required|string|nullable',

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
            $path = public_path('assets/img/EventMembers/' . $filename);
            Image::make($image->getRealPath())->resize(300, 300)->save($path);

            $data['photo'] = $filename;
        }
        
        EventMember::create($data);
       
        // return redirect()->back()->with('success', 'Member Registration successfully.');
        return response()->json(['success' => ' নিবন্ধন সফলভাবে সম্পন্ন হয়েছে... ']);

        
    }

    public function testPage()
    {
        // dd();result
        return view('testPage');
    }
}
