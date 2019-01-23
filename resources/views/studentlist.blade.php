@extends('layouts.main')
@section('title','SHELLS2k19 | STUDENTLIST')

@section('content')

<div class="container-fluid mb-5 " style="margin-top: 100px; ">
        <h3 class="p-5">Student's Registered</h3>
        <div class="container " style="box-sizing: border-box; ">
        <div class="row text-center" style="box-sizing: border-box;">
          <div class="col-md m-2 p-2 card-1 border-r-sm" >
             <!--name details-->
             <div class="row mt-2">
               <div class="col">
                 <h6>Name</h6>
               </div>
               <div class="col">
                 <p>Mohamed Imran Khan</p>
               </div>
             </div>
             <!--gender-->
             <div class="row mt-2">
               <div class="col">
                 <h6>Gender</h6>
               </div>
               <div class="col">
                 <p>Male</p>
               </div>
             </div>
             <!--Mail details -->
              <div class="row">
               <div class="col">
                 <h6>Mail</h6>
               </div>
               <div class="col">
                 <p>ikhan0877@gmail.com</p>
               </div>
             </div>
             <!-- phone no -->
             <div class="row">
               <div class="col">
                 <h6>Phone no.</h6>
               </div>
               <div class="col">
                 <p>1234567890</p>
               </div>
             </div>
             <!-- Gender-->
      
             <div class="row ">
               <div class="col">
                 <h6>Course</h6>
               </div>
               <div class="col">
                 <p>MCA</p>
               </div>
             </div>
             <!--Add or Edit Button -->
              <div class="row">
               <div class="col">
                  <button type="button" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true" style="
                 font-size: 12px"></i> Edit</button>
               </div>
               <div class="col">
                 <button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true" style="
                 font-size: 12px"></i> Delete</button>
               </div>
             </div>
          </div>
          
          
          <div class="col-md m-2 p-2 card-1 border-r-sm">
            <div class="text-center p-5">
              <i class="fas fa-plus-circle" style="font-size: 50px;"></i><br>
              <h2>Add</h2>
            </div>
          </div>
          
        </div>
        </div>
      </div>

@endsection