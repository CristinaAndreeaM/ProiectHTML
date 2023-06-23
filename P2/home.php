<html>
<head>

<title> Un mic calculator in php </title>
<style>
  form {
    width: 30%;
    margin: 0 auto;
    border: 2px solid #ccc;
    border-radius: 15px;
    padding: 15px;
	margin-top: 150px;
  }
input[type="text"] {
    width: 100%;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
}

  label {
    font-weight: bold;
  }
body {
  background: linear-gradient(to bottom, pink, purple);
}
</style>
<body>
<center>

<h1> Calculator </h1>

<form action='home.php' method='post' >
Primul numar: <input type='text' name='firstnr'>
<br><br>
Ultimul numar: <input type='text' name='lastnr'>
<br><br>
Alegeti operatiunea
<br>
<input type='radio' name='op' value='add'>Adunare
<br>
<input type='radio' name='op' value='ext'>Scadere
<br>
<input type='radio' name='op' value='mul'>Inmultire
<br>
<input type='radio' name='op' value='imp'>Impartire
<br><br>

<input type='submit' name='submit' value='Calculeaza!' >
</center>
<?php
if(isset ($_POST['submit']))
{
	$firstnr =$_POST['firstnr'];
	$lastnr=$_POST['lastnr'];
	$op=$_POST['op'];
	
	if($op=='add')
	{
		$rez=$firstnr+$lastnr;
	}
	if($op=='ext')
	{
		$rez=$firstnr-$lastnr;
	}
	if($op=='mul')
	{
		$rez=$firstnr*$lastnr;
	}
	if($op=='imp')
	{
		$rez=$firstnr/$lastnr;
	}
	
	echo "<center> <h1>Rezultatul este $rez </h1> </center>";
}
?>

</body>
</html>