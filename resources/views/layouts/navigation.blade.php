<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ url('/home') }}">Home</a></li>
      <li><a href="{{ url('/userList') }}">User List</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      @if(Auth::check())
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Auth::user()->name}} 
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{ url('/logOut') }}" class="nav-link ml-auto">Logout</a></li>
        </ul>
        @else
        <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-user"></span> Login</a></li>
        <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      @endif
    </ul>
  </div>
</nav>