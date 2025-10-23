<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\Notice;
use App\Models\Member;
use App\Models\InsectAndDisease;
use App\Models\Blog;
use DB;

class DashboardController extends Controller
{
    public function dashboard()
    {

        $TotalMember = Member::where('status', 1)->Count();
        $PendingMember = Member::where('status', 0)->Count();

        $Atwari = Member::where('upazila', 'Atwari')->where('status', 1)->Count();
        $Boda = Member::where('upazila', 'Boda')->where('status', 1)->Count();
        $Debiganj = Member::where('upazila', 'Debiganj')->where('status', 1)->Count();
        $Panchagarh_Sadar = Member::where('upazila', 'Panchagarh_Sadar')->where('status', 1)->Count();
        $Tetulia = Member::where('upazila', 'Tetulia')->where('status', 1)->Count();

        $chartData = [
            ['value' => $Atwari, 'name' => 'Atwari'],
            ['value' => $Boda, 'name' => 'Boda'],
            ['value' => $Debiganj, 'name' => 'Debiganj'],
            ['value' => $Panchagarh_Sadar, 'name' => 'Panchagarh_Sadar'],
            ['value' => $Tetulia, 'name' => 'Tetulia']
        ];

        $TotalEvent = Event::all()->Count();
        $TotalNotice = Notice::all()->Count();
        $TotalTreatment = InsectAndDisease::all()->Count();
        $TotalBlog = Blog::all()->Count();
        
        return view('admin.dashboard', 
            compact('TotalMember','PendingMember','chartData',
            'TotalTreatment','TotalEvent','TotalNotice','TotalBlog') 
        );
    }
}
