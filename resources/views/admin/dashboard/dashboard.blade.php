@extends('admin.layout.templateAdmin')
@section('page-heading2')
<!-- <div class="justify-content-between mb-4">
   <h1 class="h1 mb-0 text-gray-800 mb-4 ">Haiii Admin</h1>
</div> -->
@endsection

@section('content2')
    <h1>Hai Admin</h1> 
    <div class="welcome-to-dashboard-UgT" id="392:67">Welcome to Dashboard</div>
    <link rel="stylesheet" href="css/dash.css">
    <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Today Bookings</p>
                      <p class="fs-30 mb-2">4006</p>
                      <p>10.00% (30 days)</p>
                    </div>
                  </div>
                </div>

               <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent"> 
                  <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Today Bookings</p>
                      <p class="fs-30 mb-2">4006</p>
                      <p>10.00% (30 days)</p>
                    </div>
                  </div>
                </div>
</div>
<div class="table-responsive"> 
              <table class="table table-striped" class="display nowrap">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Transaction Date</th>
                    <th>Customer</th>
                    <th>Payment</th>
                    <th>Status Order</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
</div>


@endsection