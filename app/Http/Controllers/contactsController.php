<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactsController extends Controller
{
    //
    function contactsShow()
    {
        return view('site.contacts.contacts');
    }
}
