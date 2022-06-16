<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class leadsController extends Controller
{
    function leadsShow()
    {
        return view('site.leads.leads');
    }
    function store(Request $req)
    {
        dd($req);
        $data = new Lead;
        // $data->id = 
    }
}
