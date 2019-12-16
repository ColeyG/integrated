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
    $validatedData = $request->validate([
      'image' => 'max:20000|mimes:jpg,jpeg,png,gif,svg'
    ]);

    $newPost->user = Auth::user()['name'];
    $newPost->content = $request->content;

    if ($request->hasFile('image')) {
      $name = time().'-'.request()->image->getClientOriginalName().'.'.request()->image->getClientOriginalExtension();
      request()->image->move(public_path('images'), $name); 
      $newPost->image = $name;
    } else {
      $newPost->image = '';
    }

    $newPost->save();

    return redirect ('/');
  }
}
