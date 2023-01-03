@extends('admin.layout.templateAdmin')

@section('page-heading2')
{{-- <div class="justify-content-between mb-4">
    <h1 class="h1 mb-0 text-gray-800 mb-4 ">Edit Service</h1>
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

            {{-- <h4 class="card-title">Product Service of Tadika Laundry</h4> --}}
              <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('/uploads/layanan/'.$service->image) }}" alt="" style="align-content: center" width="350px">
                </div>
              
                <div class="col-md-8"> 
                    <form class="forms-sample" action="{{ url('service-update-'.$service->service_id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label>Category</label>
                            <input type="text" name="category" class="form-control" value="{{$service->category }}" placeholder="Enter the category">
                            <p style="font-size:13px" class="mt-0">Note: Laundry, Dry Cleaning, Just Wash, Just Dry, Just Iron  </p>
                            @error('category')
                            <small class="text-danger">Please check the Category Name</small>
                            @enderror
                        </div>
               
                        <div class="form-group">
                            <label>Product</label>
                            <input type="text" name="product" class="form-control" value="{{ $service->product }}" placeholder="Enter the product">
                            @error('product')
                            <small class="text-danger">Please check the Product Name</small>  
                            @enderror
                        </div> 

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" accept="image/*" value="{{ $service->image }}">
                            @error('image')
                            <small class="text-danger">Please check the Images</small>   
                        @enderror
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" name="price" class="form-control" value="{{ $service->price }}" placeholder="Enter the price">
                            @error('price')
                            <small class="text-danger">Please check the Price</small>
                            @enderror
                        </div>

                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="{{ url('service')}}" class='btn btn-light'>Cancel</a>
              </form>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection