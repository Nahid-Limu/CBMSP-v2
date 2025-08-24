<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Event;
use App\Models\Notice;

use App\Models\Member;
use DB;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $TotalTeacher = Teacher::all()->Count();
        $TotalEvent = Event::all()->Count();
        $TotalNotice = Notice::all()->Count();

        $TotalMember = Member::where('status', 1)->Count();
        
        $PendingMember = Member::where('status', 0)->Count();
        return view('admin.dashboard', compact('TotalMember','PendingMember','TotalTeacher','TotalEvent','TotalNotice') );
    }
}
