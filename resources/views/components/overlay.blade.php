<section class="overlay">
  @if (Auth::check())
  <h2 class="sr-only">Overlay</h2>
    <div class="create-post">
      <a href="/create"><img src="{{ asset('img/send.svg') }}" alt="New Post"></a>
    </div>
  @endif
</section>
