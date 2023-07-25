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

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">Pass Request</h3>
                <div>
                    @if(Session::has("message"))
                        <p class="bg-success p-2 mt-3">{{ Session::get("message") }}</p>
                    @endif
                </div>
                <form class="card p-3 mt-5" action="{{ URL::to('save-pass') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                      <div class="col-4">
                        <label>Full Name</label>
                        <input type="text" class="form-control" name="full_name" placeholder="FullName" required>
                      </div>

                      <div class="col-4">
                        <label>Image</label>
                        <input type="file" class="form-control" name="profile_image" required>
                      </div>

                      <div class="col-4">
                        <label>Contact #</label>
                        <input type="number" class="form-control" name="contact_number" placeholder="Contact #" required>
                      </div>
                    </div>


                    <div class="form-row mt-3">
                      <div class="col-4">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                      </div>

                      <div class="col-4">
                        <label>Category</label>
                        <select class="form-control" name="category" required>
                            <option value="">Please Select Category</option>
                            @if(!empty($categories))
                                @foreach ($categories as $category)
                                    <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                                @endforeach
                            @endif
                        </select>
                        {{-- <input type="email" class="form-control" name="email" placeholder="Enter Email"> --}}
                      </div>

                      <div class="col-4">
                        <label>From Date</label>
                        <input type="date" class="form-control" name="from_date" required>
                      </div>
                    </div>

                    <div class="form-row mt-3">

                      <div class="col-4">
                        <label>To Date</label>
                        <input type="date" class="form-control" name="to_date" required>
                      </div>

                      <div class="col-4">
                        <label>From Location</label>
                        <input type="text" class="form-control" name="from_location" placeholder="From Location" required>
                      </div>

                      <div class="col-4">
                        <label>Destination</label>
                        <input type="text" class="form-control" name="destination" placeholder="Destination" required>
                      </div>

                    </div>

                    <div class="form-row m-4">
                        <div class="col-4">
                            <button type="submit" class="btn btn-success" onclick="return confirm('are you sure to send request?')">Save</button>
                          </div>
                    </div>
                  </form>
            </div>

        </div>
    </div>
    


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>