<!--Bootstrap default navbar -->

  <nav class="navbar navbar-default" role="navigation" style="background-color:crimson; color:white;">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <h3 style="color:black;">Vocational Career Information System</h3>                  
      </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <div class="container">
  @if(!Auth::user('isAdmin'))
    <ul class="nav navbar-nav" style="margin-top:5px; font-size:18px;">
    @if(!Auth::guest())
      <li><a href="{{ route('home') }}" style="color:white;">Home</a></li>
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color:white;">
            Career Path 
          </a>
          <ul class="dropdown-menu" role="menu">
            @foreach($personalities as $personality)
              <li><a href="{{ route('personality', ['id'=>$personality->id]) }}" style="color:white;">{{$personality->name}}</a></li>
            @endforeach  
          </ul>  
        </li>
        @endif
      <li><a href="{{ route('testInfo') }}" style="color:white;">Career Test</a></li>
      <li><a href="{{ route('contact') }}" style="color:white;">Contact</a></li>
      <li><a href="{{ route('about') }}" style="color:white;">About</a></li>
    </ul>
    @endif
    <ul class="nav navbar-nav navbar-right" style="margin-top:5px; font-size:18px;">
      @if(Auth::guest())
        <li><a href="{{ route('login') }}" style="color:white;">Login</a></li>
        <li><a href="{{ route('register') }}" style="color:white;">Register</a></li>
      @else
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"  style="color:white;" role="button" aria-expanded="false">
            {{ Auth::user()->email }} <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu" style="background-color:crimson; font-size:16px;">
            <li><a href="{{ route('profile') }}" style="color:black;">View Profile</a></li>
            <li><a href="#" style="color:black;">Edit Profile</a></li>
            @if(!Auth::user('isAdmin'))
            <li><a href="{{ url('/request') }}" style="color:black;">Career Request</a></li>
            <li><a href="{{ route('suggestion') }}" style="color:black;">Career Suggestion</a></li>
            <li><a href="#" style="color:black;">Deactivate Account </a></li>
            @endif
            <li>
              <a href="{{ route('logout') }}" style="color:black;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
          </ul>
        </li>
      @endif
    </ul>
  </div>
  </div><!-- /.navbar-collapse <--></-->
</nav>

