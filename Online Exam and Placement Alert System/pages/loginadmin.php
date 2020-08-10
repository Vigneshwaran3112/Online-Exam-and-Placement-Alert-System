<?php


session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam";


$uname=$_POST['uname'];
$pass=$_POST['pass'];
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name FROM users where role='admin' and name='$uname' and password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		
$_SESSION["usname"] = $row["name"];

        echo "<script>alert('Login Successful');</script>";
 header("Location: http://localhost/examnew/pages/admin/admin_home.php");
    }
    echo "</table>";
} else {
    echo "<script>alert('Login Failed');
	</script>";

echo "<script> window.location = 'http://localhost/examnew/pages/admin/index.php';  </script>";

}

$conn->close();

?>
