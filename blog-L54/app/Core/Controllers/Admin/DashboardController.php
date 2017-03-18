<?php

adminspace App\Core\Controllers\Admin;
//namespace App\Core\Admin\Controllers;

//use App\Http\Controllers\Controller;
//use App\Users\Controllers\UsersController;
use App\Users\Models\User;
use App\Post;
use App\Comment;
use Illuminate\Routing\Controller as Controller;


class DashboardController extends Controller
{
    /**
    * Show the application admin dashboard.
    *
    * @return \Illuminate\Http\Response
    */
    public function dashboard()
    {
        $comments = Comment::lastWeek()->get();
        $posts = Post::lastWeek()->get();
        $users = User::lastWeek()->get();

        return view('admin.dashboard.index')->with([
                                                'comments' => $comments,
                                                'posts' => $posts,
                                                'users' => $users,
                                            ]);
    }
}
