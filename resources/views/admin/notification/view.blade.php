@extends('admin.layout.templateAdmin')

@section('page-heading2')
<div class="justify-content-between mb-4">
    <h1 class="h1 mb-0 text-gray-800 mb-4 ">View Contact Notification</h1>
</div>
@endsection

@section('content2')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
                {{-- <h4 class="card-title">Category of Tadika Laundry</h4> --}}



                <div class="row">
                    <div class="col-md-6">
                        <h5>First Name</h5><p> {{ $contact->first_name }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Last Name</h5><p> {{ $contact->last_name  }}</p>
                    </div>
                </div>
                <hr>
                
                <div class="row">
                    <div class="col-md-12">
                        <h5>Email</h5><p> {{ $contact->email }}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <h5>Message</h5><p> {{ $contact->massage }}</p>
                    </div>
                </div>
                <br>
                

                <a href="{{ url('contact-notif')}}" class='btn btn btn-dark'>Back</a>
             
            {{-- </div>
          </div> --}}
    </div>
</div>
@endsection