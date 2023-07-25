@extends('Admin.layout')
@section('content')


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Create Pass</h1>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">

        <div class="col-lg-12">

          

          <div class="card">
            <div class="card-body ">

              <!-- No Labels Form -->
              <form class="row g-3 mt-3" action="{{ URL::to('admin/save-pass') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                    <label>Full Name</label>
                  <input type="text" class="form-control" name="full_name" placeholder="Enter Full Name" required>

                  @error("full_name")
                    <strong class="text-danger">{{ $message }}</strong>
                  @enderror
                </div>

                <div class="col-md-12">
                    <label>Profile Image</label>
                    <input type="file" class="form-control" name="profile_image" required>
  
                    @error("profile_image")
                      <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>

                <div class="col-md-12">
                    <label>Contact Number</label>
                    <input type="number" class="form-control" name="contact_number" placeholder="Contact Number" required>
  
                    @error("contact_number")
                      <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>

                <div class="col-md-12">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
  
                    @error("email")
                      <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>

                <div class="col-md-12">
                    <label>Cnic No</label>
                    <input type="number" class="form-control" name="cnic_no" placeholder="Enter Cnic #" required>
  
                    @error("cnic_no")
                      <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>

                <div class="col-md-12">
                    {{-- <input type="email" class="form-control" name="cnic_no" placeholder="Enter Cnic #"> --}}
                    <label>Category</label>
                    <select name="category" id="" class="form-control">
                        @if ($categories)
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
                            @endforeach
                        @endif
                    </select>

                    @error("cnic_no")
                      <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>

                <div class="col-md-12">
                    <label>From Date</label>
                    <input type="date" class="form-control" name="from_date" data-date="" data-date-format="DD MMMM YYYY" required>
  
                    @error("from_date")
                      <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>

                <div class="col-md-12">
                    <label>To Date</label>
                    <input type="date" class="form-control" name="to_date" required>
  
                    @error("to_date")
                      <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>

                <div class="col-md-12">
                    <label>Enter Cost</label>
                    <input type="number" class="form-control" name="cost" placeholder="Enter Cost" required>
  
                    @error("cost")
                      <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>

                <div class="col-md-12">
                    <label>From Location</label>
                    <input type="text" class="form-control" name="from_location" placeholder="Enter From Location" required>
  
                    @error("from_location")
                      <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>

                <div class="col-md-12">
                    <label>Destination</label>
                    <input type="text" class="form-control" name="destination" placeholder="Enter Destination" required>
  
                    @error("destination")
                      <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                </div>


                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save Pass</button>
                </div>
              </form><!-- End No Labels Form -->

            </div>
          </div>


        </div>
      </div>
    </section>

  </main><!-- End #main -->



@endsection