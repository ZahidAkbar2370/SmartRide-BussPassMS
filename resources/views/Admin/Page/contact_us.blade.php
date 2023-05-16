@extends('Admin.layout')
@section('content')


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Conatct us</h1>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">

        <div class="col-lg-12">

          

          <div class="card">
            <div class="card-body ">

              @if(Session::has('message'))
                  <span class="bg-success p-2 mb-3 text-white">{{ Session::get('message') }}</span>
              @endif
              <!-- No Labels Form -->
              <form class="row g-3 mt-3" action="{{ URL::to('admin/update-contact-us-page') }}" method="post">
                @csrf
                <div class="col-md-12">
                  <input  type="text" class="form-control" name="contact_number" value="{{ $setting->contact_number }}" placeholder="Enter Your Contact Number">

                  @error("contact_number")
                    <strong class="text-danger">{{ $message }}</strong>
                  @enderror
                </div>

                <div class="col-md-12">
                    <input  type="text" class="form-control" name="contact_email" value="{{ $setting->contact_email }}" placeholder="Enter Your Email">
  
                    @error("contact_email")
                      <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                  </div>

                  <div class="col-md-12">
                    <input  type="text" class="form-control" name="address" value="{{ $setting->address }}" placeholder="Enter Your Address">
  
                    @error("address")
                      <strong class="text-danger">{{ $message }}</strong>
                    @enderror
                  </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Save Setting</button>
                </div>
              </form><!-- End No Labels Form -->

            </div>
          </div>


        </div>
      </div>
    </section>

  </main><!-- End #main -->



@endsection