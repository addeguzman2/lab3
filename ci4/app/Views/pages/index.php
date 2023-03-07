<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif;}
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="music interface" class="w3-bar-item w3-button w3-padding-large">MUSIC INTERFACE</a>
    <a href="upcoming" class="w3-bar-item w3-button w3-padding-large w3-hide-small">UPCOMING GIGS</a>
    <a href="booking" class="w3-bar-item w3-button w3-padding-large w3-hide-small">BOOK US!</a>
    <a href="resource" class="w3-bar-item w3-button w3-padding-large w3-hide-small">RESOURCES</a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="resource" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">RESOURCES</a>
</div>

<!-- Page content -->

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="imgs/mono.jpg" style="width:100%; height: 800px; object-fit:cover; object-position: 50% 50%;">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>APC Band</h3>
      <p><b>Monochrome: The Revival - First Live Performance after 3 Years!</b></p>   
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="imgs/mola.jpg" style="width:100%; height: 800px; object-fit:cover; object-position: 50% 50%;" >
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Once in a Mola Blue Moon</h3>
      <p><b>Birthday gig of Sir Lukas Samuel of Mola Blue</b></p>   
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="imgs/skinny.jpg" style="width:100%; height: 800px; object-fit:cover; object-position: 50% 50%;">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Tugstugan sa Taguig</h3>
      <p><b>Dream Walk Gig at Skinny Mike's BGC</b></p>    
    </div>
  </div>

 <!-- myself-->
</div>
<div style="background-image: linear-gradient(rgb(0, 0, 0), rgb(103, 103, 101));">
<div class="w3-row w3-padding-64" id="about">
<div class="w3-col m6 w3-padding-large w3-hide-small">
 <img src="imgs/me.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
</div>
<div class="text" style="padding-top: 100px; color:rgb(241, 235, 227)" >
<div class="w3-col m6 w3-padding-large">
  <h1 class="w3-center"><b>About Myself</b></h1><br>
  <h5 class="w3-center">"How Did I End Up Here?"</h5>
  <p class="w3-large">I'm currently a 2nd Year Student studying BSIT in Asia Pacific College. I was a kid who enjoyed playing video games, and growing up I always wanted to develop my own game. Here I am now chasing that dream. Although I'm a bit slow, I have no doubts that I will be succesful in chasing that ambition.</p>
  <p class="w3-large w3-hide-medium">I wasn't always confident in myself. During my high school days, I always had trouble finding something I'm good at. But then, I picked up an acoustic guitar, and it went different from there. I was able to perform, play in different bands and even write songs.</p>
</div>
</div>
</div>
</div>
 
  <!-- The Band Section -->
  <div class=" section1" style="background: linear-gradient(to bottom, rgba(255,255,255,0.15) 0%, rgba(0,0,0,0.15) 100%), radial-gradient(at top center, rgba(255,255,255,0.40) 0%, rgba(0,0,0,0.40) 120%) #989898;">
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px;" id="band">
    <h2 class="w3-wide">My Musical Journey</h2>
    <p class="w3-opacity"><i>Angelo de Guzman</i></p>
    <p class="w3-justify">After learning how to play the guitar, I had the chance to perform in a "Battle of the Bands Event" in school. I was really nervous heading in to that event but luckily, I
      was able to perform decently. I kept on practicing, and eventually I improved. I joined an organization in my school "APC Band" which helped me grow even more as a musician. I was able to expand my knowledge in music,
      met a lot of gifted musicians, and even started my own band "Dream Walk!"
    </p>
  
  
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="imgs/ski.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><b>Skinny Mike's Bar</b></h5>
            <p class="card-text">This is a photo from our second gig. Although we had technical issues, we were still able to put up a great show!</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">September 18, 2022</small>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="imgs/guijo.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><b>Saguijo</b></h5>
            <p class="card-text">This one was in Saguijo, Makati where we got invited to a private gig.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">December 26, 2022</small>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="imgs/enzo.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><b>Enzo's View Bar</b></h5>
            <p class="card-text">This gig was the most nerve racking as our lead vocalist was absent and I had to take over as the main vocals.</p>
          </div>
          <div class="card-footer">
            <small class="text-muted">December 3, 2022</small>
          </div>
        </div>
      </div>

  
      <!--
      <h6 style="padding-top: 30px;"><b> Band: Dream Walk</h6></b>
      <div class="w3-row">
      <div class="w3-third">
        <p>Skinny Mike's</p>
        <img src="imgs/ski.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Saguijo</p>
        <img src="imgs/guijo.jpg" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Enzo's View Bar</p>
        <img src="imgs/enzo.jpg" class="w3-round" alt="Random Name" style="width:60%">
      </div> -->
    </div>
  </div>
  
<!-- End Page Content -->
</div>


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center  w3-xlarge" style="background-color:rgb(0, 0, 0);">
  <i class="fa fa-facebook-official w3-hover-opacity" style="color: white;"></i>
  <i class="fa fa-instagram w3-hover-opacity" style="color: white;"></i>
  <i class="fa fa-twitter w3-hover-opacity" style="color: white;"></i>
  <i class="fa fa-linkedin w3-hover-opacity" style="color: white;"></i>
  <p class="w3-medium" style="color: white;">Powered by <a href="https://www.w3schools.com/w3css/default.asp" style="color: white;" target="_blank">w3.css</a></p>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
