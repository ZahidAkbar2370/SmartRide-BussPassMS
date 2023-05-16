@extends('Admin.layout')
@section('content')


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Create Category</h1>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">

        <div class="col-lg-12">

          

          <div class="card">
            <div class="card-body ">

              <!-- No Labels Form -->
              <form class="row g-3 mt-3" action="{{ URL::to('admin/save-category') }}" method="post">
                @csrf
                <div class="col-md-12">
                  <input type="text" class="form-control" name="category_name" placeholder="Enter Category Name">

                  @error("category_name")
                    <strong class="text-danger">{{ $message }}</strong>
                  @enderror
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End No Labels Form -->

            </div>
          </div>


        </div>
      </div>
    </section>

  </main><!-- End #main -->



@endsection