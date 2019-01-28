@extends('layouts.main')
@section('title','SHELLS2k19 | Event Details')

@section('content')
<div class="container-fluid" style="padding: 0px;">
    <div class="bg-in-evt-det bg-light"  >
      <div class="container text-dark border-r-sm text-center card-1" id="evt-icons" style="background-color: white;">
      <img class="p-4 mt-3" src="static/img/hom/person.png" >
      <h3 class="p-2">Deep Web</h3>
      <h5 class="">Web Desiging</h5>
    </div>
    </div>
    
  </div>
  
    <div class="container-fluid" style="background-color: #f4f4f4;">
      <div class="container">
        <div class="row ">
          <!--Event rules and details -->
          <div class="col-md-6 card-3 text-left text-dark p-5 border-r-sm"  style="margin-top:120px; margin-bottom: 50px; background: linear-gradient(to bottom, #D5DEE7 0%, #E8EBF2 50%, #E2E7ED 100%), linear-gradient(to bottom, rgba(0,0,0,0.02) 50%, rgba(255,255,255,0.02) 61%, rgba(0,0,0,0.02) 73%), linear-gradient(33deg, rgba(255,255,255,0.20) 0%, rgba(0,0,0,0.20) 100%);
            background-blend-mode: normal,color-burn; ">
  
          <div class="row">
          <h4>Rules:</h4><br>
            >2 participants in a team.<br>
            >Maximum one team per college. <br>
            >Team will compete to find the best web designer. <br>
            >The rounds will be disclosed in the venue. <br>
            >Participants should have a basic knowledge about Html, 
              CSS,JS,Bootstrap and Jquery.
          </div>
          </div>
        <!-- event head name pic and number -->
          <div class="col-md-6 card-3 text-light text-center p-5" style="margin-top:120px; margin-bottom: 50px;background-image: linear-gradient(to right, #243949 0%, #517fa4 100%);border-radius: 5px;">
  
            <div class="" style="margin: auto; ">
              <img src="static/img/hom/sam.png" style="border-radius: 150px; object-fit: cover;object-position: left;"  width="250px" height="250px">
              <h4>Sam Thomas</h4>
              <h6> 91 74031 06497</h6>  
            </div>
          </div>
      </div>
      </div>
    </div>

@endsection