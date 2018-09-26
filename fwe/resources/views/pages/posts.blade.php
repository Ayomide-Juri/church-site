@extends('layouts.master')
@section('content')
            <div  id="events">
                
                    <h1 class="text-uppercase lead text-center">Upcoming Event</h1>
                    <!---Fetching the Posts--->
                    @if(count($posts) > 0)
                        @foreach($posts as $post)
                                <div class="container">
                                <h3 class="lead"><span style="font-size:40px;">Title: </span>{{$post->title}}</h3>
                                <h3 class="lead"><i class="far fa-calendar"></i> {{$post->date}}</h3>
                                <h3 class="lead"><i class="fas fa-map-marker-alt"></i> {{$post->time}}</h3>
                                <p>{{$post->body}}</p>
                                </div>
                            @endforeach
                    @else
                        <p>No Posts Found</p>
                    @endif
            </div>    



<!---Gallery---->
<div class="jumbotron container" id="gallery">
    <h1 class="lead text-center" style="font-size:40px;">Our Gallery</h1>
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('/images/worship1.jpg')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('/images/worship3.jpg')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('/images/worship3.jpg')}}" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                       <i class="fas fa-angle-double-left" style="font-size:100px; color:white;"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <i class="fas fa-angle-double-right" style="font-size:100px; color:white;"></i>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
    </div>
<!---Gallery ends here---->
                    


<!--google map-->
                <div class="text-center map" id="visit">
                    <h1 class="lead text-center" style="font-size:40px;">Visit Us</h1>
                    <div class="mapouter"><div class="gmap_canvas">
                    <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=bonny%20island&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{text-align:right;height:500px;width:600px;}.gmap_canvas
                     {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
                </div>
<!--google map ends here-->


<!--contact--->
<div class="container contact-form" id="contact">
 
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
               
            <form method="post">
                <h3>Drop Us a Message</h3>
               <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Your Phone Number *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>
<!--contact ends here-->

<!---footer--->
<!-- Footer -->
<footer class="page-footer font-small blue pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase">LOREM IPSUM</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, et. Cum nemo eveniet tempore? Illum sed dolore similique, sapiente possimus voluptates totam quis sunt officia, ea, itaque explicabo esse. Dolorum?</p>

        </div>
     
    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© Faithword Embassy 2018 Copyright
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
    @endsection

