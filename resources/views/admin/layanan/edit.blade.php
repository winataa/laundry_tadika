@extends('admin.layout.templateAdmin')

@section('page-heading2')
<div class="justify-content-between mb-4">
    <h1 class="h1 mb-0 text-gray-800 mb-4 ">Edit Service</h1>
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
                <h4 class="card-title">Service of Tadika Laundry</h4>
              <form class="forms-sample" action="{{ url('service-update-'.$service->service_id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Category</label>
                    {{-- <select name="id_category" class="form-control form-select-lg mb-3" id="id_category">
                      <option value="" selected disabled hidden>Choose the Category</option>
                      @foreach($kategori as $key =>$value)
                          <option value={{$value->id}}>{{$value->name}}</option>
                      @endforeach
                    </select> --}}
                    <select name="id_category" class="form-control form-select-lg mb-3" id="id_category">
                        {{-- <option value="" selected disabled hidden>Choose the Category</option> --}}
                        @foreach($kategori as $key)
                            <option value={{$key->id}} {{ $service->id_category == $key->id ? 'selected': ''}}                         >{{$key->name}}</option>
                        @endforeach
                      </select>
                  </div>

                  {{-- <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Spesialis</label>
                    <select class="form-control form-select-lg mb-3" id="id_spesialis" aria-label=".form-select-lg example">
                      @foreach($data_spesialis as $item)
                          <option value={{$item->id}} {{ $data_doctor->id_spesialis === $item->id ? 'selected' : '' }}>{{$item->nama_spesialis}}</option>
                      @endforeach
                    </select>
                  </div> --}}
                <div class="form-group">
                    <label>Product</label>
                    <input type="text" name="product" class="form-control" value="{{ $service->product }}" placeholder="Name">
                    @error('name')
                    <small class="text-danger">Please check the Category Name</small>
                    
                    @enderror
                </div>
                <div class="form-group">
                    <label>Laundry Price</label>
                    <input type="number" name="laundry_price" class="form-control" value="{{ $service->laundry_price}}" placeholder="Description">
                    @error('laundry_price')
                    <small class="text-danger">Please check the description Name</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Dry Clean Price</label>
                    <input type="number" name="dryclean_price" class="form-control" value="{{ $service->dryclean_price}}" placeholder="Description">
                    @error('dryclean_price')
                    <small class="text-danger">Please check the description Name</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Wash Price</label>
                    <input type="number" name="wash_price" class="form-control" value="{{ $service->wash_price}}" placeholder="Description">
                    @error('wash_price')
                    <small class="text-danger">Please check the description Name</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Dry Price</label>
                    <input type="number" name="dry_price" class="form-control" value="{{ $service->dry_price}}" placeholder="Description">
                    @error('dry_price')
                    <small class="text-danger">Please check the description Name</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Iron Price</label>
                    <input type="number"   name="iron_price" class="form-control" value="{{$service->iron_price }}" placeholder="Description">
                    @error('iron_price')
                    <small class="text-danger">Please check the description Name</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Image</label>
                    {{-- <input type="file" name="image" class="file-upload-default"> --}}
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" accept="image/*" value="{{ $service->image }}">
                    
                    <img src="{{ asset('/uploads/layanan/'.$service->image) }}" alt="" style="margin-top: 10px" width="60px" height="60px">
                    @error('image')
                    <small class="text-danger">Please check the Images</small>   
                @enderror

                </div>

                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="{{ url('service')}}" class='btn btn-light'>Cancel</a>
              </form>
            </div>
          </div>
    </div>
</div>
@endsection