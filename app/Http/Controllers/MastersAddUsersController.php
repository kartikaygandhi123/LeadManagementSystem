<?php

namespace App\Http\Controllers;

use App\Models\AllBusiness;
use App\Models\City;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class MastersAddUsersController extends Controller
{

    function AddUsersShow()
    {
        $roles = Role::get();
        $lobs = AllBusiness::get();
        $cities = City::get();
        
        $users = User::with('roles')->with('lobs')->get();

        return view('site.masters.addusers', ['roles' => $roles,'users' => $users, 'lobs' => $lobs, 'cities' => $cities]);
    }

    function SaveUser(Request $request)
    {
        
        $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8'],
            ]
        );
        //dd($request->all());

        try {

            $newuser = new User();
            $newuser->name = $request->name;
            $newuser->email = $request->email;
            $newuser->role_id = $request->role;
            $newuser->city_id = $request->city;
            $newuser->lob_id = $request->lob;

            $newuser->password = \Hash::make($request->password);


            if ($newuser->save()) {

                return redirect()->back()->with('success', 'successfully created new user');
            } else {

                return redirect()->back()->with('error', 'failed to create user');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'failed to create user due to duplicate entry');
        }
    }
}
