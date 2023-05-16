@extends('Admin.layout')
@section('content')


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Category</h1>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">

        <div class="col-lg-12">

          

          <div class="card">
            <div class="card-body ">

              <!-- No Labels Form -->
              <form class="row g-3 mt-3" action="{{ URL::to('admin/update-category') }}" method="post">
                @csrf
                <input name="id" type="hidden" value="{{ $category->id }}"> 
                <div class="col-md-12">
                  <input type="text" class="form-control" name="category_name" value="{{ $category->category_name }}" placeholder="Enter Category Name">

                  @error("category_name")
                    <strong class="text-danger">{{ $message }}</strong>
                  @enderror
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form><!-- End No Labels Form -->

            </div>
          </div>


        </div>
      </div>
    </section>

  </main><!-- End #main -->



@endsection