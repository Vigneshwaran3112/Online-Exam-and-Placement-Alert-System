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
  <title>Registered User</title>
  <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
  <style type="text/css">
    table,tr,td{
      border:none;
      outline: none;
      padding:2px;
      border-radius: 5px;
    }
    td{
      text-align: center;
    }

    body{
      //background-color: #424242;
      background-color: #fff;
    }
    .div2{
      margin-top:50px;
      width: 1000px;
      height: auto;
      background-color: transparent;
      border:3px solid #009799;
      border-radius: 20px;
    }
    h1{
      //color: #F50057;
      color: #EEEEEE;
      font-family: 'Comfortaa', cursive;
     
    }
    .div1{
      width: 1050px;
      height:auto;
      padding: 10px;
      border-radius: 10px;
      background-image: linear-gradient(90deg, #00ABB2, #96f5f3);
      box-shadow: 10px 10px 15px #757575;
    }
  </style> 
</head>
<body>
<center><br><br>
  <div class="div1">
  <h1>Registered User Details</h1>
<div class="div2">
  <table cellpadding="22">
    <tr style="font-family: 'Comfortaa', cursive;">
      <th>S.No</th>
      <th>Name</th>
      <th>DOB</th>
      <th>Qualification</th>
      <th>Post</th>
      <th>Experience</th>
      <th>Fresher</th>
      <th>E-mail</th>
    </tr>

  <?php


if ($conn->connect_error) {
    echo $conn->connect_error;
    die();
} 


$query = "SELECT * FROM `usersnew`";
$query_run = mysqli_query($conn,$query);
$count = 1;

while($row = mysqli_fetch_array($query_run))
{
  ?>
  <tr>
    <td> <?php echo $count; ?> </td>
    <td> <?php echo $row['name']; ?> </td>
    <td> <?php echo $row['dob']; ?> </td>
    <td> <?php echo $row['qualification']; ?> </td>
    <td> <?php echo $row['post']; ?> </td>
    <td> <?php echo $row['expyr']; ?> </td>
    <td> <?php echo $row['exp']; ?> </td>
    <td> <?php echo $row['email']; ?> </td>
  </tr>
  <?php
    $count = $count + 1;
}

 $conn->close();
?>
</table>
</div>
</div>
</center>
</body>
</html>