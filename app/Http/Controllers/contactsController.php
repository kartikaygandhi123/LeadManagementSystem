<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class contactsController extends Controller
{
    //
    function contactsShow()
    {
        $contacts = Lead::get();
        return view('site.contacts.contacts', ['contacts' => $contacts]);
    }
}
