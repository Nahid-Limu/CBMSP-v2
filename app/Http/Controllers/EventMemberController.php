<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Intervention\Image\Facades\Image as Image;
use Validator;
use App\Models\EventMember;


class EventMemberController extends Controller
{
    // --Extra Event [start]-- 

    public function extraEventList()
    {
        $EventMember = EventMember::select(['id','name','phone','bkash_code','shirt_size','status']) // Fetch only needed columns for speed
        ->orderByRaw('status = 0 DESC')
        ->orderBy('id', 'desc') // Secondary sort for remaining records
        ->get();

        // $EventMember = EventMember::orderByDesc('created_at')->get(['id','name','phone','bkash_code','shirt_size','status']);
        // dd($EventMember);
        if(request()->ajax())
        {
            return datatables()->of($EventMember)

                    ->editColumn('name', function($data){
                        if ($data->status == 0) {
                            return " <span class='text-danger'>$data->name &nbsp; &nbsp; <span class='badge bg-danger'>Pending</span></span>  ";
                        }
                        return " <span >$data->name</span>  ";

                    })

                    ->addColumn('id_no', function($data){
                        if ($data->status == 1) {
                            return " <span >CCS26 - $data->id</span>  ";
                        }
                        return " <span class='badge bg-danger'>Pending</span></span>  ";

                    })
            
                    ->addColumn('action', function($data){
            
                        if ($data->status == 0) {
                            $button = '<button type="button" onclick="approveData('.$data->id.')" name="edit" id="'.$data->id.'" class="edit btn btn-outline-primary btn-sm " ><i class="bi bi-hand-thumbs-up"> OK</i></button>';
                            $button .= '&nbsp<button type="button" disabled onclick="deleteModal('.$data->id.',\''.$data->title.'\',\'Event List\')" name="delete" id="'.$data->id.'" class="delete btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#DeleteModal" ><i class="bx bx-trash"> Delete</i></button>';
                            return $button;
                        }
                        
                        return $button = '<button type="button" class="btn btn-outline-success btn-sm " ><i class="bi bi-bookmark-check-fill"> Approved</i></button>';
                    })
                    ->rawColumns(['name','id_no','action'])
                    ->addIndexColumn()
                    ->make(true);
        }
        return view('admin.extraevent.extraEventList');
    }

    public function approveData($id)
    {
        $EventMember = EventMember::where('id', $id)->update(['status' => 1]);
        return response()->json(['success' => ' নিবন্ধন সফলভাবে সম্পন্ন হয়েছে... ']);
    }

    public function SearchData($phone)
    {
    
        $EventMember = EventMember::where('phone', $phone)->first();
        // $EventMember = EventMember::where('status', 1)->where('phone', $phone)->first();
        // dd($EventMember);
        if ($EventMember) {
            
            // return response()->json($EventMember);
            // return response()->json([
            //     'success' => $EventMember
            // ]);
            if ($EventMember->status == 1) {
                return response()->json([
                    'success' => $EventMember
                ]);
            }

            return response()->json([
                'nodata' => 'নিবন্ধন প্রক্রিয়াধীন, কিছুক্ষণ পরে আবার চেষ্টা করুন...!!!'
            ]);
        }
        return response()->json([
            'nodata' => 'কোনো তথ্য পাওয়া যায়নি.....!!!'
        ]);
                
        // return response()->json($EventMember);
    }

    // --Extra Event [end]-- 
}
