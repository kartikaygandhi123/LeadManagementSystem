<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    //
    function ContactsShow()
    {
        $contacts = Lead::get();
        return view('site.contacts.contacts', ['contacts' => $contacts]);
    }
}
