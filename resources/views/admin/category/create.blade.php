@extends('admin.layout.templateAdmin')

@section('page-heading2')
<div class="justify-content-between mb-4">
    <h1 class="h1 mb-0 text-gray-800 mb-4 ">Add Category</h1>
</div>
@endsection

@section('content2')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
         
                <h4 class="card-title">Category of Tadika Laundry</h4>
              <form class="forms-sample" action="{{ url('category-store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Name of Category</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Name">
                    @error('name')
                    <small class="text-danger">Please check the Category Name</small>
                    
                    @enderror
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" class="form-control" value="{{ old('description') }}" placeholder="Description">
                    @error('description')
                    <small class="text-danger">Please check the description Name</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Image</label>
                    {{-- <input type="file" name="image" class="file-upload-default"> --}}
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" accept="image/*">
                    
                    @error('image')
                    <small class="text-danger">Please check the Images</small>   
                     @enderror

                </div>

                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="{{ url('category')}}" class='btn btn-light'>Cancel</a>
              </form>
            </div>
          </div>
    </div>
</div>
@endsection