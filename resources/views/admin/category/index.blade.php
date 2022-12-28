@extends('admin.layout.templateAdmin')

@section('page-heading')
<div class="justify-content-between mb-4">
    <h1 class="h1 mb-0 text-gray-800 mb-4 ">Category</h1>
    <a href="{{ url('category-create') }}" class="btn btn-primary">Add Category</a> <br>

</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
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
            <table class="table table-bordered table-striped" width="100%" class="display nowrap">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($kategori as $c)
              <tr>
                  <td>{{ $c->id  }}</td>
                  <td>{{ $c->name  }}</td>
                  <td><img src="{{ asset('/uploads/category/'.$c->image) }}" alt="" style="margin-top: 10px" width="60px" height="60px">
                    {{ $c->image  }}
                    
                  <td>
                    <div style="display: flex">
                       <a href="{{ url('category-edit-'.$c->id)}}" class="btn btn-info">Edit</a>
                     <form action="" method="POST" class="d-inline">
                      @method('delete')
                      <a href="{{ url('category-delete-'.$c->id)}}" class='btn btn-danger'>Delete</a>
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
@endsection