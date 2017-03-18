<?php
//authspace App\Core\Controllers\Auth;
namespace App\Core\Controllers\Auth;
use App\Core\Providers;
use App\Core\Controllers\Controller as BaseController;;
use App\Users\Controllers;
use App\Users\Models\User;
// use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends BaseController
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
    //protected $redirectTo = '/home';
        protected $redirectTo = '/test/profile';


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
