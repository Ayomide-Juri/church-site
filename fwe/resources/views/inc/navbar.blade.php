 @yield('content')
 <!--Navigation section===============================-->
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="#"><img src="{{asset('/images/faithword.png')}}"  width="80" height="80"> Faithword Embassy
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" style=" background-image: url('{{asset('/images/menu.png')}}');"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Welcome <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Misson</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gallery</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            Join Us
          </a>
          <div class="dropdown-menu" style="background-color: rgb(149, 50, 50); border-radius:0;" aria-labelledby="navbarDropdown">
            <a class="dropdown-item text-light" href="#">Subscribe for News Letters</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item  text-light" href="#">Visit Us</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Founder</a>
        </li>
      </ul>
    </div>
  </nav>
  <!--navbar ends here===============================-->