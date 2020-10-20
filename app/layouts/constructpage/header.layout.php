  
</head>
<body>
  <!--================Header Menu Area =================-->
  <header class="header_area">
    <div class="top_menu">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="float-left">
              <p>Phone: +01 256 25 235</p>
              <p>email: info@eiser.com</p>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="float-right">
                <p>Phone: +20 0114 586 3221</p>
                <p>email: info@amr.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main_menu">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light w-100">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a class="navbar-brand logo_h" href="{{route('/')}}">
            <img src="{{asset('image/logo.png')}}" alt="" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
            <div class="row w-100 mr-0">
              <div class="col-lg-7 pr-0">
                <ul class="nav navbar-nav center_nav pull-right">
                  <li class="nav-item active">
                  <a class="nav-link" href="{{route('/')}}">Home</a>
                  </li>
                  <li class="nav-item submenu">
                    <a  href="{{route('indexProduct')}}" class="nav-link"
                     role="button" aria-haspopup="true"
                      aria-expanded="false">Shop</a>
                  </li>
                  <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false">Blog</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="single-blog.html">Blog Details</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                      aria-expanded="false">Pages</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a class="nav-link" href="tracking.html">Tracking</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="elements.html">Elements</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                  </li>
                </ul>
              </div>

              <div class="col-lg-5 pr-0">
                <ul class="nav navbar-nav navbar-right right_nav pull-right">
                  {{-- <li class="nav-item dropdown submenu">
                    <a href="#" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      <i class="fas fa-search" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right w-100" aria-labelledby="navbarDropdown">
                        <li>
                            <form action="" method="post" style="width:100%!important ">
                                @csrf
                                    <div style="display: flex; width:100%!important;">
                                        <input type="text" name="search" class="w-100 h-100">
                                        <button class="text-white bg-primary"><i class="fas fa-search" aria-hidden="true"></i><button>
                                    <div>
                           </form>
                        </li>
                    </ul>
                  </li> --}}

                  <li class="nav-item notifications">
                  <a href="{{route('OrderUser')}}" class="icons notification">
                      <i data-count = "0" class="fas fa-shopping-cart"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('Checkproduct')}}" class="icons">
                        <i class="fas fa-eye"></i>
                      </a>
                    </li>

                  <li class="nav-item">
                  <a href="{{route('myfavourite')}}" class="icons">
                      <i class="far fa-heart" aria-hidden="true"></i>
                    </a>
                  </li>
                  @if(Auth::user())
                  <li class="nav-item dropdown submenu pl-2">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>


                    {{ Auth::user()->name }}


                    <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                        <li class="nav-item">
                        <a href="{{Route('US_index')}}" class="nav-link">
                                MyProfile
                            </a>
                        </li>

                        <li class="nav-item">  <a class="nav-link" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
        </li>
                 @else
                    <li class="nav-item">
                        <a href="{{route('login')}}" class="icons">
                        <i class="far fa-user" aria-hidden="true"></i>
                        </a>
                    </li>
                  @endif


                </ul>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!--================Header Menu Area =================-->



