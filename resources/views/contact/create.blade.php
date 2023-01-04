<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <link rel="stylesheet" href="css/kontak.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
   <div class="container" style="background-image: url('img/bg-01.jpg');">
      <div class="row">
         <div class="col-md-12">
             @if(session()->has('message'))
             <div class="alert alert-success text-center">{{ session('message') }}
             </div>
             @endif
         </div>
       </div>
       {{-- <form class="forms-sample" action="{{ url('contact-store') }}" method="POST" enctype="multipart/form-data">
         @csrf --}}
        <div class="text">Contact us </div>
        <form action="{{ url('contact-store') }}" method="POST" enctype="multipart/form-data">
         @csrf
           <div class="form-row">
              <div class="input-data">
                 <input type="text" name="first_name" required>
                 <div class="underline"></div>
                 <label style="padding-left: 10px" for="">First Name</label>
                 {{-- <input type="text" name="first_name" class="form-control" value="{{ old('name') }}" placeholder="Name"> --}}
              </div>
              <div class="input-data">
                 <input type="text" name="last_name" required>
                 <div class="underline"></div>
                 <label style="padding-left: 10px" for="">Last Name</label>
                 {{-- <input type="text" name="last_name" class="form-control" value="{{ old('name') }}" placeholder="Name"> --}}
              </div>
           </div>
           <div class="form-row">
              <div class="input-data">
                 <input type="text" name="email" required>
                 <div class="underline"></div>
                 <label style="padding-left: 10px" for="">Email Address</label>
                 {{-- <input type="text" name="email" class="form-control" value="{{ old('name') }}" placeholder="Name"> --}}
              </div>
              <!-- <div class="input-data">
                 <input type="text" required>
                 <div class="underline"></div>
                 <label for="">Website Name</label>
              </div> -->
           </div>
           <div class="form-row">
              <div class="input-data textarea">
                 <textarea  name="massage" required></textarea>
                 <br />
                 <div class="underline"></div>
                 {{-- <input type="text"  name="massage"  required> --}}
                 <label style="padding-left: 10px" for="">Write your message</label>
                 <br />
                 {{-- <input type="text" name="massage" class="form-control" value="{{ old('name') }}" placeholder="Name"> --}}
                 {{-- <div class="form-row submit-btn">
                    <div class="input-data">
                       <div class="inner"></div>
                       <input type="submit" value="submit"> 
                      
                    </div>
                 </div> --}}
              </div>
           </div>

           <!-- <button type="submit" class="btn btn-primary mr-2">Submit</button> -->
            <button class="btnbtn-primary" type="submit">Submit</button> 
           <a href="{{ url('/')}}" class='btnbtn-light' style="text-decoration:none">Cancel</a>
        </form>
     </div>
</body>
</html>