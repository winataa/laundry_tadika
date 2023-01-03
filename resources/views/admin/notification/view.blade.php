@extends('admin.layout.templateAdmin')

@section('page-heading2')
{{-- <div class="justify-content-between mb-4">
    <h1 class="h1 mb-0 text-gray-800 mb-4 ">View Contact Notification</h1>
</div> --}}
@endsection

@section('content2')
<div class="row">
    <div class="col-10 grid-margin stretch-card">
        <div class="card" >
            <div class="card-body" >
                <div class="justify-content-between mb-4">
                    <center><h1 class="h1 mb-0 text-gray-800 mb-4 ">View Contact Notification</h1>
                    </center>
                </div>
                <hr style="width:50%"><br><br>
                <div class="row ">
                    <div class="col-md-4 ">
                        <h5>First Name</h5><p> {{ $contact->first_name }}</p>
                    </div>
                    <br>
                    <div class="col-md-4">
                        <h5>Last Name</h5><p> {{ $contact->last_name  }}</p>
                    </div>
                </div>
                <br>
                {{-- <hr style="width:90%"> --}}
                
                <div class="row">
                    <div class="col-md-12 ">
                        <h5>Email</h5><p> {{ $contact->email }}</p>
                    </div>
                </div>
                {{-- <hr> --}}
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <h5>Message</h5><p> {{ $contact->massage }}</p>
                    </div>
                </div>
<br>
                {{-- <hr> --}}
                <div class="row">
                    <div class="col-md-12">
                        <h5>Created Date</h5><p> {{ $contact->created_at }}</p>
                    </div>
                </div>
                <br>


                <a href="{{ url('contact-notif')}}" class='btn btn btn-dark'>Back</a>
             
            {{-- </div>
          </div> --}}
    </div>
</div>
@endsection