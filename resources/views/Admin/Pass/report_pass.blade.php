@extends('Admin.layout')
@section('content')


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Report</h1>
    </div><!-- End Page Title -->

    <div class="container mb-4">
      <form action="{{ URL::to('admin/search') }}" method="post">
        @csrf
      <div class="row">
        <div class="col-3">
          <label>From Date</label>
          <input type="date" name="from_date" class="form-control">
        </div>

        <div class="col-3">
          <label>To Date</label>
          <input type="date" name="to_date" class="form-control">
        </div>

        <div class="col-3">
          <input type="submit" class="btn btn-primary mt-4" value="Filter">
          <a href="{{ url('admin/view-passes') }}" class="btn btn-danger mt-4">Refresh</a>
        </div>

      </div>
    </form>
    </div>

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
                    <th scope="col">Pass Number</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @if(!empty($passes))
                    @foreach ($passes as $key => $pass)
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td>{{ $pass->category }}</td>
                            <td>{{ $pass->pass_number }}</td>
                            <td>{{ $pass->full_name }}</td>
                            <td>{{ $pass->status }}</td>
                            <td>
                                <a href="{{ url('admin/show-pass', $pass->id) }}" class="btn btn-warning">Show</a>
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