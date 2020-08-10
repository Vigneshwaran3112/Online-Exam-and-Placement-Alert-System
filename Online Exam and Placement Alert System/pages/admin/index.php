
<?php

session_start();
?>
<html>
<head>

<link rel="stylesheet" href="../../style/style.css">
<style type="text/css">
  .sub1{
  width:92%;
  background:#3399cc;
  border:0;
  padding:4%;
  font-family:'Open Sans',sans-serif;
  font-size:100%;
  color:#fff;
  border-radius: 10px;
  cursor:pointer;
  transition:background .3s;
  -webkit-transition:background .3s;
}

input[type="submit"]:hover{
  background:#4caf50;

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
  <a href="../../index.php" >HOME</a>
  <a href="#" class="active_btn">ADMIN</a>
  <a href="../about.php" >ABOUT US</a>
  <a href="../../home.php" >USER</a>
  <a href="../contact.php">CONTACT US</a>
  </div>

</div>
<div id="s">

<div id="login">
  <div id="triangle"></div>
  <h1>Admin Log in</h1>
  <form method="post" action="../loginadmin.php" style="text-align: center;" class="form">
    <input class="inp1" type="text" name="uname" placeholder="Username" required />
    <input class="inp1" type="password" name="pass" placeholder="Password" required />
    <input type="submit" class="sub1" value="Submit" />
  </form>
</div>

     </div>
     
<footer style="background-color: black; height: 90px;"><br>
  <p style="margin-left: 550px;color: blue;">@copyright Exam Placement Cell</p>
</footer>

</body>
</html>