<header>
    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <!-- logo -->
          <a class="brand logo" href="{{ route('page_path', ['controller' => 'home'])}}">
						<img src="{{ asset("assets/img/logo.png/")}}" alt="" />
				  </a>
          <!-- end logo -->

          <!-- top menu -->
          <div>
            <nav>
              <ul class="nav topnav">
                <li class="dropdown success">
                  <a href="{{ route('page_path', ['controller' => 'home'])}}"><i class="icon-home icon-white"></i> Home</a>
                </li>
                <li class=" danger">
                  <a href="{{ route('page_path', ['controller' => 'about'])}}"><i class="icon-leaf icon-white"></i> About Me</a>
                </li>
                <li class="dropdown warning">
                  <a href="{{ route('page_path', ['controller' => 'portfolio'])}}"><i class="icon-camera icon-white"></i> Portfolio</a>
                </li>
                
                <li class="inverse">
                  <a href="{{ route('page_path', ['controller' => 'contact'])}}"><i class="icon-envelope icon-white"></i> Contact</a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- end menu -->
        </div>
      </div>
    </div>
  </header>