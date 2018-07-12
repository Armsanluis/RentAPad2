@extends('layouts.app')

@section('content')
@guest
        
        @else
          @if(Auth::user()->role == 'admin')
          
          
          

  <div class="container-fluid">
    <div class="row">

      <div class="col-1">
            <div class="sidebar sticky">
                <div class="fa-icon-wrap fa-icon-effect-8">
                 <a class="fa-icon fa fa-plus" href="addnewuser" id="jm"></a>    
                 </div>
                 <div class="fa-icon-wrap fa-icon-effect-8">
                 <a class="fa-icon fa fa-arrow-up" href="#backtotop" id="jm"></a>    
                 </div> 
                 <div class="fa-icon-wrap fa-icon-effect-8">
                 <a class="fa-icon fa fa-arrow-left" href="{{ url()->previous() }}" id="jm"></a>    
                 </div>
                 <div class="fa-icon-wrap fa-icon-effect-8">
                 <a class="fa-icon fa fa-home" href="home" id="jm"></a>    
                 </div>
            </div>      
        </div>
        <div class="col-1" id="buttonform"></div>
        
      <div class="col-8">
        <form id="regForm" action="/store" enctype="multipart/form-data" method="POST">
        {{csrf_field()}}
          <div class="head1"> 
            <h1>Title and Description</h1>
            <hr> 
          </div>



        <!-- One "tab" for each step in the form: -->
          <div class="tab" id="head2">
            <div id="head3">
              <br><p>Type of Post:</p>
                <select name="type">
                  <option value="rent">Rent</option>
                  <option value="sell">Sell</option><br>  
                </select>

              <div class="form-group">
                <br>  
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'] )}}
              </div>
              
              <div class="form-group">
                {{Form::label('body', 'Brief Description')}}
                {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Make your pitch here'] )}}
              </div>
            </div>

            <div class="tab"><h3>Property Details</h3>:
              <div class="form-group">
                {{Form::label('price', 'Price')}}
                {{Form::text('price', '', ['class' => 'form-control', 'placeholder' => 'Price'] )}}
              </div>

              <div class="form-group">
                {{Form::label('payment', 'Payment Method')}}
                {{Form::text('payment', '', ['class' => 'form-control', 'placeholder' => 'Payment Method'] )}}
              </div>

              <div class="form-group">
                {{Form::label('location', 'Location')}}
                {{Form::text('location', '', ['class' => 'form-control', 'placeholder' => 'Location'] )}}
              </div>
            </div>

            <div class="tab"><h3>Additional Details</h3>
              <div class="form-group">
                {{Form::label('size', 'Size')}}
                {{Form::text('size', '', ['class' => 'form-control', 'placeholder' => 'Size'] )}}
              </div>

              <div class="form-group">
                {{Form::label('rooms', 'No. of Rooms')}}
                {{Form::text('rooms', '', ['class' => 'form-control', 'placeholder' => 'No. of Rooms'] )}}
              </div>

              <div class="form-group">
                {{Form::label('tnb', 'Toilets and Baths')}}
                {{Form::text('tnb', '', ['class' => 'form-control', 'placeholder' => 'Toilets and Baths'] )}}
              </div>

              <div class="form-group">
                {{Form::label('amenities', 'Amenities')}}
                {{Form::text('amenities', '', ['class' => 'form-control', 'placeholder' => 'Amenities'] )}}
              </div>

              <div class="form-group">
                <p>Upload Property Image</p>
                {{Form::file('image1')}}
              </div>
            </div>

          <div style="overflow:auto;">
            <div style="float:right;">
              <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
              <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
          </div>

          <!-- Circles which indicates the steps of the form: -->
          <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span> 
          </div>
          </div>
        </form>
      </div>
    </div>  
  </div>



  @else
@extends('inc.usersidenav')

  <!-- <button onclick="topFunction2()" id="myBtn2" title="Go back">Top</button> -->
  <br>
    <div class="container-fluid">
    <div class="row"> 
    <div class="col-2"></div>       
      <div class="col-8">
        <form id="regForm" action="/store" enctype="multipart/form-data" method="POST">
        {{csrf_field()}}
          <div class="head1"> 
            <h1>Title and Description</h1>
            <hr> 
          </div>



        <!-- One "tab" for each step in the form: -->
          <div class="tab" id="head2">
            <div id="head3">
              <br><p>Type of Post:</p>
                <select name="type">
                  <option value="rent">Rent</option>
                  <option value="sell">Sell</option><br>  
                </select>

              <div class="form-group">
                <br>  
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'] )}}
              </div>
              
              <div class="form-group">
                {{Form::label('body', 'Brief Description')}}
                {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Make your pitch here'] )}}
              </div>
            </div>

            <div class="tab"><h3>Property Details</h3>:
              <div class="form-group">
                {{Form::label('price', 'Price')}}
                {{Form::text('price', '', ['class' => 'form-control', 'placeholder' => 'Price'] )}}
              </div>

              <div class="form-group">
                {{Form::label('payment', 'Payment Method')}}
                {{Form::text('payment', '', ['class' => 'form-control', 'placeholder' => 'Payment Method'] )}}
              </div>

              <div class="form-group">
                {{Form::label('location', 'Location')}}
                {{Form::text('location', '', ['class' => 'form-control', 'placeholder' => 'Location'] )}}
              </div>
            </div>

            <div class="tab"><h3>Additional Details</h3>
              <div class="form-group">
                {{Form::label('size', 'Size')}}
                {{Form::text('size', '', ['class' => 'form-control', 'placeholder' => 'Size'] )}}
              </div>

              <div class="form-group">
                {{Form::label('rooms', 'No. of Rooms')}}
                {{Form::text('rooms', '', ['class' => 'form-control', 'placeholder' => 'No. of Rooms'] )}}
              </div>

              <div class="form-group">
                {{Form::label('tnb', 'Toilets and Baths')}}
                {{Form::text('tnb', '', ['class' => 'form-control', 'placeholder' => 'Toilets and Baths'] )}}
              </div>

              <div class="form-group">
                {{Form::label('amenities', 'Amenities')}}
                {{Form::text('amenities', '', ['class' => 'form-control', 'placeholder' => 'Amenities'] )}}
              </div>

              <div class="form-group">
                <p>Upload Property Image</p>
                {{Form::file('image1')}}
              </div>
            </div>

          <div style="overflow:auto;">
            <div style="float:right;">
              <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
              <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
          </div>

          <!-- Circles which indicates the steps of the form: -->
          <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span> 
          </div>
          </div>
        </form>
      </div>
    </div>  
  </div>
  @endif
        @endguest





    
    


<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}
</script>
@endsection