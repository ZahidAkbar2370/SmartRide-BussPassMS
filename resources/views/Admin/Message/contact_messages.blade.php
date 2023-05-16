@extends('Admin.layout')
@section('content')


<main id="main" class="main">

    <div class="pagetitle">
      <h1>All Messages</h1>
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
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @if(!empty($messages))
                    @foreach ($messages as $key => $message)
                        <tr>
                            <th scope="row">{{ $key+1 }}</th>
                            <td>{{ $message->name }}</td>
                            <td>{{ $message->email }}</td>
                            <td>{{ $message->message }}</td>
                            <td>
                              @if($message->status == "pending")
                                <a href="{{ url('admin/mark-as-reply', $message->id) }}" class="btn btn-info">Mark as Replay</a>
                              @endif
                                <a href="{{ url('admin/delete-message', $message->id) }}" class="btn btn-danger">Delete</a>
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