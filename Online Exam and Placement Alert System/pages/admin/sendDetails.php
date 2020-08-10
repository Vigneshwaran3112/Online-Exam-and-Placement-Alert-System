<?php
session_start();
$rr=$_SESSION["usname"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam";
$conn = new mysqli($servername, $username, $password, $dbname);
?><?php

if((isset($_POST['org']))&&($_POST['org']!=null))
{
	
	
	$org=$_POST['org'];
	$address=$_POST['address'];
	$edate=$_POST['edate'];
	$ecenter=$_POST['ecenter'];
	$subject=$_POST['subject'];
	

	if((isset($_FILES['pdf'])) ){
$target_dir = "../../images/uploads/files/exam/";
$target_file = $target_dir . basename($_FILES["pdf"]["name"]);
$pdfname=basename($_FILES["pdf"]["name"]);

if (move_uploaded_file($_FILES["pdf"]["tmp_name"], $target_file)) {
       echo '<script language="javascript">';
echo 'alert("PDF has been Uploaded")';
echo '</script>';
    } else {
       echo '<script language="javascript">';
echo 'alert("No PDF Uploaded")';

echo '</script>';
    }
$url='http://localhost/examnew/images/uploads/files/exam/'.$pdfname;
}
	
else
	{

$pdfname="";
$url="";

	}


$ms="";
	
	$sql = "SELECT phone FROM usersnew";
$result = mysqli_query($conn, $sql);
$c=0;
// set array
$array = array();
if (mysqli_num_rows($result) > 0) {
    
   

while($rows = mysqli_fetch_assoc($result)) {
	
   $array[] = $rows;
  $c++;
}

for($i=0;$i<$c;$i++)
{
$ms.= $array[$i]['phone'].',';

}

$mstrim= substr($ms,0,strlen($ms)-1);

$msg = $org." ".$address." ".$edate." ".$subject." ".$ecenter." ".$url;	



    $username = " your email";  //use registered emailid in textlocal 
	$hash = " hash key"; //hash key for your id

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = $ms; // A single number or a comma-seperated list of numbers
	$message = $msg;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	echo $result;
	echo "<br>";
	echo "To :".$numbers."<br>";
	echo "organization :".$org."<br>";
	echo "address :".$address."<br>";
	echo "exam date :".$edate."<br>";
	echo "subject :".$subject."<br>";
	echo "exam center :".$ecenter."<br>";
	echo "exam details :".$url."<br>";

	} else {
    echo "0 results";	
}
	
	
}

?>