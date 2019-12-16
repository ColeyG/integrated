<header class="primary-header">
  <h1 class="title">Spitter</h1>
  <ul>
    <li><a href="#">Help</a></li>
    @if (Auth::check())
      <li><a href="{{ url('/logout') }}">Log Out</a></li>
    @else
      <li><a href="/login">Log In</a></li>
      <li class="sign-up"><a href="/signup">Sign Up</a></li>
    @endif
  </ul>
</header>
