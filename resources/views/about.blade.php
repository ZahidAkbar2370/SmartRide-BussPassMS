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
                <a href="https://web.whatsapp.com/" target="_blank" class="ml-4">Need Help?</a>
            </div> 
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">About Us</h3>
                <p class="text-center mt-3">
                    {{ $aboutUs->about_us ?? '' }}
                </p>
            </div>

        </div>
    </div>
    


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>