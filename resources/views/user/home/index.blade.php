@extends('user.layout.templateUser')

@section('page-heading')
<div class="justify-content-between mb-4">
    <h1 class="h1 mb-0 text-gray-800 mb-4 ">Profile</h1>
</div>
@endsection

@section('content')

      <div class="container">
        <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
        <div class="card h-80">
            <div class="card-body">
                <div class="account-settings">
                    <div class="user-profile">
                        <div class="user-avatar">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                        </div>
                        <h5 class="user-name">{{ Auth::user()->name }}</h5>
                        <h6 class="user-email">{{ Auth::user()->email }}</h6>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            @if(session()->has('message'))
                            <div class="alert alert-success text-center">{{ session('message') }}
                            </div>
                            @endif
                        </div>
                      </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
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
            <form class="forms-sample" action="{{ url('user-update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row gutters">
                    
        

                   
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6 class="mb-2 text-primary">Personal Details</h6>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="fullName">Full Name</label>
                            <input type="text" name="name" class="form-control" value ="{{ Auth::user()->name }}" id="fullName" placeholder="Enter full name">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="eMail">Email</label>
                            <input type="email"  name="email" class="form-control" id="eMail" value ="{{ Auth::user()->email }}" placeholder="Enter email ID">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="number" name="phone" class="form-control" id="phone" value ="{{ Auth::user()->phone }}"  placeholder="Enter phone number">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="website">Number Room</label>
                            <input type="number" name="room" class="form-control" id="room" value ="{{ Auth::user()->room }}"  placeholder="Number Room">
                        </div>
                    </div>
                </div>
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6 class="mt-3 mb-2 text-primary">Address</h6>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="Street">Street</label>
                            <input type="text" name="street" class="form-control" id="Street" value ="{{ Auth::user()->street }}" placeholder="Enter Street">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="ciTy">City</label>
                            <input type="text" name="city" class="form-control" id="ciTy" value ="{{ Auth::user()->city }}" placeholder="Enter City">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="sTate">State</label>
                            <input type="text" name="state" class="form-control" id="sTate" value ="{{ Auth::user()->state }}" placeholder="Enter State">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="zIp">Zip Code</label>
                            <input type="text" name="zip" class="form-control" id="zIp" value ="{{ Auth::user()->zip }}" placeholder="Zip Code">
                        </div>
                    </div>
                </div>
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="text-right">
                            <button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button>
                            <button type="submmit" id="submit" name="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>

            </form>

            </div>
        </div>
        </div>
        </div>
        </div>  
@endsection