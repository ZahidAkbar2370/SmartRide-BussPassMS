@extends('Admin.layout')
@section('content')


<main id="main" class="main">

    <div class="pagetitle">
      <h1>All Categories</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

             @if(Session::has('message'))
                <span class="bg-success p-2 mb-3 text-white">{{ Session::get('message') }}</span>
             @endif

          <div class="card">
            <div class="card-body">
              <!-- Table with stripped rows -->
              <table class="table datatable MT-3">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @if(!empty($categories))
                    @foreach ($categories as $key => $category)
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td>{{ $category->category_name }}</td>
                            <td>{{ $category->created_at }}</td>
                            <td>
                                <a href="{{ url('admin/edit-category', $category->id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ url('admin/delete-category', $category->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                  @endif
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->



@endsection