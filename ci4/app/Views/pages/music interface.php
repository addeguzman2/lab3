<!DOCTYPE html>
<html lang="en">
<head>
<title>Music Interface</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<style>

body {font-family: "Lato", sans-serif;}
</style>
</head>
<body style="background: linear-gradient(98.7deg, rgb(0, 0, 0) -10.7%, rgb(53, 92, 125) 97.8%);">

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
  <a href="resource.html" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">RESOURCES</a>
</div>

<!-- Page content -->



<div class="main" style="background: linear-gradient(to right, #242462, #2e5273);">
  <p id="logo"><i class="fa fa-music"></i>Music</p>
  <!--- left part --->
  <div class="left" style="padding-bottom: 75px;">
     <!--- song img --->
     <img id="track_image" style="width: 70%; height: 400px; border-radius: 25px;">
     <div class="volume">
        <p id="volume_show">75</p>
        <i class="fa fa-volume-up" aria-hidden="true" onclick="mute_sound()" id="volume_icon" style="background: #120289;"></i>
        <input type="range" min="0" max="100" value="90" onchange="volume_change()" id="volume" >  
     </div>
  </div>
  <!--- right part --->
  <div class="right">
     <div class="show_song_no">
        <p id="present">1</p>
        <p>/</p>
        <p id="total">5</p>
     </div>
     <!--- song title & artist name --->
     <p id="title">title.mp3</p>
     <p id="artist">Artist name</p>
     <!--- middle part --->
     <div class="middle">
        <button onclick="previous_song()" id="pre"><i class="fa fa-step-backward" aria-hidden="true"></i></button>
        <button onclick="justplay()" id="play"><i class="fa fa-play" aria-hidden="true"></i></button>
        <button onclick="next_song()" id="next"><i class="fa fa-step-forward" aria-hidden="true"></i></button>
     </div>
     <!--- song duration part --->
     <div class="duration">
        <input type="range" min="0" max="100" value="0" id="duration_slider" onchange="change_duration()">
     </div>
     <button id="auto" onclick="autoplay_switch()">Auto play <i class="fa fa-circle-o-notch" aria-hidden="true"></i></button>
  </div>
</div>




<script>

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
<script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
