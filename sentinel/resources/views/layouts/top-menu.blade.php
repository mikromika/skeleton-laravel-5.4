<div class="header clearfix">
  <nav>
    <ul class="nav nav-pills pull-right">
      @if(Sentinel::check())

      <li role="presentation" class="active"><a href="/">Home</a></li>

      <li role="presentation">
        <form action="/logout" method="POST" id="logout-form">
        {{ csrf_field() }}

        <a href="#" onclick="document.getElementById('logout-form').submit()">logout </a>
      </form>
    </li>
    @else

      <li role="presentation" class="active"><a href="/">Home</a></li>
      <li role="presentation"><a href="/register#">Register</a></li>
      <li role="presentation"><a href="/login">Login</a></li>
      @endif
    </ul>
  </nav>
  <h3 class="text-muted">{{ config('App.name')}}
  @if(Sentinel::check())
  Hello, {{ Sentinel::getUser()->username }}
  @else
  Authenticate with Sentinel
  @endif
</h3>
</div>
