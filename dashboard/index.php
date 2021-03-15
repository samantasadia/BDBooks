<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  width: 12%;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
  color: white;
  background-color: #d17c06;
}
a:link {
  text-decoration: none;
}
.hero-bg {
    background: #307D99 url('../assets/images/bg.jpg');
    color: white;
	background-size: cover;
    text-align: center;
    padding-bottom: 50em;
}
input[type=button]{
    background-color: #f3920a;
    border: none;
    width: 100%;
    color: white;
    padding: .5em 0;
    font-size: 1.3em;
    cursor: pointer;
}

input[type=button]:hover{
    background-color: #d17c06;
}

div.top {
  content: "";
  clear: both;
  display: table;
  padding-left:15em;
}
div.bottom {
  padding: 2em 5em 0 15em;
}

.heading .site-logo {
  margin-left: 20px;
}
.heading .site-logo .search-container {
  float: right;
}
.heading .site-logo .search-container button {
  float: right;
  padding: 6px 10px;
  padding-bottom: .8em;
  margin-top: .7em;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}
.heading .site-logo .search-container button:hover {
  background: #ccc;
}
input[type=text]{
    border: 1px solid #707070;
	margin-top: .7em;
	padding: .5em 0 .5em 3em;
    box-sizing: border-box;
	font-size: 17px;

}
</style>
</head>
<body>
<div class="heading">
	<div class="site-logo">
		<a target="_blank" href="/BDBooks/dashboard/index.php">
		<img src="/BDBooks/assets/images/bookslogo.PNG" alt="logo" width="300" height="60">
		</a>
		<div class="search-container">
		<form action="/action_page.php">
		  <input type="text" placeholder="Search book.." name="search">
		  <button type="submit"><i class="fa fa-search"></i></button>
		</form>
	</div>
	</div>
	
</div>
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
  <li><a href="#about">All books</a></li>
  <li><a href="#about">New Arrival</a></li>
  <li><a href="#about">Sign in</a></li>
  <li><a href="#about">Sign up</a></li>
</ul>
<div class="hero-bg">
   <div class="top">
		<div class="gallery">
		  <a target="_blank" href="img_5terre.jpg">
			<img src="/BDBooks/assets/images/python.jpg" alt="Cinque Terre" width="600" height="400">
		  <div class="desc">Add a description of the image here</div>
		  </a>
		  <input type="button" value="Buy now">
		</div>

		<div class="gallery">
		  <a target="_blank" href="img_forest.jpg">
			<img src="/BDBooks/assets/images/Deyal.jpeg" alt="Forest" width="600" height="400">
		  </a>
		  <div class="desc">Add a description of the image here</div>
		  <input type="button" value="Buy now">
		</div>

		<div class="gallery">
		  <a target="_blank" href="img_lights.jpg">
			<img src="/BDBooks/assets/images/brishtibilash.jpg" alt="Northern Lights" width="600" height="400">
		  </a>
		  <div class="desc">Add a description of the image here</div>
		  <input type="button" value="Buy now">
		</div>

		<div class="gallery">
		  <a target="_blank" href="img_mountains.jpg">
			<img src="/BDBooks/assets/images/AajHimurBiye.jpg" alt="Mountains" width="600" height="400">
		  </a>
		  <div class="desc">Add a description of the image here</div>
		  <input type="button" value="Buy now">
		</div>
	</div>
	<div class="bottom">
	<div class="gallery">
	  <a target="_blank" href="img_mountains.jpg">
		<img src="/BDBooks/assets/images/ural.jpg" alt="Serina" width="600" height="400">
	  </a>
	  <div class="desc">Add a description of the image here</div>
	  <input type="button" value="Buy now">
	</div>
	<div class="gallery">
	  <a target="_blank" href="img_mountains.jpg">
		<img src="/BDBooks/assets/images/science.jpg" alt="science" width="600" height="400">
	  </a>
	  <div class="desc">Add a description of the image here</div>
	  <input type="button" value="Buy now">
	</div>
	<div class="gallery">
	  <a target="_blank" href="img_mountains.jpg">
		<img src="/BDBooks/assets/images/ajami.jpg" alt="52BookCover" width="600" height="400">
	  </a>
	  <div class="desc">Add a description of the image here</div>
	  <input type="button" value="Buy now">
	</div>
	<div class="gallery">
	  <a target="_blank" href="img_mountains.jpg">
		<img src="/BDBooks/assets/images/capler22B.jpg" alt="capler22B" width="600" height="400">
	  </a>
	  <div class="desc">Add a description of the image here</div>
	  <input type="button" value="Buy now">
	</div>
	</div>
</div>
</center>
</body>
</html>
