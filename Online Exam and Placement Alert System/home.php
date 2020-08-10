
<?php

session_start();
?>
<html>
<head>

<link rel="stylesheet" href="style/style.css">
<style type="text/css">
  .modal {
  display: none; 
  position: fixed;
  z-index: 1; 
  padding-top: 100px; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto;  
  background-color: rgba(0,0,0,0.4); 
}

.spn:hover{
  color: blue;
  text-decoration: none;
  font-size: 30px;
}

</style>
</head>
<body style="margin:0px; background: url('http://localhost/examnew/images/bg.jpg'); background-size: cover;">

<header>
  <h1 style="color:#d22c2c">
                   Online Exam & Placement Alert System
            </h1>
  
</header>


<div class="container">

  <div id="rr">
  <a href="index.php" >HOME</a>
  <a href="pages/admin/index.php" >ADMIN</a>
  <a href="pages/about.php" >ABOUT US</a>
  <a href="home.php" class="active_btn">USER</a>
  <a href="pages/contact.php">CONTACT US</a>
  </div>

</div>
<div id="s">

<div id="login">
  <div id="triangle"></div>
  <h1>User Registration</h1>
  <form method="post" action="pages/login.php" style="text-align: center;" class="form">

	<p class="spn" onclick="document.getElementById('id01').style.display='block'" style="width:auto; font-size: 17px; color: #fff; cursor: pointer;">Registration</p>
  </form>
</div>
</br></br></br></br>



<div id="id01" class="modal">
 
  <form class="modal-content" method="post" action="pages/signup.php">
    <div class="container1">
      <h1 style="margin-left: 200; color: #616161;">New User Registration</h1>
      
      <hr>
      <div>
	 
      <input type="text" class="inpa" placeholder="Enter Name" name="name" required>
     <input type="text" class="inpa" placeholder="Enter DOB" name="dob" required>
       <input type="text" class="inpa" placeholder="Enter Age" name="age" required>
	  
       <input type="text" class="inpa" placeholder="Enter Address" name="address" required>
	   <input type="text" class="inpa" placeholder="Post" name="post" required>
	   <input type="text" class="inpa" placeholder="Enter Email" name="email" required>
	   <input type="number" class="inpa" required placeholder="Enter Phone No" name="phone" required>
	   
	   <input type="radio" name="exp" value="Fresher" style="color: #eceff1;" onchange='checkvalue(this.value)'>Fresher</input>
	   <input type="radio" name="exp" value="Experienced" style="color: #eceff1;" onchange='checkvalue(this.value)'>Experienced</input>
	
<input type="text" class="inp" name="expyr" placeholder="Enter No of Experience in years" id="expyr" style='display:none'/>

 <script>
 function checkvalue(val)
{
    if(val==="Experienced")
       document.getElementById('expyr').style.display='block';
    else
       document.getElementById('expyr').style.display='none'; 
}
 </script>

       
	
	<input type="text" class="inpa" placeholder="Enter Qualification" name="qual" required>
	<input type="text" class="inpa" placeholder="Branch" name="branch" required>
	<input type="text" class="inpa" required placeholder="Date" name="date" required>

	
      </br>
     </div>
     
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" style="margin-left: 5;" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>

var modal = document.getElementById('id01');

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</div>

<footer style="background-color: black; height: 90px;">
  <p style="color: blue; text-align:center; padding: 30px;">@copyright Exam Placement Cell</p>
</footer>

<script>

var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>