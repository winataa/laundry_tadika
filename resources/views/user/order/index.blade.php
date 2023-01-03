@extends('user.layout.templateUser')

@section('page-heading')
<div class="justify-content-between mb-4">
    <h1 class="h1 mb-0 text-gray-800 mb-4 ">Service</h1>
    <a href="{{ url('order-create') }}" class="btn btn-primary">Add Service</a> <br>

</div>
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            
              {{-- <div class="row">
                <div class="col-md-12">
                    @if(session()->has('message'))
                    <div class="alert alert-success text-center">{{ session('message') }}
                    </div>
                    @endif
                </div>
              </div> --}}

            <br>
            <h1>haii {{ __('Name') }}</h1>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <i class="mdi mdi-account-check"></i> mdi mdi-account-check
          </div>
            {{-- <div class="table-responsive"> 
            <table class="table table-striped" class="display nowrap">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product</th>
                    <th>Laundry Price</th>
                    <th>Dry Cleaning Price</th>
                    <th>Wash Price</th>
                    <th>Dry Price</th> 
                    <th>Iron Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($service as $s)
              <tr>
                  <td>{{ $s->service_id }}</td>
                  <td>{{ $s->product  }}</td>
                  <td>{{ $s->laundry_price}}</td>
                  <td>{{ $s->dryclean_price}}</td>
                  <td>{{ $s->wash_price}}</td>
                  <td>{{ $s->dry_price}}</td>
                  <td>{{ $s->iron_price}}</td>
                  <td>
                    <div style="display: flex">
                       <a href="{{ url('service-edit-'.$s->service_id)}}" class="btn btn-info">Edit</a>
                     <form action="" method="POST" class="d-inline">
                      @method('delete')
                      <a href="{{ url('service-delete-'.$s->service_id)}}" class='btn btn-danger'>Delete</a>
                     </form>
                    </div>
                     
                  </td>
              </tr>

              @endforeach


          </tbody>
        </table>
      </div> --}}
            </div>
          </div>
    </div>
</div>
@endsection