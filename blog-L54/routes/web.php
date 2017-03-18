<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', array('as' => 'publichome', function()
{
   return View::make('welcome');
}));


Route::get('/test/profile', array('as' => 'profile', function()
{
   return View::make('users/profileform/create');
}));


Route::get('/contact', array('as' => 'publichome', function()
{
   return View::make('emails.contact.sendEmailForm');
}));

Route::post('/contact/store')->uses('ContactController@store')->name('contact.store');

Auth::routes();

Route::group(['prefix' => 'auth'], function () {
    Route::get('{provider}', '\App\Core\Contollers\Auth\AuthController@redirectToProvider')->name('auth.provider');
    Route::get('{provider}/callback', '\App\Core\Controllers\Auth\AuthController@handleProviderCallback');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin'], 'namespace' => 'Admin', 'as' => 'admin.'], function () {
    Route::get('/dashboard', '\App\Core\Controllers\Admin\DashboardController@dashboard')->name('dashboard');
    Route::resource('posts', 'PostsController', ['only' => ['index', 'edit', 'update', 'destroy']]);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'PostsController@index')->name('home');
    Route::get('/posts/feed', 'PostsController@feed')->name('posts.feed');
    Route::resource('posts', 'PostsController', ['only' => ['create', 'store', 'show']]);
    Route::resource('comments', 'CommentsController', ['only' => ['store', 'destroy']]);
    Route::resource('users', '\App\Users\Controllers\UsersController', ['only' => ['show', 'edit', 'update']]);
    Route::resource('newsletter-subscriptions', 'NewsletterSubscriptionsController', ['only' => ['store']]);


// customized login routes and pages
    Route::get('login', '\App\Core\Controllers\Auth\LoginController@Login')->name('login');
    Route::post('login', '\App\Core\Controllers\Auth\LoginController@login');
    Route::post('logout', '\App\Core\Controllers\Auth\LoginController@logout')->name('logout');

    // Registration Routes...
    //Route::get('register/', 'Auth\RegisterController@showRegistrationForm')->name('register');
    //Route::post('register/', 'Auth\RegisterController@register');

    // Password Reset Routes...
    //Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    //Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    //Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    //Route::post('password/reset', 'Auth\ResetPasswordController@reset');








});






Route::get('newsletter-subscriptions/unsubscribe', 'NewsletterSubscriptionsController@unsubscribe')->name('newsletter-subscriptions.unsubscribe');
