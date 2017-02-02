<?php

namespace App\Http\Controllers\Bio;

use App\User;
use App\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;

class ProfileController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


  protected function user_id() {


  }




    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
             'phone' => 'max:255',
             'mobile' => 'max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {

    //  $user_id=(\App\User()->id);

        return Profile::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'phone' => $data['phone'],
            'mobile' => $data['mobile'],


    ]);
    }

 //protected function formcheck(Request $request, Profile $profile)

protected function formcheck(Request $request)
 {


 $this->validator($request->all())->validate();

 //dd(request());
 //dd(response());
 $this->guard()->login($this->create($request->all()));

//dd(request($request));

 return view ('bio.dashboard');

 }

    public function index()
    {
        return view('bio.dashboard');
    }


    public function createform()
    {
        return view('bio.profileform');
    }


// other way to get validation from model
// ModelName::$rules
//$validator = Validator::make(Input::all(), ModelName::$rules);

// and model side  exsample

// https://scotch.io/tutorials/laravel-form-validation
//
//protected $fillable = array('name', 'email', 'password');

//    public static $rules = array(
//        'name'             => 'required',                        // just a normal required validation
//        'email'            => 'required|email|unique:ducks',     // required and must be unique in the table
//        'password'         => 'required',                        // which is protected in modelside
//        'password_confirm' => 'required|same:password'           // required and has to match the password field
//    );
//}






}   // end of class
