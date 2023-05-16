@extends('Admin.layout')
@section('content')


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Profile</h1>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">

        <div class="col-lg-12">

            @if(Session::has('message'))
                <span class="bg-success p-2 mb-3 text-white">{{ Session::get('message') }}</span>
             @endif
          

          <div class="card">
            <div class="card-body ">

              <!-- No Labels Form -->
              <form class="row g-3 mt-3" action="{{ URL::to('admin/update-profile') }}" method="post">
                @csrf
                <div class="col-md-12"> 
                    <input type="text" class="form-control" name="name" value="{{ Auth::user()->name ?? '' }}" placeholder="Enter Name">

                  @error("new_password")
                    <strong class="text-danger">{{ $message }}</strong>
                  @enderror
                </div>

                <div class="col-md-12"> 
                    <input type="text" class="form-control" name="email" value="{{ Auth::user()->email ?? '' }}" required>

                  @error("email")
                    <strong class="text-danger">{{ $message }}</strong>
                  @enderror
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Update Profile</button>
                </div>
              </form><!-- End No Labels Form -->

            </div>
          </div>


        </div>
      </div>
    </section>

  </main><!-- End #main -->



@endsection