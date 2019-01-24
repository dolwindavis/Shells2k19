@extends('layouts.main')
@section('title','SHELLS2k19 | LOGIN')

@section('content')


<!-- Sign in page -->
<div class="container-fluid" style="padding: 0px;">
        <div style=" height:400px; width: 100%; background-color: #03a9f4; object-fit: cover; object-position: center;" >
        </div>
      </div>
      <div class="container text-center drop-shadow" id="card-sign-in">
        <div class="row text-center p-2" >
            <div class="col-md-12">
          <h3><strong>Sign In</strong></h3>
        </div>
        </div>
      <div class="row p-4">
        <div class="col-md-12 col-xs-12">
        <input type="text" class="form-control wt-h ht-f" placeholder="Username" name="">
        </div>
      </div>
      <div class="row p-4">
        <div class="col-md-12 col-xs-12"> 
        <input type="password" class="form-control wt-h ht-f" placeholder="password" name="">
        </div>
      </div>
      <div class="row p-4">
        <div class="col-md-12 col-xs-12"> 
        <button type="button" class="btn btn-info wt-h"><i class="fas fa-sign-in-alt" style="font-size: 10px;"></i>Login</button>
        <br>
        <a href="#" class="d-block p-2" style="font-size: 15px;">Register here....</a>
        </div>
      </div>
      </div>

@endsection