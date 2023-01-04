@extends('admin.layout.templateAdmin')

@section('page-heading2')
{{-- <div class="justify-content-between mb-4">
    <h1 class="h1 mb-0 text-gray-800 mb-4 ">Edit Category</h1>
</div> --}}
@endsection

@section('content2')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
 
                <div class="justify-content-between mb-4">
                    <h1 class="h2 mb-0 text-gray-800 mb-4 ">Edit Service</h1>
                </div>
                <hr>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

              <form class="forms-sample" action="{{ url('category-update-'.$category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Name of Category</label>
                    <input type="text" name="name" value="{{ $category->name }}" class="form-control" placeholder="Name">
                    @error('name')
                    <small class="text-danger">Please check the Category Name</small>
                    
                    @enderror
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" value="{{ $category->description }}" class="form-control" placeholder="Description">
                    @error('description')
                    <small class="text-danger">Please check the description Name</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Image</label>
                    {{-- <input type="file" name="image" class="file-upload-default"> --}}
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" accept="image/*" {{ old('image') }}>
                    
                    <img src="{{ asset('/uploads/category/'.$category->image) }}" alt="" style="margin-top: 10px" width="60px" height="60px">
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