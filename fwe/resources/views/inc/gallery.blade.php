  @yield('content')

 <!-- Gallery===================================-->
  <div class="jumbotron" id="Gallery">
    <h3>Our Gallery</h3>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut quisquam repellendus fugit in distinctio quibusdam,
      ut explicabo ex quasi suscipit aliquam minus vitae, alias adipisci, dolorum nemo reiciendis commodi reprehenderit?</p>
       


          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('/images/black1.jpg')}}" alt="First slide">
                  <div class="carousel-caption d-none d-md-block text-left">
                  <h3>Auditorium Gallery</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio eum optio nesciunt quia dolore, minus esse quis odit quasi, commodi repellendus! Accusantium libero dignissimos a. Iure fugiat voluptatibus dicta. Modi?</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('/images/black2.jpg')}}" alt="Second slide">
                  <div class="carousel-caption d-none d-md-block text-left">
                  <h3>Auditorium Gallery</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio eum optio nesciunt quia dolore, minus esse quis odit quasi, commodi repellendus! Accusantium libero dignissimos a. Iure fugiat voluptatibus dicta. Modi?</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('/images/black3.jpg')}}" alt="Third slide">
                 <div class="carousel-caption d-none d-md-block text-left">
                  <h3>Auditorium Gallery</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio eum optio nesciunt quia dolore, minus esse quis odit quasi, commodi repellendus! Accusantium libero dignissimos a. Iure fugiat voluptatibus dicta. Modi?</p>
                </div>
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

  <!-- Gallery Ends Here===============================-->
