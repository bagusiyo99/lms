<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


        public function showLoginForm()
    {
        return view('auth.auth_login_basic');
    }

        public function showLoginguru()
    {
        return view('auth.auth_login_guru');
    }


        public function authenticated (Request $request, $user)
    {
        if ($user->akses == 'admin' ) {
            return redirect()->route('admin.beranda');
        } elseif ( $user->akses == 'teacher'){
            return redirect()->route('teacher.beranda');
        } elseif ( $user->akses == 'student'){
            return redirect()->route('student.beranda');
        } else {
            Auth::logout();
            flash ('anda tidak memiliki akses') ->error ();
            return redirect()->route('login');
        }
        
    }
}

