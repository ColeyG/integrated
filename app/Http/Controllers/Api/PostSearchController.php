<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostSearchController extends Controller
{
  public function search (Request $request) {
    $posts = \App\Post::where('content', 'LIKE', "%{$request->q}%")->get();
    
    $response = '{"data": [';

    foreach ($posts as $post) {
      $response .= "{";
      $response .= "\"user\": \"".$post['user']."\",";
      $response .= "\"content\": \"".$post['content']."\",";
      $response .= "\"image\": \"".$post['image']."\"";
      $response .= "},";
    }

    $response = rtrim($response, ", ");
    $response .= "]}";

    return $response;
  }
}
