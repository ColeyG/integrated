<header class="primary-header">
  <a href="/"><h1 class="title">Spitter</h1></a>
  <div class="search">
    <input type="text" placeholder="Search Posts">
  </div>
  <ul>
    <li>
      <p>
        @if (isset(Auth::user()->name))
          <?= Auth::user()->name ?>
        @endif
      </p>
    </li>
    <li><a href="#">Help</a></li>
    @if (Auth::check())
      <li><a href="{{ url('/logout') }}">Log Out</a></li>
    @else
      <li><a href="/login">Log In</a></li>
      <li class="sign-up"><a href="/signup">Sign Up</a></li>
    @endif
  </ul>
</header>
