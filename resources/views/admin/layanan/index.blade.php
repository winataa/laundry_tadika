@extends('admin.layout.templateAdmin')

@section('page-heading')
<div class="justify-content-between mb-4">
    <h1 class="h1 mb-0 text-gray-800 mb-4 ">Service</h1>
    <a href="{{ url('service-create') }}" class="btn btn-primary">Add Service</a> <br>

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
            <div class="table-responsive"> 
            <table class="table table-striped" class="display nowrap">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Product</th>
                    <th>Price</th>
                    
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($service as $s)
              <tr>
                  <td>{{ $s->service_id }}</td>
                  <td> <img src="{{ asset('/uploads/layanan/'.$s->image) }}" alt="" style="margin-top: 10px" width="60px" height="60px">
                    {{-- {{ $s->image  }} --}}
                    
                  </td>
                  <td>{{ $s->category }}</td>
                  <td>{{ $s->product  }}</td>
                  <td>{{ $s->price}}</td>
              

                 
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
      </div>
            </div>
          </div>
    </div>
</div>
@endsection