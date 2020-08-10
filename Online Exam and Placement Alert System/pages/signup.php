<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam";

$name=$_POST['name'];
$dob=$_POST['dob'];
$age=$_POST['age'];
$address=$_POST['address'];
$post=$_POST['post'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$exp=$_POST['exp'];
$expyr=$_POST['expyr'];
$qual=$_POST['qual'];
$branch=$_POST['branch'];
$date=$_POST['date'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO usersnew (name,dob,age,address,post,email,phone,exp,expyr,qualification,branch,date) VALUES ('$name','$dob','$age', '$address','$post','$email','$phone','$exp','$expyr','$qual','$branch','$date')";

if ($conn->query($sql) === TRUE) {
   
	echo '<script language="javascript">';
echo 'alert("New record created successfully")';

echo '</script>';
echo "<script> window.location = 'http://localhost/examnew/';  </script>";


} else {

echo '<script language="javascript">';
echo 'alert("Signup Failed")';

echo '</script>';
echo "<script> window.location = 'http://localhost/examnew/';  </script>";

}

$conn->close();


?>
