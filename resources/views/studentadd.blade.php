@extends('layouts.main')
@section('title','SHELLS2k19 | LOGIN')

@section('content')

<!-- Sign in page -->
<div class="container-fluid" style="padding: 0px;">
        <div style=" height:400px; width: 100%; background-color: #03a9f4; object-fit: cover; object-position: center;" >
        </div>
      </div>
      <div class="container text-center drop-shadow" id="card-register-in">
        <div class="row text-center p-2" >
            <div class="col-md-12">
          <h3><strong>Add Participant's</strong></h3>
        </div>
        </div>
        <!--Name details -->
      <div class="row p-4">
        <div class="col-md-12 col-xs-12">
        <input type="text" class="form-control wt-h ht-f" placeholder="Participant Name" name="">
        </div>
      </div>
      <!-- Gender details-->
      <div class="row p-4">
        <div class="col-md-12 col-xs-12">
        <label class="text-left" style="">Gender</label>
        <div class="form-check form-check-radio form-check-inline">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Male
          <span class="circle">
              <span class="check"></span>
          </span>
        </label>
      </div>
      <div class="form-check form-check-radio form-check-inline">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Female
          <span class="circle">
              <span class="check"></span>
          </span>
        </label>
      </div>
      
        </div>
      </div>
      <!--Phone Number Details-->
      <div class="row p-4">
        <div class="col-md-12 col-xs-12"> 
        <input type="Email" class="form-control wt-h ht-f" placeholder="Phone Number" name="">
        </div>
      </div>
      <!-- course details -->
      <div class="row p-4">
        <div class="col-md-12 col-xs-12"> 
        <input type="Password" class="form-control wt-h ht-f" placeholder="course" name="">
        </div>
      </div>
      <!-- Email id-->
      <div class="row p-4">
        <div class="col-md-12 col-xs-12"> 
        <input type="Password" class="form-control wt-h ht-f" placeholder="Email" name="">
        </div>
      </div>
      
      
      <div class="row p-4">
        <div class="col-md-12 col-xs-12"> 
        <button type="button" class="btn btn-success wt-h">Add</button>
        <br>
       
      </div>
      </div>
      
      
      </div>

@endsection