<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mastersAddUsersController extends Controller
{
    //
    function addUsersShow()
    {
        return view('site.masters.addusers');
    }
}
