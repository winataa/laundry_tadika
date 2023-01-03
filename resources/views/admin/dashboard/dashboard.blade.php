@extends('admin.layout.templateAdmin')
@section('page-heading2')
  <div class="justify-content-between mb-4">
    <h3 class="font-weight-bold ">Haiii Admin</h3>
    <div class="font-weight-normal mb-0">Welcome to Dashboard</div>
  </div>
@endsection

@section('content2')

    <div class="row">
    <div class="col-md-4 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Today Bookings</p>
                      <p class="fs-30 mb-2">4006</p>
                      <p>10.00% (30 days)</p>
                    </div>
                  </div>
                </div>

               
                <div class="col-md-4 mb-4 stretch-card transparent"> 
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Today Bookings</p>
                      <p class="fs-30 mb-2">4006</p>
                      <p>10.00% (30 days)</p>
                    </div>
                  </div>
                </div>
</div>

<div class="col-12 grid-margin stretch-card">
  <div class="card">
      <div class="card-body">
<div class="table-responsive"> 
              <table class="table table-striped" class="display nowrap">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Transaction Date</th>
                    <th>Customer</th>
                    <th>Payment</th>
                    <th>Status Order</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
</div>
</div></div></div>

@endsection