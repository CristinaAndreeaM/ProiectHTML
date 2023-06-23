<?php
include 'credentials.php';
if ($_POST['username'] == $_POST['confirm_username']) {
    $username = $_POST['username'];
	$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
    $sql = "DELETE FROM Admin WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Contul a fost sters cu succes";
    }
} else {
    echo "Numele de utilizator introdus nu corespunde";
}
?>
