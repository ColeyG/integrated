@extends('layouts.general')
@section('content')
  @component('components.overlay')
  @endcomponent
  @component('components.header')
  @endcomponent
  <section class="spits-wrapper">
    <div class="spits">
      @if(App\Post::all()->isNotEmpty())
        @foreach(App\Post::all() as $post)
          <div class="spit">
            <h2>{{ $post->user }}</h2>
            <p>{{ $post->content }}</p>
            <?php
              if($post->image!=='') {
                echo "<img src='images/".$post->image."' alt>";
              }
            ?>
          </div>
        @endforeach
      @endif
    </div>
  </section>
@endsection
