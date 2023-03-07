<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head>
<title>Booking</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif
}
.mySlides {display: none}

#tour {
  padding: 100px 100px 160px 100px;
  
}

#formi{
  padding-top: 60px;
}

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
<a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Resource</a>
</div>

  <!-- Form Section -->
  <div class="w3-black" id="tour" style="background: linear-gradient(to right, #434343 0%, black 100%);">
  <div class="w3-content" id="formi" >
      

<?php
// define variables and set to empty values
$fname = $email = $edate = $venue = $details = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $venue = test_input($_POST["venue"]);
  $edate = test_input($_POST["edate"]);
  $details = test_input($_POST["details"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Gig Details:</h2>
<form method="post" action="<?=base_url('/book/add') ?>"> 
<?= csrf_field() ?> 
<div class="form-row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Enter Your Name" name="name">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Email" name="email">
    </div>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2"></label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Venue" name="venue">
    <label for="formGroupExampleInput2"></label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Date" name="edate">
    <label for="formGroupExampleInput2"></label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Event Title" name="details">
  </div>
  <button type="submit" class="btn btn-light" value="book a gig">Submit</button>
</form>


    </div>
  </div>
  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

  $servername = "192.168.150.213";
  $username = "webprogmi212";
  $password = "b3ntRhino98";
  $dbname = "webprogmi212";


    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO addeguzman2_gigs (fname, email, venue, edate, details)
    VALUES ('$fname', '$email', '$venue', '$edate', '$details')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>
  

  
<!-- End Page Content -->
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge footer">
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
