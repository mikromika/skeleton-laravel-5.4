<?php

//userspace App\Users\Controllers;
namespace App\Users\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UsersRequest;
use App\Users;
use App\Users\Models\User;
use App\Core\Auth\Models\Role;
use Illuminate\Routing\Controller as BaseController;


class UsersController extends BaseController
{
    /**
    * Display the specified resource.
    */
    public function show(Request $request, User $user)
    {
        $posts = $user->posts()->orderBy('posted_at', 'desc')->limit(5)->get();
        $comments = $user->comments()->orderBy('posted_at', 'desc')->limit(5)->get();
        $roles = Role::all();

        return view('users.show')->with([
                                    'user' => $user,
                                    'posts' => $posts,
                                    'comments' => $comments,
                                    'roles' => $roles
                                ]);
    }

    /**
    * Show the form for editing the specified resource.
    */
    public function edit(Request $request, User $user)
    {
        $this->authorize('update', $user);

        $roles = Role::all();

        return view('users.edit', $user)->withUser($user)->withRoles($roles);
    }

    /**
    * Update the specified resource in storage.
    */
    public function update(UsersRequest $request, User $user)
    {
        $this->authorize('update', $user);

        $user->name = $request->input('name');
        $user->email = $request->input('email');

        if ($request->input('password') != '') {
            $user->password = Hash::make($request->input('password'));
        }

        $user->save();

        if (Auth::user()->can('update_roles', $user)) {
            $role_ids = array_values($request->get('roles', []));
            $user->roles()->sync($role_ids);
        }

        return redirect()->route('users.show', $user)->withSuccess(__('users.updated'));
    }
}
