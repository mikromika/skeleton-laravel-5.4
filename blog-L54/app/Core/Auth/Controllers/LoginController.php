<?php

namespace App\Core\Auth\Controllers;

//use App\Http\Controllers\Controller;

use Illuminate\Routing\Controller as Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    //public function attemptLogin(Request $request)
    //{
    //    $credentials = $this->credentials($request);
    //    $credentials = arrey_add($credentials, 'active', true);

    //    return Auth::attempt($credentials, $request->('remember'));

    //}
}
