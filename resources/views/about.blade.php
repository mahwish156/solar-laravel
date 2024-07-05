@extends('admin.footer')
@extends('admin.layout')
@section('mycontent')

<div class="bg">
    <br><br>
    <h1 class="txt" >ABOUT US</h1>
  </div>

<br><br>



  <div class="container">
  <div class="row">
    <div class="col-sm-6 b2">
      <h2 class="b1 txt"> ABOUT US </h2>
      <br>
        <p>Multi-Sol  is a Pakistan-based fast-growing company which mainly works in alternative energy sector.Currently we are providing solar systems for domestic/commercial/industrial and agricultural clients with the objective of best quality of services/ uninterrupted supply of electricity and saving of heavy bills.
        </p>
    </div>

    <div class="col-sm-6">
      <img class="b3" src="{{asset('images/solar.png')}}">
    </div>
  </div>
</div>
<br>


<div class="container">
  <div class="row">

    <div class="col-sm-6">
       <img class="b3" src="{{asset('images/solar3.png')}}">
    </div>

    <div class="col-sm-6">
       <h2 class="b1 txt"> WHY CHOOSE US </h2>
       <br>
         <p> Our objective is to provide energy independency, cost efficient with best quality of services through dedicated professional team.  Our team brings extensive knowledge and experience to every project, ensuring that you receive the best solutions tailored to your specific needs. We are passionate about advancing sustainable energy practices and are dedicated to providing exceptional service and support every step of the way. Let us help you make a positive impact on the environment while meeting your energy objectives with confidence and efficiency. We Offer: <br> <br>
          <img width="300px" src="{{asset('images/solar4.png')}}">
          </p>
    </div>
    
  </div>
</div>


@endsection
