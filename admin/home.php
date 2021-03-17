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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/css/header.css">
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
<body>
<div class="heading">
	<div class="site-logo">
		<a target="_blank" href="/BDBooks/dashboard/index.html">
		<img src="/BDBooks/assets/images/bookslogo.PNG" alt="logo" width="300" height="60">
		</a>
	</div>
	
</div>
<ul>
  <li><a class="active" href="/BDBooks/index.html">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
  <li><a href="#about">All books</a></li>
  <li><a href="#about">New Arrival</a></li>
  <li><a href="/BDBooks/admin/home.php">Samanta</a></li>
  <li><a href="/BDBooks/logout.php">Sign out</a></li>
</ul>
<div class="hero-bg">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<div class="form-design">
		<h1>Welcome to home page!!</h1><br>
		<h2><?php echo $_SESSION["email"]; ?> </h2>
		</div>
</div>
<div class="footer">
  <p>Contact us<br>
		samantasadia1971@gmail.com<br>
		Developer: Samanta Sadia<br>
		<a href="https://github.com/samantasadia">www.github.com</a><br>
		© Copyright 2021 BDBooks Ltd. - All Rights Reserved
  </p>
</div>
</center>
</body>
</html>