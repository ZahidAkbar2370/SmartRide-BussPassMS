<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smart Ride</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style type="text/css">
        .ancher{
            text-decoration: none;
        }
        a:link {
  text-decoration: none;
  font-size: 20px
}
a{
    color: white

}
a:hover{
    color: rgb(255, 255, 255)

}
    </style>
</head>
<body>



    <div class="container-fluid bg-dark">
        <div class="row">
            <div class="col-3 p-2">
                <h3 class="text-white"><a href="{{ url('/') }}">Smart Ride</a></h3>
            </div>

           
            <div class="col-md-4 col-sm-12 offset-md-5 p-2" id="menus">
                <a href="{{ url('/') }}" class="ml-4">Home</a>
                <a href="{{ url('about') }}" class="ml-4">About</a>
                <a href="{{ url('contact-us') }}" class="ml-4">Contact us</a>
                <a href="{{ url('pass') }}" class="ml-4"> Pass</a>
            </div> 
        </div>
    </div>

    <div class="container-fluid p-0 m-0">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('1.jpg') }}" style="height: 580px;width: 100%;" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('2.jpg') }}" style="height: 580px;width: 100%;" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('3.jpg') }}" style="height: 580px;width: 100%;" alt="Third slide">
                      </div>

                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('4.jpg') }}" style="height: 580px;width: 100%;" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>

        </div>
    </div>


    <div class="container mt-3">
      <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">Welcome to our bus pass system!</h3>
                <p class="card-text text-justify">We are thrilled to have you on board as a valued member of our transportation community. With our efficient and user-friendly bus pass system, getting around town has never been more convenient. Say goodbye to the hassle of carrying change or searching for exact fares – our system offers a seamless and cashless way to travel.

                  Whether you're a daily commuter, a student heading to school, or someone exploring the city, our bus pass system is designed to cater to your needs. Enjoy the freedom of unlimited rides within your chosen pass duration, and hop on and off buses as you please. Our extensive network of routes ensures you can reach your destination with ease.
                  
                  Safety and security are at the forefront of our priorities. Rest assured, our buses are regularly sanitized, and our drivers are well-trained to ensure a smooth and safe journey for all passengers. Your comfort and well-being matter to us, and we strive to make your travel experience a pleasant one.
                  
                  Our team is always here to assist you with any inquiries or support you may need. If you ever have questions about our bus pass system or need guidance, feel free to reach out to us. We're dedicated to providing excellent customer service and making your travel experience as convenient as possible.
                  
                  Thank you for choosing our bus pass system! We look forward to being a part of your daily journeys and helping you explore all that our wonderful city has to offer. Hop on, sit back, and let our bus pass system take you where you need to go!</p>
                <a href="{{ url('pass') }}" class="btn btn-primary">Start Now</a>
              </div>
            </div>
          </div>

      </div>
    </div>

    {{-- <div class="container mt-3">
      <div class="row">
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="..." alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="..." alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="..." alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
      </div>
    </div> --}}


    <div class="container-fluid mt-5 p-0 m-0">
        <div class="row">
            <div class="col-12 text-center">
              <p>Design and Developed by Awais</p>
            </div>

        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>