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
        $ToatalTeacher = Teacher::all()->Count();
        $ToatalEvent = Event::all()->Count();
        $ToatalNotice = Notice::all()->Count();

        $PendingMember = Member::where('status', 0)->Count();
        return view('admin.dashboard', compact('PendingMember','ToatalTeacher','ToatalEvent','ToatalNotice') );
    }
}
