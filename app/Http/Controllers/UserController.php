<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Event;
use App\Models\Notice;
use App\Models\Result;
use App\Models\Career;

use App\Models\Member;
use App\Models\InsectAndDisease;
use DB;

class UserController extends Controller
{
    public function home()
    {
        $ToatalTeacher = Teacher::all()->Count();

        $ToatalMember = Member::where('status', 1)->Count();
        $ToatalEvent = Event::all()->Count();
        $ToatalNotice = Notice::all()->Count();
        return view('homePage', compact('ToatalTeacher','ToatalMember','ToatalEvent','ToatalNotice') );
    }

    public function teachers()
    {
        // $Teachers = Teacher::all();
        $Teachers = Teacher::orderBy('id', 'desc')->get();
        return view('teachers', compact('Teachers'));
    }
    
    public function events()
    {
        $Events = Event::orderBy('event_date', 'desc')->paginate(4);
        return view('events', compact('Events'));
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

    public function result()
    {
        $Results = Result::orderBy('id', 'desc')->get();
        return view('result', compact('Results'));
    }

    public function about()
    {
        $ToatalTeacher = Teacher::all()->Count();
        $ToatalEvent = Event::all()->Count();
        $ToatalNotice = Notice::all()->Count();
        return view('about', compact('ToatalTeacher','ToatalEvent','ToatalNotice') );
    }





    public function career()
    {
        // $Careers = Career::all();
        $Careers = Career::orderBy('id', 'desc')->get();
        return view('career', compact('Careers'));
    }

    public function careerDetails($id)
    {
        $id = (base64_decode($id));
        $Career = Career::find($id);
        return view('careerDetails', compact('Career'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function admission()
    {
        return view('admission');
    }

    public function memberRegistration()
    {
        return view('memberRegistration');
    }

    function treatment(Request $request)
    {
        // dd($request->all());
        $RecentDiseases = InsectAndDisease::orderBy('updated_at', 'desc')->where('pinned', 1)->get();
        
        if (isset($request->id)) {
            // echo "id.";
            $TreatmentsList = InsectAndDisease::orderBy('id', 'desc')->where('type', $request->type)->get(['id','type','name']);
            $TreatmentDetails = InsectAndDisease::find($request->id);

            return view('treatment', compact('RecentDiseases','TreatmentsList','TreatmentDetails'));
        }
        // echo "type only.";
        $TreatmentsList = InsectAndDisease::orderBy('id', 'desc')->where('type', $request->type)->get(['id','type','name']);
        
        return view('treatment', compact('TreatmentsList','RecentDiseases'));
    }

    function blog()
    {
        return view('blog');
    }



    public function testPage()
    {
        // dd();result
        return view('testPage');
    }
}
