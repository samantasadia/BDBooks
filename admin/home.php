<?php
require '../model/dataaccess.php';
require_once '../model/User.php';
$admin = new User($connection);
session_start();
if(empty($_SESSION))
{
	header('Location:http://localhost/BDBooks/login.php');
	exit();
}
if($_SESSION["type"] != "admin")
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
.btn-group a {
	background-color: #f3920a;
    border: none;
    width: 30%;
    color: white;
    padding: .5em 7em .5em 6em ;
    font-size: 1.3em;
    cursor: pointer;
	text-decoration: none;
	margin: .5em 0 .5em 0;
	display:block;
	margin-left:21em;
}
.btn-group a:hover {
	background-color: #d17c06;
}
</style>
</head>
<body>
<body>
<div class="heading">
	<div class="site-logo">
		<a target="_blank" href="/BDBooks/index.php">
		<img src="/BDBooks/assets/images/bookslogo.PNG" alt="logo" width="300" height="60">
		</a>
	</div>

</div>
<ul>
  <li><a class="active" href="/BDBooks/index.php">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="/BDBooks/common/contact.php">Contact</a></li>
  <li><a href="/BDBooks/common/about.php">About</a></li>
  <li><a href="/BDBooks/book/allBooks.php">All books</a></li>
  <li><a href="/BDBooks/admin/addBooks.php">Add books</a></li>
  <li><a href="/BDBooks/admin/home.php"><?php echo $_SESSION["email"];?></a></li>
  <li><a href="/BDBooks/logout.php">Sign out</a></li>
</ul>
<div class="hero-bg">
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<div class="form-design">
		<h1>Welcome to home page!!</h1><br>
		<?php
		$user = $admin->getUserByEmailPass($_SESSION["email"], $_SESSION["password"]);
		if(!empty($user)){
				echo "Name :" . $user->firstName." ". $user->lastName . "<br>";
				echo "Email :" . $user->email . "<br>";
				echo "Gender :" . $user->gender . "<br>";
		}?>

		<div class="btn-group">
			<a href ="/BDBooks/admin/update.php">Update Profile</a>
			<a href ="/BDBooks/admin/addBooks.php">Add New Book</a>
			<a href ="/BDBooks/admin/allBooks.php">View All Books</a>
		</div>

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
© 2021 GitHub, Inc.
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
Loading complete
