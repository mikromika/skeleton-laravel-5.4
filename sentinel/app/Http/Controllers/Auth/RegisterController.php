<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Sentinel;
use Activation;
use App\SentinelUser;

class RegisterController extends Controller
{
    public function register()

    {
        return view('auth.register');

    }
    public function postRegister(Request $request)

    {
      $user = Sentinel::register($request->all()  );

      $activation = Activation::create($user);

      $role = Sentinel::findRoleBySlug('manager');
      $role->users()->attach($user);

      $this->sendEmail($user, $activation->code)

        return redirect ('/');
    }
private function sendEmail($user, $code)
{
    Mail::send('emails.activation', [
          'user' => $user,
          'code' => $code

    ]. function($message) use ($user){
      $message->to($user->email);

      $message->subject("Hello $user->first_name, activate your account.");
    });
}


} // end of class
