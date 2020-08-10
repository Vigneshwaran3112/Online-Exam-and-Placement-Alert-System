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

.welcomename{
	margin-left:340px;
	color: #fff;
	text-decoration: none;
	font-weight: bold;
	font-size: 26px;
}

form{
	margin-left: 540px; 
	border: 4px solid #00ADFF; 
	border-radius: 20px;
	width: 550px; 
	background-color: transparent;
	padding: 20px;
}

.td{
	padding-left: 80px;
}

input[type="text"],input[type="file"]{
	width: 335px;
	border-bottom: 1px;
	outline: none;
	border: none;
	padding-left: 10px;
	border-radius: 20px;
}

input[type="submit"]
{
	width: 540px;
	border-radius: 20px;
	font-size: 25px;
    background-image: linear-gradient(90deg, #59f248, #00DBE3);
	border: none;
	outline: none;
	cursor: pointer;
}

input[type="submit"]:hover
{
	background-image: linear-gradient(90deg, #00DBE3, #59f248);
}
</style>
</head>
<body>

<div class="sidenav">
  <a  href="sendexam.php">Send Exams Details</a><br><br>
  <a  href="registerUser.php">Registered Users Details</a>
</div>

<div style="background: #111; width: 100%; height: 100px;">
  <table>
  	<tr>
       <td><a href="#" class="welcomename">Welcome to Admin Page <?php echo $rr;?></a></td>
       <td style="padding-left: 450px;"><h1 style="float: right; color: #fff;" >Logout</h1></td>
    </tr>
  </table>
</div>

<div style="">
<h2 style="color: #5D4037; margin-left: 340px;">Send Exam Details</h2>

<form method="post" action="sendDetails.php" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Organization</td>
			<td class="td"><input style="height: 35px;background: gainsboro; color: black; font-size: large;" type="text" name="org" id="org" placeholder="   Enter organization name" required></td>
		</tr>
		<tr>
			<td>Address</td>
			<td class="td"><input style="height: 35px;background: gainsboro; color: black; font-size: large;" type="text" name="address" id="address" placeholder="   Enter Address" required></td>
		</tr>
		<tr>
			<td>Subject</td>
			<td class="td"><input style="height: 35px;background: gainsboro; color: black; font-size: large;" type="text" name="subject" id="subject" placeholder="   Enter Subject" required></td>
		</tr>
		<tr>
			<td>Exam Date</td>
			<td class="td"><input style="height: 35px;background: gainsboro; color: black; font-size: large;" type="text" name="edate" id="edate" placeholder="   Enter Exam Date" required></td>
		</tr>
		<tr>
			<td>Exam Center</td>
			<td class="td"><input style="height: 35px;background: gainsboro; color: black; font-size: large;" type="text" name="ecenter" id="ecenter" placeholder="   Enter Exam Center" required></td>
		</tr>
		<tr>
			<td>Upload Syllabus</td>
			<td class="td"><input style="height: 35px;background: #AAF255; color: #fff; width: 320px; padding-top:5px; padding-left: 23px; font-size: large;" type="file" name="pdf" id="pdf" required></td>
		</tr>
	</table><br>
	<input type="submit">
</form>
</div>
