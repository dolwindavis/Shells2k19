@extends('layouts.main')
@section('title','SHELLS2k19 | REGISTRATION')

@section('content')
<div class="container-fluid" style="padding: 0px;">
    <div style=" height:400px; width: 100%; " >
    <img src="https://s3.ap-south-1.amazonaws.com/shells2k19/website/images/home/bg1.jpg" style="object-fit: cover; object-position: bottom;" height="100%" width="100%">
    </div>
  </div>
  <div class="container text-center p-2 card-3 border-r-sm drop-shadow" id="card-register-in">
    <div class="row text-center p-2" >
        <div class="col-md-12">
      <h3 style="letter-spacing: 1px;" ><strong>REGISTER</strong></h3>
    </div>
    </div>
  <div class="row p-4">
    <div class="col-md-12 col-xs-12">
    <input type="text" class="form-control wt-h ht-f" placeholder="College Name" name="">
    </div>
  </div>
  <div class="row p-4">
    <div class="col-md-12 col-xs-12"> 
    <input type="Email" class="form-control wt-h ht-f" placeholder="Email" name="">
    </div>
  </div>
  <div class="row p-4">
    <div class="col-md-12 col-xs-12"> 
    <input type="Email" class="form-control wt-h ht-f" placeholder="Phone Number" name="">
    </div>
  </div>
  <div class="row p-4">
    <div class="col-md-12 col-xs-12"> 
    <input type="Password" class="form-control wt-h ht-f" placeholder="Password" name="">
    </div>
  </div>
    <div class="form-check">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="">
            stay?
            <span class="form-check-sign">
                <span class="check"></span>
            </span>
        </label>
    </div>
  
  
  <div class="row p-4">
    <div class="col-md-12 col-xs-12"> 
    <button type="button" class="btn gra-blue wt-h" style="letter-spacing: 2px;">Register</button>
    <br>
   
  </div>
  </div>
  </div>
@endsection

