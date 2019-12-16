<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class MediaController extends Controller
{
  public function index () {
    return view('index');
  }

  public function login () {
    return view('login');
  }

  public function signup () {
    return view ('signup');
  }

  public function create () {
    return view ('create');
  }

  public function postaction (Request $request) {
    $newPost = new \App\Post;

    $newPost->user = Auth::user()['name'];
    $newPost->content = $request->content;

    $newPost->save();

    return redirect ('/');
  }
}
