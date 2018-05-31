<?php include '../../includes/functions.php'; ?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password,"power");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$uid=$_POST["user_id"];
$pid=$_POST["project_id"];

$query="UPDATE applicant SET application_status=2 WHERE project_id='".$pid."' AND user_id='".$uid."'";
mysqli_query($conn,$query); 
// include 'profile.php'
redirect_to("profile.php");
?>