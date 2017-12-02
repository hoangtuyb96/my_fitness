<header id="fh5co-header" role="banner">
  <div class="container">
    <div class="header-inner">
      <h1><a href="{{'/'}}">MyFitness</a></h1>
      <nav role="navigation">
        <ul>
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          @if(Auth::check())
            <li><a href="/{{Auth::user()->username}}/profile">{{Auth::user()->fullname}}</a></li>
            <li><a href="{{'logout'}}">Logout</a></li>
            <!-- <li class="has-dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Auth::user()->fullname}} <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Profile</a></li>
                <li><a href="{{'logout'}}">Logout</a></li>
              </ul>
            </li> -->
          @else
            <li class="cta"><a href="{{'login'}}">Get started</a></li>
          @endif
        </ul>
      </nav>
    </div>
    <div class="col-md-12 copyright text-center">
    </div>
  </div>
</header>
