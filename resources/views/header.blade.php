<header id="fh5co-header" role="banner">
    <div class="container">
        <div class="header-inner">
            <div class="row">
                <div class="col-sm-2 col-dm-2">
                    <h1><a href="{{'/'}}">MyFitness</a></h1>
                </div>
                <div class="col-sm-3 col-dm-4">
                    <div id="custom-search-input">
                        <form action="/search" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="input-group">
                                <input type="text" class="search-query form-control" placeholder="Search" name="search">
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="submit">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-7 col-dm-6">
                    <nav role="navigation">
                        <ul>
                            <li><a href="/{{'programs'}}">Programs</a></li>
                            @if(Auth::check())
                            <li><a href="/{{Auth::user()->username}}/profile">{{Auth::user()->fullname}}</a></li>
                            <li><a href="/{{Auth::user()->username}}/my_page">My Page</a></li>
                            <!-- <li class="has-dropdown">
                              <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Auth::user()->fullname}} <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Profile</a></li>
                                <li><a href="{{'logout'}}">Logout</a></li>
                              </ul>
                            </li> -->
                            <li><a href="/{{'logout'}}">Logout</a></li>
                            @else
                            <li class="cta"><a href="{{'login'}}">Get started</a></li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-md-12 copyright text-center">
        </div>
    </div>
</header>
