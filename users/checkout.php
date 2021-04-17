<?php
session_start();
require '../model/dataaccess.php';
require_once '../model/Book.php';
$books = new Book($connection);
if(empty($_SESSION))
{
	header('Location:http://localhost/BDBooks/login.php');
	exit();
}
if($_SESSION["type"] != "user")
{
  header('Location:http://localhost/BDBooks/login.php');
	exit();
}
?>
<html>
<head>
  <link rel="stylesheet" href="../assets/css/header.css">
  <link rel="stylesheet" href="../assets/css/checkout.css">
</head>
<body>
  <div class="heading">
  	<div class="site-logo">
  		<a target="_blank" href="/BDBooks/dashboard/index.html">
  		<img src="/BDBooks/assets/images/bookslogo.PNG" alt="logo" width="300" height="60">
  		</a>
  	</div>

  </div>
  <ul>
    <li><a class="active" href="/BDBooks/index.php">Home</a></li>
    <li><a href="#news">News</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#about">All books</a></li>
    <li><a href="#about">New Arrival</a></li>
    <li><a href="/BDBooks/users/home.php"><?php echo $_SESSION["email"]; ?></a></li>
    <li><a href="/BDBooks/logout.php">Sign out</a></li>
  </ul>
  <div id="w">
    <header id="title">
      <h1>Book Cart</h1>
    </header>
    <div id="page">
      <table id="cart">
        <thead>
          <tr>
            <th class="first">Photo</th>
            <th class="second">Qty</th>
            <th class="third">Product</th>
            <th class="fourth">Price</th>
            <th class="fifth">&nbsp;</th>
          </tr>
        </thead>
        <tbody>
          <!-- shopping cart contents -->
          <?php
          if(!empty($_SESSION["book_cart"]))
          {
               $total = 0;
               foreach($_SESSION["book_cart"] as $keys => $values)
               {
                 ?>
                  <tr class="productitm">
                    <td><img src="https://i.imgur.com/8goC6r6.png" class="thumb"></td>
                    <td><input type="number" value="1" min="0" max="99" class="qtyinput"></td>
                    <td><?php echo $values["item_name"]; ?></td>
                    <td>$79.00</td>
                    <td><span class="remove"><img src="https://i.imgur.com/h1ldGRr.png" alt="X"></span></td>
                  </tr>
                <?php } ?>
          <!-- tax + subtotal -->
          <tr class="extracosts">
            <td class="light">Shipping &amp; Tax</td>
            <td colspan="2" class="light"></td>
            <td>$35.00</td>
            <td>&nbsp;</td>
          </tr>
          <tr class="totalprice">
            <td class="light">Total:</td>
            <td colspan="2">&nbsp;</td>
            <td colspan="2"><span class="thick">$225.45</span></td>
          </tr>

          <!-- checkout btn -->
          <tr class="checkoutrow">
            <td colspan="5" class="checkout"><button id="submitbtn">Checkout Now!</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
