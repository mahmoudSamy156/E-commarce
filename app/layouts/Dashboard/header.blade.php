  <div class="wrapper " style="height: 15vh;
  ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
      -->
      <div class="logo"><a href="#" class="simple-text logo-normal">
          <img src="{{asset('image/'.Auth::user()->image)}}" class="img-responsive"style="border-radius: 50px;" width="80px" height="80px"alte="text">
          {{Auth::user()->name}}
            </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
          <a class="nav-link" href="{{route('/')}}">
            <i class="fas fa-home"></i>
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('myorder')}}">
            <i class="far fa-file"></i>
              <p>MyOrders</p>
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-cog"></i>
            <p>Setting</p>
            </a>
            <div class="dropdown-menu w-100" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{Route('formreset')}}">Reset password</a>
              <a class="dropdown-item" href="{{Route('formdata')}}">Change Data</a>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>
              <p>{{ __('Logout') }}</p>
            </a>
          </li>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </ul>
      </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
            <div class="navbar-wrapper w-100 text-white" style="background-color: #9c27b0;">
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end ">
            </div>
        </div>
        </nav>
    </div>
</div>

