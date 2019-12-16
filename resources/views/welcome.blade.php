@extends('layouts.general')
@section('content')
  @component('components.overlay')
  @endcomponent
  @component('components.header')
  @endcomponent
  <section class="spits-wrapper">
    <h2 class="welcome-message">Welcome to Spitter, Create a Spit with the Create Button in the Bottom Right!</h2>
  </section>
@endsection
