<?php
include 'credentials.php';

	 $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
	 
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql = "SELECT * FROM Admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) == 1)
	{
    //conectarea este valida
    // porniti sesiunea si creati variabilele de sesiune pentru a pastra utilizatorul conectat
    session_start();

    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $username;
    //redirectionati utilizatorul la pagina index.html
    header('location: index.html');
    exit;
	} else 
	{
    //conectarea nu e valida
    //afisati mesaj de eroare
    echo "Username sau parola incorecte";
	}

?>
