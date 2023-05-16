@extends('Admin.layout')
@section('content')


<main id="main" class="main">

    <div class="pagetitle">
      <h1>About us</h1>
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
              <form class="row g-3 mt-3" action="{{ URL::to('admin/update-about-us') }}" method="post">
                @csrf
                <div class="col-md-12">
                  <textarea class="form-control" name="about_us" placeholder="Enter Your About">{{ $setting->about_us ?? '' }}</textarea>

                  @error("about_us")
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