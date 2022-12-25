@extends('templateLayout/templateUser')
@section('hi_orders')
<section class="dashboard" data-aos="fade-down">
        <div class="top">
          <i class="uil uil-bars sidebar-toggle"></i>
  
          <div class="search-box">
            <i class="uil uil-search"></i>
            <input type="text" placeholder="Search here..." />
          </div>
        </div>
  
        <div class="dash-content">
          <div class="overview">
            <div class="title-orders">
            <center>
             <h2>You Haven't Ordered Yet</h2><br>
            </center>
        </div>
</div>   

<!-- BUTTON BUAT KE KERANJANG -->
            <center>
            <button class="floating-btn">
                Order
            </button>
            </center>

      </section>

@endsection