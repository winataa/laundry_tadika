@extends('admin.layout.templateAdmin')

@section('page-heading2')
{{-- <div class="justify-content-between mb-4">
    <h1 class="h1 mb-0 text-gray-800 mb-4 ">Add Service</h1>
</div> --}}
@endsection

@section('content2')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="justify-content-between mb-4">
                    <h1 class="h2 mb-0 text-gray-800 mb-4 ">Add Service</h1>
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

              <form class="forms-sample" action="{{ url('service-store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Category</label>
                            <input type="text" name="category" class="form-control" value="{{ old('category') }}" placeholder="Enter the category">
                            <p style="font-size:13px" class="mt-0">Note: Laundry, Dry Cleaning, Just Wash, Just Dry, Just Iron  </p>

                            @error('category')
                            <small class="text-danger">Please check the Category Name</small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Product</label>
                            <input type="text" name="product" class="form-control" value="{{ old('product') }}" placeholder="Enter the product">
                            @error('product')
                            <small class="text-danger">Please check the Product Name</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" accept="image/*">
                            @error('image')
                            <small class="text-danger">Please check the Images</small>   
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" name="price" class="form-control" value="{{ old('price') }}" placeholder="Enter the price">
                            @error('price')
                            <small class="text-danger">Please check the Price</small>
                            @enderror
                        </div>
                    </div>
                </div>
                {{-- <h4 class="card-title">Price Service of Tadika Laundry</h4>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Laundry Price</label>
                            <input type="number" name="laundry_price" class="form-control" value="{{ old('laundry_price') }}" placeholder="Laundry Price">
                            @error('laundry_price')
                            <small class="text-danger">Please check the Laundry Price</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Dry Clean Price</label>
                            <input type="number" name="dryclean_price" class="form-control" value="{{ old('dryclean_price') }}" placeholder="Dry Clean Price">
                            @error('dryclean_price')
                            <small class="text-danger">Please check the Dry Clean Price</small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Wash Price</label>
                            <input type="number" name="wash_price" class="form-control" value="{{ old('wash_price') }}" placeholder="Wash Price">
                            @error('wash_price')
                            <small class="text-danger">Please check the Wash Price</small>
                            @enderror
                        </div>
                    </div>
                </div>
               
              <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Dry Price</label>
                        <input type="number" name="dry_price" class="form-control" value="{{ old('dry_price') }}" placeholder="Dry Price">
                        @error('dry_price')
                        <small class="text-danger">Please check the Dry Price</small>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Iron Price</label>
                        <input type="number"   name="iron_price" class="form-control" value="{{ old('iron_price') }}" placeholder="Iron Price">
                        @error('iron_price')
                        <small class="text-danger">Please check the Iron Price</small>
                        @enderror
                    </div>
                </div>

              </div>
  --}}


                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="{{ url('service')}}" class='btn btn-light'>Cancel</a>
              </form>
            </div>
          </div>
    </div>
</div>
@endsection