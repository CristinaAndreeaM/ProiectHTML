<?php
include 'credentials.php';

if(isset($_POST['newPassword']))
{
    $password = $_POST['newPassword'];
    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
	$sql = "UPDATE Admin SET password='$password' WHERE username='admin'";
	
	if (mysqli_query($conn, $sql))
		{
		
		header('location: login.html');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
   
}
?>

