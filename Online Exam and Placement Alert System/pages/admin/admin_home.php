
<?php
session_start();
$rr=$_SESSION["usname"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam";
$conn = new mysqli($servername, $username, $password, $dbname);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Page</title>
  <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
  <style>
body {
  font-family: "Lato", sans-serif;
  margin-top: 0px;
  margin-right: 0px;
}

.sidenav {
  height: 100%;
  width: 340px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 120px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: black;
  display: block;
  background-image: linear-gradient(90deg, #00ABB2, #96f5f3);
  width: 300px;
  border-radius: 10px;
}

.sidenav a:hover {
  color: black;
  background-image: linear-gradient(90deg, #96f5f3, #00ABB2);
}

.main {
  margin-left: 160px; 
  font-size: 28px; 
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.slideimg{
  width: 95%;
  height: 350px;
  padding: 10px;
}

.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

</style>
</head>
<body>

<div class="sidenav">
  <a  href="sendexam.php">Send Exams Details</a><br><br>
  <a  href="registerUser.php">Registered Users Details</a>
</div>

<div style="background: #111; width: 100%; height: 100px;">
  <h1 style="float: right; color: #fff; padding-right: 40px;" >Logout</h1>
</div>

<div style="padding-left: 340px;">
  <h1>   <a href="#" style="color: hollowblue; text-decoration: none;" class="menu-toggler material-icons mdc-toolbar__menu-icon">Welcome to Admin Page <?php echo $rr;?></a></h1>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img class="slideimg" src="../../images/pic4.jpg" style="width:100%">
  <div class="text">Exam alert</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img class="slideimg" src="../../images/pic.jpg" style="width:100%">
  <div class="text">Online examinations</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img class="slideimg" src="../../images/pic3.jpg" style="width:100%">
  <div class="text">Conduct some exams on online</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img class="slideimg" src="../../images/pic2.jpg" style="width:100%">
  <div class="text">All The Best</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
     
</div>


</body>
</html>