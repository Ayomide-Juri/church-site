  @yield('content')

 <!--Misson===============================-->
  <div class="jumbotron container text-center" id="who">
    <img src="{{asset('/images/who we are.png')}}" class="img-fluid">
    <div class="text-center">
      <div class="row">
        <div class="col-md-4">
          <img src="{{asset('/images/mission-png-3.png')}}" width="230" height="200">
          <h3 class="lead text-light">Our Misson</h3>
          <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore incidunt reprehenderit, ipsum
            natus dicta itaque veniam unde pariatur totam ab! In eveniet officia ab quasi odio soluta sunt nostrum itaque
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum amet consectetur vitae placeat id consequatur
          </p>
        </div>
        <div class="col-md-4">
          <img src="{{asset('/images/motto-png-4.png')}}" width="200" height="200">
          <h3 class="lead text-light">Our Motto</h3>
          <p class="text-light">Faith In The Word Liberates Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam
            eos reprehenderit, nostrum dolorem laboriosam temporibus corporis vel, dignissimos quo sint, repudiandae a assumenda
            quam error incidunt laborum? Reiciendis, voluptates assumenda!
          </p>
        </div>
        <div class="col-md-4">
          <img src="{{asset('/images/what we do.png')}}" width="200" height="200">
          <h3 class="lead text-light">What We Do</h3>
          <p class=" text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore incidunt reprehenderit,
            ipsum natus dicta itaque veniam unde pariatur totam ab! In eveniet officia ab quasi odio soluta sunt nostrum
            itaque Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum amet consectetur vitae placeat id consequatur
          </p>
        </div>

        <div class="col-md-12">
   
          <h3 class="lead text-light">Upcoming Events (flyer)</h3>
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{asset('/images/women.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('/images/men.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('/images/abraham.jpg')}}" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
      </div>
    </div>
  </div>

  <!-- Misson Ends Here===============================-->
