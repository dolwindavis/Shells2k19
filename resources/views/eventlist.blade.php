@extends('layouts.main')
@section('title','SHELLS2k19 | Event Details')

@section('content')

<div class="container-fluid mb-5 " style="margin-top: 100px; ">
    <h3 class="p-5">Event Registration</h3>
    <div class="container " style="box-sizing: border-box; ">
      <div class="row text-center text-light" style="box-sizing: border-box;">
        <div class="col-md m-2 card-1 border-r-sm" >
           <!--event icon and name details-->
           <div class="row" style="background-image: linear-gradient(to top, #4481eb 0%, #04befe 100%);">
             <div class="bg-dark text-light pt-5" style="position: relative;top: 40px;width: 40%;margin: 10px auto;border-radius: 5px;">
                <img src="static/img/hom/person.png" height="100px" width="100px">
               <h5 class="pt-2" ><strong >Deep Web</strong></h5>
               <p>Web Designing</p>
             </div>
           </div>
           <!--event participant's details -->
  
           <div class="row" style="margin-top: 50px;">            
                <div class="selectdiv">
                <label>
                    <select>
                        <option selected> Select Box </option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Last long option</option>
                    </select>
                </label>
              </div>
             </div>
             <div class="row ">
               <div class="selectdiv">
                <label>
                    <select>
                        <option selected> Select Box </option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Last long option</option>
                    </select>
                </label>
              </div>
              
             </div>
             <!--Add or Edit Button -->
              <div class="row">
               <div class="col" style="padding-left: 0;padding-right: 0;">
                  <button type="button" class="btn btn-success" style="width: 100%;margin: 0px;border-radius: 0;background-image: linear-gradient(to top, #4481eb 0%, #04befe 100%);"><i class="fa fa-pencil-square-o" aria-hidden="true" style="
                 font-size: 12px"></i> Edit</button>
               </div>
               <div class="col" style="padding-right:  0;padding-left: 0;">
                 <button type="button" class="btn btn-danger" style="width: 100%;margin: 0px;border-radius: 0;background-image: linear-gradient(-20deg, #fc6076 0%, #ff9a44 100%);"><i class="fa fa-trash" aria-hidden="true" style="
                 font-size: 12px" style=""></i> Delete</button>
               </div>
             </div>
        </div>
        <div class="col-md m-2 card-1 border-r-sm" >
           <!--event icon and name details-->
           <div class="row" style="background-image: linear-gradient(to top, #4481eb 0%, #04befe 100%);">
             <div class="bg-dark text-light pt-5" style="position: relative;top: 40px;width: 40%;margin: 10px auto;border-radius: 5px;">
                <img src="static/img/hom/person.png" height="100px" width="100px">
               <h5 class="pt-2" ><strong >Deep Web</strong></h5>
               <p>Web Designing</p>
             </div>
           </div>
           <!--event participant's details -->
  
           <div class="row" style="margin-top: 50px;">            
                <div class="selectdiv">
                <label>
                    <select>
                        <option selected> Select Box </option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Last long option</option>
                    </select>
                </label>
              </div>
             </div>
             <div class="row ">
               <div class="selectdiv">
                <label>
                    <select>
                        <option selected> Select Box </option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Last long option</option>
                    </select>
                </label>
              </div>
              
             </div>
             <!--Add or Edit Button -->
              <div class="row">
               <div class="col" style="padding-left: 0;padding-right: 0;">
                  <button type="button" class="btn btn-success" style="width: 100%;margin: 0px;border-radius: 0;background-image: linear-gradient(to top, #4481eb 0%, #04befe 100%);"><i class="fa fa-pencil-square-o" aria-hidden="true" style="
                 font-size: 12px"></i> Edit</button>
               </div>
               <div class="col" style="padding-right:  0;padding-left: 0;">
                 <button type="button" class="btn btn-danger" style="width: 100%;margin: 0px;border-radius: 0;background-image: linear-gradient(-20deg, #fc6076 0%, #ff9a44 100%);"><i class="fa fa-trash" aria-hidden="true" style="
                 font-size: 12px" style=""></i> Delete</button>
               </div>
             </div>
        </div>
    
      
    </div>
    </div>
  </div>
  
  <script type="text/javascript">
    
  var x, i, j, selElmnt, a, b, c;
  /* Look for any elements with the class "custom-select": */
  x = document.getElementsByClassName("custom-select");
  for (i = 0; i < x.length; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    /* For each element, create a new DIV that will act as the selected item: */
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /* For each element, create a new DIV that will contain the option list: */
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < selElmnt.length; j++) {
      /* For each option in the original select element,
      create a new DIV that will act as an option item: */
      c = document.createElement("DIV");
      c.innerHTML = selElmnt.options[j].innerHTML;
      c.addEventListener("click", function(e) {
          /* When an item is clicked, update the original select box,
          and the selected item: */
          var y, i, k, s, h;
          s = this.parentNode.parentNode.getElementsByTagName("select")[0];
          h = this.parentNode.previousSibling;
          for (i = 0; i < s.length; i++) {
            if (s.options[i].innerHTML == this.innerHTML) {
              s.selectedIndex = i;
              h.innerHTML = this.innerHTML;
              y = this.parentNode.getElementsByClassName("same-as-selected");
              for (k = 0; k < y.length; k++) {
                y[k].removeAttribute("class");
              }
              this.setAttribute("class", "same-as-selected");
              break;
            }
          }
          h.click();
      });
      b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function(e) {
      /* When the select box is clicked, close any other select boxes,
      and open/close the current select box: */
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
  }
  
  function closeAllSelect(elmnt) {
    /* A function that will close all select boxes in the document,
    except the current select box: */
    var x, y, i, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    for (i = 0; i < y.length; i++) {
      if (elmnt == y[i]) {
        arrNo.push(i)
      } else {
        y[i].classList.remove("select-arrow-active");
      }
    }
    for (i = 0; i < x.length; i++) {
      if (arrNo.indexOf(i)) {
        x[i].classList.add("select-hide");
      }
    }
  }
  
  /* If the user clicks anywhere outside the select box,
  then close all select boxes: */
  document.addEventListener("click", closeAllSelect);
  </script>

@endsection