<?php
session_start();
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
  <link rel="stylesheet" href="../assets/css/orderPlace.css">
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
  	<li><a href="/BDBooks/users/news.php">News</a></li>
  	<li><a href="/BDBooks/users/contact.php">Contact</a></li>
  	<li><a href="/BDBooks/users/about.php">About</a></li>
		<li><a href="/BDBooks/index.php">New Arrival</a></li>
	  <li><a href="/BDBooks/index.php">All Books</a></li>
		<?php if(isset($_SESSION["email"])){
	    if($_SESSION["type"]=="user"){?>
	      <li><a href="/BDBooks/users/home.php"><?php echo $_SESSION["fname"]; ?></a></li>
	    <?php } else{ ?>
	      <li><a href="/BDBooks/admin/home.php"><?php echo $_SESSION["fname"]; ?></a></li>
	    <?php } ?>
	  <li><a href="/BDBooks/logout.php">Sign out</a></li>
	<?php }
	else{?>
	  <li><a href="/BDBooks/login.php">Sign in</a></li>
	  <li><a href="/BDBooks/users/register.php">Sign up</a></li>
	<?php } ?>
  </ul>
<div class="container">
  <div class="title">
      <h2>Checkout Information</h2>
  </div>
<div class="d-flex">
  <form action="" method="">
    <label>
      <span class="fname">Full Name <span class="required">*</span></span>
      <input type="text" name="fname">
    </label>
    <label>
      <span class="lname">Contact Number <span class="required">*</span></span>
      <input type="tel" name="contact">
    </label>
    <label>
      <span>Division <span class="required">*</span></span>
      <input type="text" name="div" placeholder="Dhaka..." required>
    </label>
    <label>
      <span>Town / City <span class="required">*</span></span>
      <input type="text" name="city">
    </label>
    <label>
    <label>
      <span>Address <span class="required">*</span></span>
      <input type="text" name="address">
    </label>
    <label>
      <span>Email Address <span class="required">*</span></span>
      <input type="email" name="city">
    </label>
  </form>
  <div class="Yorder">
    <?php
    if(!empty($_SESSION["book_cart"]))
    {
          $shipping_cost=50.00;
         $total = 0; ?>
    <table>
      <tr>
        <th colspan="2">Your order</th>
      </tr>
      <tr>
        <th>Product Name</th>
        <th>Product price x (Qty)</th>
      </tr>

            <?php  foreach($_SESSION["book_cart"] as $keys => $values)
             {
               $bk = $books->getBookById($values["id"]);
               ?><tr>
                <td><?php echo $values["bname"]; ?></td>
                <td><?php echo $values["price"]*$values["quantity"]; ?></td>
                </tr>

              <?php
          $total = $total + ($values["quantity"] * $values["price"]);
        } ?>

      <tr>
        <td>Shipping</td>
        <td>50.00 Tk</td>
      </tr>
      <tr>
        <td>Total </td>
        <td>Free shipping</td>
      </tr>
    </table>
  <?php } ?>

    <br>
    <div>
      <input type="radio" name="dbt" value="dbt" checked> Direct Bank Transfer
    </div>
    <p>
        Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
    </p>
    <div>
      <input type="radio" name="dbt" value="cd"> Cash on Delivery
    </div>
    <div>
      <input type="radio" name="dbt" value="cd">Bkash <span>
      <img src="https://www.logolynx.com/images/logolynx/c3/c36093ca9fb6c250f74d319550acac4d.jpeg" alt="" width="50">
      </span>
    </div>
    <button type="button">Place Order</button>
  </div><!-- Yorder -->
 </div>
</div>
<div class="footer">
  <?php include '../assets/layout/footer.php' ; ?>
</div>
</body>
</html>
