@extends('layouts.app')

@section('content')



<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">RentAPad</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">About RentApad</h3>
  <p class="w3-center">Looking for a place to rent or to buy? or perhaps to sell or have your property rented out? If your anser is "YES", then you've come to the right place.</p>
  <p>RentApad lets you choose a wide array of properties that you can call home: condominiums, apartments, houses, etc. Name it and we have it. Plus you can also post your property here.</p>
  
  <p class="w3-large w3-center w3-padding-16">Our promises to each and every customer:</p>
  <p class="w3-wide"></i>Modern properties</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:100%">100%</div>
  </div><br>
  <p class="w3-wide"></i>Topnotch Builders and Developers</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:100%">100%</div>
  </div><br>
  <p class="w3-wide"></i>Legit Brokers and Property Seekers</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:100%">100%</div>
  </div><br>
  <p class="w3-wide"></i>Free</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:100%">100%</div>
  </div><br>
</div>

<div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">75+</span><br>
    Builders and developers
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">200+</span><br>
    Brokers
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">1M+</span><br>
    Registered Users
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">1</span><br>
    Website
  </div>
  
</div>



<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center">This Just In</h3>
  <p class="w3-center"><em>Here are some of our latest property addition.<br> Click on the images to make them bigger</em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
      <img src="/storage/cover_images/bg4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic1">
    </div>

    <div class="w3-col m3">
      <img src="/storage/cover_images/bg5.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic2">
    </div>

    <div class="w3-col m3">
      <img src="/storage/cover_images/bg6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic3">
    </div>

    <div class="w3-col m3">
      <img src="/storage/cover_images/bg7.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic4">
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
      <img src="/storage/cover_images/bg8.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic5">
    </div>

    <div class="w3-col m3">
      <img src="/storage/cover_images/bg9.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic6">
    </div>

    <div class="w3-col m3">
      <img src="/storage/cover_images/bg10.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="pic7">
    </div>

    
    <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">LOAD MORE</button>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"><a href="/rent" id="rent">Rent A Property</a></span>
  </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"><a href="/buy" id="buy">Buy A Property</a></span>
  </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-4 w3-display-container w3-opacity-min">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"><a href="/rent" id="rent">Post A Property</a></span>
  </div>
</div>




<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">Contact</h3>
  

  <div class="w3-row w3-padding-32 w3-section">

    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Address: Tuitt, Gempc Building, Timog, QC<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +0639171234567<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: mail@mail.com<br>
      </div>
      <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave us a note:</p>
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
        <button class="w3-button w3-black w3-right w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  
</footer>
 
<!-- Add Google Maps -->
<script>


// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


</script>


@endsection
