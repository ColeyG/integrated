<section class="overlay">
  @if (Auth::check())
    <div class="create-post">
      <a href="/create"><img src="{{ asset('img/send.svg') }}" alt="New Post"></a>
    </div>
  @endif
</section>
