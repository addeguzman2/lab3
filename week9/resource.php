<!DOCTYPE html>
<html lang="en">
<head>
<title>Resources</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="music interface.php" class="w3-bar-item w3-button w3-padding-large">MUSIC INTERFACE</a>
    <a href="upcoming.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">UPCOMING GIGS</a>
    <a href="booking.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">BOOK US!</a>
    <a href="resource.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">RESOURCES</a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
<a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Resource</a>
</div>

  <!-- The Tour Section -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">RESOURCES</h2>
      <p class="w3-opacity w3-center"><i>Elements I Used</i></p><br>

      <ul class="w3-ul w3-border w3-white w3-text-grey">
        <li class="w3-padding">W3Schools <span class="w3-tag w3-red w3-margin-left">HTML & CSS</span></li>
        <li class="w3-padding">FontAwesome <span class="w3-tag w3-red w3-margin-left">Stylesheet</span></li>
        <li class="w3-padding">Github Repository<span class="w3-badge w3-right w3-margin-right">3</span></li>
      </ul>

      <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
        <div class="w3-third w3-margin-bottom">
          <img src="imgs/W3L.jpg" alt="New York" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>W3Schools</b></p>
            <p>This website is where I learned the fundamentals of web development </p>
            <button class="w3-button w3-black w3-margin-bottom"><a href="https://www.w3schools.com/w3css/defaulT.asp">Go to site</a></button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="imgs/FAW.png" alt="Paris" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Fontawesome</b></p>
            <p>This website helped in making css more attractive to look at. It is where I get my logos</p>
            <button class="w3-button w3-black w3-margin-bottom"><a href="https://fontawesome.com/">Go to site</a></button>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom">
          <img src="imgs/GIT.png" alt="San Francisco" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Github</b></p>
            <p>This repository helps me keep track of the changes that I have made.</p>
            <button class="w3-button w3-black w3-margin-bottom"><a href="https://github.com/addeguzman2/lab2">Go to site</a></button>
          </div>
        </div>
      </div>
    </div>
  </div>

  

  
<!-- End Page Content -->
</div>
<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"><a href="https://www.facebook.com/angelo.deguzman2103/"></a></i>
  <i class="fa fa-instagram w3-hover-opacity"><a href="https://www.instagram.com/angelo.rog3r/"></a></i>
  <i class="fa fa-twitter w3-hover-opacity"><a href="https://twitter.com/home"></a></i>
  <i class="fa fa-linkedin w3-hover-opacity"><a href="https://www.linkedin.com/in/angelo-de-guzman-68b8b918b/"></a></i>
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

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

</body>
</html>
