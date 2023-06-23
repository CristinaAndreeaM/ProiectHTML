<?php
include 'db_credentials.php';

	 $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
	 
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql = "SELECT * FROM registration WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) == 1)
	{
    //conectarea este valida
    // porniti sesiunea si creati variabilele de sesiune pentru a pastra utilizatorul conectat
    session_start();

    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $username;
    //redirectionati utilizatorul la pagina home.php
    header('location: home.php');
    exit;
	} else 
	{
    //conectarea nu e valida
    //afisati mesaj de eroare
    echo "Username sau parola incorecte";
	}

?>
