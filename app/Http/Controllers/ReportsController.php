<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{

    function ReportsShow()
    {
        $leads = Lead::with('created_by_user')
            ->when(isset(\auth()->user()->lob_id), function ($q1) {
                $q1->where('lob_id', \auth()->user()->lob_id);
            })
            ->when(!in_array(\auth()->user()->role_id, [1, 2, 3, 5]), function ($q) {
                $q->where(function ($query) {
                    $query->where('created_by', '=', \auth()->user()->id)
                        ->orWhere('user_id', '=', \auth()->user()->id);
                });
            })->orderBy('id', 'desc')
            ->get();

        return view('site.reports.reports', ['leads' => $leads]);
    }

    function FilterResult(Request $request)
    {
        if ($request->ajax()) {
            if ($request->start != '' && $request->end != '') {
                $data = DB::table('leads')
                    ->whereBetween('First_Contact_Date', array($request->start, $request->end))
                    ->get();
            } else {
                $data = DB::table('leads')->orderBy('First_Contact_Date', 'desc')->get();
            }
            // echo json_encode($data);
            echo $data;
        }
        // return view('site.reports.ajaxreports', ['leads' => $data]);
    }
}
