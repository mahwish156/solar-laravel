@extends('admin.footer')
    <!-- @section('mycontent') -->
   
    <!-- <h1>WELCOME TO LARAVEL</h1>
    <hr> -->
@extends('admin.layout')

@section('mycontent')

<div class="container-fluid" id="a">
  <div class="row">
    <div class="col-1"></div>
    <div class="col-sm-6">
          <br><br><br><br>
       <img src="{{asset('images/solar14.jpg')}}" width="80%"></img>
    </div>
    <div class="col-sm-5">
          <br><br><br><br><br><br><br>
      <h1 id="a1" >Multi-sol Enterprises</h1>
      <h1 id="a1" >
        Warranty Protection and Long Lasting
      </h1>
     
    </div>
   
  </div>
      <br><br><br><br>
</div>
<br><br><br>

<h1 id="d">OUR PRODUCTS </h1>
<br>


<div class="container">
  <div class="row">
<!--     <div class="col-1"></div> -->
    <div class="col-sm-4">
      <div class="card " id="d3" style="width: 20rem;">
  <img src="{{asset('images/solar10.jpg')}}" class="card-img-top " alt="..." id="zoom-img">
  <div class="card-body" id="d2">
    <h5 class="card-title" id="d">INVERTER</h5>
    <p id="d">
An inverter is an essential electronic device that converts direct current (DC) into alternating current (AC). This conversion is crucial because most household appliances and industrial equipment operate on AC power, while sources like batteries and solar panels generate DC power.</p>
   
   <!--  <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
</div>
    </div>
    <div class="col-sm-4">
    <div class="card" style="width: 20rem;">
  <img src="{{asset('images/solar12.jpg')}} "id="zoom-img">
  <div class="card-body"id="d2" >
    <h5 class="card-title"id="d">SOLAR PANEL</h5>
    <p id="d">Solar panels, also known as photovoltaic (PV) panels, are devices that convert sunlight directly into electricity. They are a cornerstone of renewable energy systems, harnessing the abundant and free energy from the sun to produce clean, sustainable power.</p>
   <br>
 <!--    <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
</div>
    </div>
    <div class="col-sm-4">
     <div class="card" style="width: 20rem;">
  <img src="{{asset('images/solar11.jpg')}}" id="zoom-img"> <br>
  <div class="card-body" id="d2">
    <h5 class="card-title" id="d">INSTALLATION</h5>
    <p id="d">Installing solar panels is an effective way to reduce your energy bills and your carbon footprint. This guide provides a step-by-step overview of the solar panel installation process, from initial assessment to final setup.</p>
   <br><br>
  <!--   <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
</div>
    </div>
  </div>
</div>
<!-- FATEMA'S CODE ENEDS HERE -->


<!-- Bisma's Code -->
<div class="container">
  <!-- Heading Section -->
  <div class="row mb-4">
    <div class="col">
      <h1 class="text-center">Our Values</h1>
    </div>
  </div>
  <!-- /Heading Section -->

  <!-- Columns Section -->
  <div class="row justify-content-center">
    <div class="col-md-6">
      <h2></h2>
      <div class="text-center">
        <img src="{{asset('images/solar15.png')}}" width="20%" alt="Diamond Image">
      </div>
      <p class="text-center custom-paragraph">Multi-Sole values shape our culture and the way we conduct business. Our values are aligned with caring about our stakeholders and are instrumental in guiding every aspect of our business.</p>
    </div>
  </div>
  <!-- /Columns Section -->
</div>
<div class="text-center">
  <img src="{{asset('images/solar16.jpg')}}" class="img-fluid" alt="Responsive Image">
</div>


<div class="container">
  <div class="row">
    <div class="col-sm">
      <h5 class="text-center fs-3">Our Services</h5>
      <div  class="text-wrap text-center">
        <p>1. Solar Installation </p>
        <p>2. Storage</p>
      </div>
    </div>
    <div class="col-sm">
      <h5 class="text-center fs-3">Warranty</h5>
      <div class="text-wrap text-center">
        <p>1. 1 Year of full system warranty (within City)</p>
        <p>2. 10 Years of product warranty on panels</p>
        <p>3. 25 Years of performance warranty on panels</p>
      </div>
    </div>
  </div>
</div>
<!-- bisma's code ends here -->
<br><br>

<!-- Malika's code -->
<div class="container">
  <div class="row">
     <!-- <div class="col-sm-1">
      
    </div> -->
    <div class="col-sm-4">
        <div id="c12">
      <img src="{{asset('images/solar20.jpg')}}" id="c1"></div>
       <br>
       <div id="c12">
      <p id="c4">Installation</p></div>
      <div id="c12">
      <p id="c8">

"Transform your home with sustainable energy solutions. Our expert team ensures<br> seamless solar panel installation for a brighter tomorrow."</p>
    </div>
    </div>
     <!-- <div class="col-sm-1">
      
    </div> -->
    <div class="col-sm-4">
      <div id="c12">
      <img src="{{asset('images/solar22.jpg')}}" id="c2"></div>
      <br>
      <div id="c12">
      <p id="c3">Services</p></div>
      <div id="c12">
       <p id="c5">

"Explore our range of comprehensive solar services tailored to meet your energy needs.<br> From installation and maintenance to monitoring, we've got you covered for a sustainable energy solution."
    </div>
    </div>
     <!-- <div class="col-sm-1">
      
    </div> -->
    <div class="col-sm-4">
      <div id="c12">
      <img src="{{asset('images/solar21.jpg')}}" id="c1"></div>
       <br>
       <div id="c12">
      <p id="c6">Contact Us</p></div>
      <div id="c12">
       <p id="c7">


"Have questions about solar energy or ready to make the switch? Contact us today and take the first step towards a greener future !
 Our friendly team is here to assist you on your solar journey."
    </div>
    </div>
     </div>
   </div>






    @endsection


 



