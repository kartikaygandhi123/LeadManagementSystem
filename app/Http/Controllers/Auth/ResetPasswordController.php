<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Auth;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo;


    public function __construct()
    {
        if (Auth::check() && Auth::user()->role_id == 1) {
            $this->redirectTo = route('retailbdhead.dashboard');
        } elseif (Auth::check() && Auth::user()->role_id == 2) {
            $this->redirectTo = route('iplbdhead.dashboard');
        } elseif (Auth::check() && Auth::user()->role_id == 3) {
            $this->redirectTo = route('techbdhead.dashboard');
        } elseif (Auth::check() && Auth::user()->role_id == 4) {
            $this->redirectTo = route('retailbd.dashboard');
        } elseif (Auth::check() && Auth::user()->role_id == 5) {
            $this->redirectTo = route('techbd.dashboard');
        } elseif (Auth::check() && Auth::user()->role_id == 6) {
            $this->redirectTo = route('admin.dashboard');
        } elseif (Auth::check() && Auth::user()->role_id == 7) {
            $this->redirectTo = route('superuser.dashboard');
        } elseif (Auth::check() && Auth::user()->role_id == 8) {
            $this->redirectTo = route('iplbd.dashboard');
        }

        $this->middleware('guest')->except('logout');
    }
}
