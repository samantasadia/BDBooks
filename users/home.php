<?php
session_start();
if(empty($_SESSION))
{
	header('Location:http://localhost/BDBooks/login.php');
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>
home page
</title>
<style>

.error {color: #FF0000;}
span {color: #FF0000;}
th {
  text-align: left;
}
</head>
</style>
<body>
<center>
<h1>Welcome to home page!!</h1><br>
<h2><?php echo $_SESSION["email"]; ?> </h2>
<h3><a href="/BDBooks/logout.php">Logout<a></h3>
<?php $filepath = "../data/userdb.txt";
		$f3 = fopen($filepath, "r");
		$data = fread($f3, filesize($filepath));
		$data_decoded = json_decode($data, true);
		echo "Name :" . $data_decoded["firstName"] ." ". $data_decoded["lastName"] . "<br>";
		echo "Email :" . $data_decoded["email"] . "<br>";
		echo "Gender :" . $data_decoded["gender"] . "<br>";
		echo "Recovery email :" . $data_decoded["recoveryEmail"];
?>
</center>
</body>
</html>