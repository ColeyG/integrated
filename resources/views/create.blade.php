@extends('layouts.general')
@section('content')
  @component('components.header')
  @endcomponent
  <section class="login-signup">
    <form class="login-signup-form" method="POST" action="/postaction" enctype="multipart/form-data">
      @csrf
      <ul>
        @foreach ($errors->all() as $error)
          <li class="error"><p>{{ $error }}</p></li>
        @endforeach
      </ul>
      <label for="name" class="col-md-4 col-form-label text-md-right">Post</label>
      <textarea name="content" id="content" cols="30" rows="10"></textarea>
      <input name="image" id="image" type="file">        
      <button type="submit" class="btn btn-primary">
        {{ __('Post') }}
      </button>
    </form>
  </section>
@endsection
