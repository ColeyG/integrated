@extends('layouts.general')
@section('content')
  @component('components.overlay')
  @endcomponent
  @component('components.header')
  @endcomponent
  <section class="spits-wrapper">
    <h2 class="welcome-message">Spitter is a new social media platform! Make an account and start spitting your thoughts. You can search other user's posts via the search bar! Try it yourself by making a post and searching for a word in your post!</h2>
  </section>
@endsection
