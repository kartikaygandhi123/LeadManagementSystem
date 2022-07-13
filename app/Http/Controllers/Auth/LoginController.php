<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    protected function redirectTo()
    {
        // 
    }

    /**
     * Create a new controller instance.
    
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {

        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);


        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {

            if (auth()->user()->role_id == 1) {
                return redirect()->route('retailbdhead.dashboard');
            } elseif (auth()->user()->role_id == 2) {

                return redirect()->route('iplbdhead.dashboard');
            } elseif (auth()->user()->role_id == 3) {

                return redirect()->route('techbdhead.dashboard');
            } elseif (auth()->user()->role_id == 4) {

                return redirect()->route('retailbd.dashboard');
            } elseif (auth()->user()->role_id == 5) {

                return redirect()->route('techbd.dashboard');
            } elseif (auth()->user()->role_id == 6) {

                return redirect()->route('admin.dashboard');
            } elseif (auth()->user()->role_id == 7) {

                return redirect()->route('superuser.dashboard');
            } elseif (auth()->user()->role_id == 8) {

                return redirect()->route('iplbd.dashboard');
            } else {
                return view('site.errorinternal');
            }
        } else {

            return redirect()->route('login')->with('error', 'Email And Password Combination is Wrong');
        }
    }
}