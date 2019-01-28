@extends('layouts.main')
@section('title','SHELLS2k19 | Event Details')

@section('content')

<div class="container-fluid mb-5 " style="margin-top: 100px; ">
    <h3 class="p-5">Event Registration</h3>



    <div class="container" style="box-sizing: border-box;">
      <div class="row text-center text-light" style="box-sizing: border-box;">
            {{-- card design start --}}
        <div class="col-md-4 m-2 card-1 border-r-sm" style="max-width:350px">
           <!--event icon and name details-->
           <div class="row" style="background-image: linear-gradient(to top, #4481eb 0%, #04befe 100%);">
             <div class="bg-dark text-light pt-5" style="position: relative;top: 40px;width: 50%;margin: 10px auto;border-radius: 5px;">
                <img src="static/img/hom/person.png" height="100px" width="100px">
               <h5 class="pt-2" ><strong >Deep Web</strong></h5>
               <p>Web Designing</p>
             </div>
           </div>
           <!--event participant's details -->
           <form id="form1">
              @csrf
           <div class="row" style="margin-top: 50px;">            
                <div class="selectdiv">
                
                <label>
                    <select id="select1">
                        <option selected value="">Select Box </option>
                        <option value="Option 1">Option 1</option>
                        <option value="Option 2">Option 2</option>
                        
                    </select>
                </label>
               
              </div>
             </div>
             <div class="row ">
               <div class="selectdiv">
                <label>
                    <select id="select2">
                        <option selected value=""> Select Box </option>
                        <option value="Option 1">Option 1</option>
                        <option value="Option 2">Option 2</option>
                    </select>
                </label>
              </div>
              
             </div>
            </form>
             <!--Add or Edit Button -->
              <div class="row">
               <div class="col" style="padding-left: 0;padding-right: 0;">
                  <button type="button" class="btn btn-success" style="width: 100%;margin: 0px;border-radius: 0;background-image: linear-gradient(to top, #4481eb 0%, #04befe 100%);"><i class="fa fa-pencil-square-o" aria-hidden="true" style="
                 font-size: 12px"></i> Edit</button>
               </div>
               <div class="col" style="padding-right:  0;padding-left: 0;">
                 <button type="button" class="btn btn-danger" id="savebtn" style="width: 100%;margin: 0px;border-radius: 0;background-image: linear-gradient(to top, #9be15d 0%, #00e3ae 100%);"><i class="fa fa-save" aria-hidden="true" style="
                 font-size: 12px"></i> Save</button>
               </div>
             </div>
        </div>
 {{-- card design end --}}

     {{-- card design start --}}

          <div class="col-md-4 m-2 card-1 border-r-sm" style="max-width:350px" >
             <!--event icon and name details-->
             <div class="row" style="background-image: linear-gradient(to top, #4481eb 0%, #04befe 100%);">
               <div class="bg-dark text-light pt-5" style="position: relative;top: 40px;width: 50%;margin: 10px auto;border-radius: 5px;">
                  <img src="static/img/hom/person.png" height="100px" width="100px">
                 <h5 class="pt-2" ><strong >Deep Web</strong></h5>
                 <p>Web Designing</p>
               </div>
             </div>
             <!--event participant's details -->
             <form id="student1">
                @csrf
             <div class="row" style="margin-top: 50px;">            
                  <div class="selectdiv">
                  
                  <label>
                      <select>
                          <option selected value="">Select Box </option>
                          <option value="Option 1">Option 1</option>
                          <option value="Option 2">Option 2</option>
                          
                      </select>
                  </label>
                 
                </div>
               </div>
               <div class="row ">
                 <div class="selectdiv">
                  <label>
                      <select id="student2>
                          <option selected value=""> Select Box </option>
                          <option value="Option 1">Option 1</option>
                          <option value="Option 2">Option 2</option>
                      </select>
                  </label>
                </div>
                
               </div>
              </form>
               <!--Add or Edit Button -->
                <div class="row">
                 <div class="col" style="padding-left: 0;padding-right: 0;">
                    <button type="button" class="btn btn-success" style="width: 100%;margin: 0px;border-radius: 0;background-image: linear-gradient(to top, #4481eb 0%, #04befe 100%);"><i class="fa fa-pencil-square-o" aria-hidden="true" style="
                   font-size: 12px"></i> Edit</button>
                 </div>
                 <div class="col" style="padding-right:  0;padding-left: 0;">
                   <button type="button" class="btn btn-danger" style="width: 100%;margin: 0px;border-radius: 0;background-image: linear-gradient(to top, #9be15d 0%, #00e3ae 100%);"><i class="fa fa-save" aria-hidden="true" style="
                   font-size: 12px" style=""></i> Save</button>
                 </div>
               </div>
          </div>
   {{-- card design end --}}

    {{-- card design start --}}

    <div class="col-md-4 m-2 card-1 border-r-sm" style="max-width:350px">
        <!--event icon and name details-->
        <div class="row" style="background-image: linear-gradient(to top, #4481eb 0%, #04befe 100%);">
          <div class="bg-dark text-light pt-5" style="position: relative;top: 40px;width: 50%;margin: 10px auto;border-radius: 5px;">
             <img src="static/img/hom/person.png" height="100px" width="100px">
            <h5 class="pt-2" ><strong >Deep Web</strong></h5>
            <p>Web Designing</p>
          </div>
        </div>
        <!--event participant's details -->
        <form id="student1">
           @csrf
        <div class="row" style="margin-top: 50px;">            
             <div class="selectdiv">
             
             <label>
                 <select>
                     <option selected value="">Select Box </option>
                     <option value="Option 1">Option 1</option>
                     <option value="Option 2">Option 2</option>
                     
                 </select>
             </label>
            
           </div>
          </div>
          <div class="row ">
            <div class="selectdiv">
             <label>
                 <select id="student2">
                     <option selected value=""> Select Box </option>
                     <option value="Option 1">Option 1</option>
                     <option value="Option 2">Option 2</option>
                 </select>
             </label>
           </div>
           
          </div>
         </form>
          <!--Add or Edit Button -->
           <div class="row">
            <div class="col" style="padding-left: 0;padding-right: 0;">
               <button type="button" class="btn btn-success" style="width: 100%;margin: 0px;border-radius: 0;background-image: linear-gradient(to top, #4481eb 0%, #04befe 100%);"><i class="fa fa-pencil-square-o" aria-hidden="true" style="
              font-size: 12px"></i> Edit</button>
            </div>
            <div class="col" style="padding-right:  0;padding-left: 0;">
              <button type="button" class="btn btn-danger" style="width: 100%;margin: 0px;border-radius: 0;background-image: linear-gradient(to top, #9be15d 0%, #00e3ae 100%);"><i class="fa fa-save" aria-hidden="true" style="
              font-size: 12px" style=""></i> Save</button>
            </div>
          </div>
     </div>
{{-- card design end --}}
   
       
      
    </div>
    </div>
   
  </div>
  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
  </script>
  <script src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

  <script>
     $(document).ready(function(){
         $('#savebtn').click(function(e){
            e.preventDefault();
            $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
               }
           });
            $.ajax({
               url: "{{ url('/events/list') }}",
               method: 'post',
               data: {
                student1:$('#student1').val(),
                student2: $('#student2').val(),
               },
               success: function(result){
                    alert(result.success);
                  }});
            });
         });
    </script>


@endsection