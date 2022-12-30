@extends('admin.layout.templateAdmin')

@section('page-heading')
<div class="justify-content-between mb-4">
    <h1 class="h1 mb-0 text-gray-800 mb-4 ">Add Service</h1>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Category of Tadika Laundry</h4>
              <form class="forms-sample">
                <div class="form-group">
                  <label>Name of Category</label>
                  <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                  <label></label>
                  <input type="text" name="description" class="form-control" placeholder="Description">
                </div>
                <div class="form-group">
                  <label>Image</label>
                  <input type="file" name="image" class="file-upload-default">
                  <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                    <span class="input-group-append">
                      <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                    </span>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
              </form>
            </div>
          </div>
    </div>
</div>
@endsection