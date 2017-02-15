<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendContact;

class ContactController extends Controller
{

  public function store(Request $request)
  {
  //  rules

  $rules =[
    'name' => 'required',
    'message' => 'required|min:6',

  ];
  //  'message' => '',
  // validate
  //dd($request, $rules);

    $this->validate($request, $rules);
//  dd($request, $rules);
    Mail::to('example@example.com')
    ->send(new SendContact($request->only(['name', 'message'])));

//    dd($request, $rules);
//    return  view ('welcome');
    return redirect()->back()->with(
    'success', 'The Email was sent');

}
  }
