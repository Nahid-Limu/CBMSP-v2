<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

use App\Models\Event;
use App\Models\Notice;
use App\Models\Member;
use App\Models\InsectAndDisease;
use DB;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $TotalTeacher = Teacher::all()->Count();

        $TotalMember = Member::where('status', 1)->Count();
        $PendingMember = Member::where('status', 0)->Count();

        $TotalEvent = Event::all()->Count();
        $TotalNotice = Notice::all()->Count();
        $TotalTreatment = InsectAndDisease::all()->Count();
        
        return view('admin.dashboard', compact('TotalMember','PendingMember','TotalTreatment','TotalTeacher','TotalEvent','TotalNotice') );
    }
}
