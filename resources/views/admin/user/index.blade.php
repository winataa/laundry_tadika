@extends('admin.layout.templateAdmin')

@section('page-heading')
<div class="justify-content-between mb-4">
    <h1 class="h1 mb-0 text-gray-800 mb-4 ">Users Information</h1>
    {{-- <a href="{{ url('category-create') }}" class="btn btn-primary">Add Category</a> <br> --}}

</div>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                    @if(session()->has('message'))
                    <div class="alert alert-success text-center">{{ session('message') }}
                    </div>
                    @endif
                </div>
              </div>

              {{-- <div class="flash-data" data-flashdata={{ $this->session->flashdata('flash') }}></div> --}}
            <br>
            <h4 class="card-title">Our User</h4>
            <div class="table-responsive"> 
              <table class="table table-striped" class="display nowrap">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($contact as $c)
              <tr>
                  <td>{{ $c->id  }}</td>
                  <td>{{ $c->first_name  }}</td>
                  <td>{{ $c->last_name  }}</td>
                  <td>{{ $c->email  }}</td>
                  <td>
                    <div style="display: flex">
                       <a href="{{ url('contact-notif-view-'.$c->id)}}" class="btn btn-info">View</a>
                     <form action="" method="POST" class="d-inline">
                      @method('delete')
                      <a href="{{ url('contact-notif-delete-'.$c->id)}}" class='btn btn-danger'>Delete</a>
                     </form>
                    </div>
                     
                  </td>
              </tr>

              @endforeach


          </tbody>
        </table>
      </div>
            </div>
          </div>
    </div>
</div>
@endsection