<!doctype html>
<html>
<head>
    <title>Khon's Asian Takeaway | Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--	!--<link href="slicknav.min.css" rel="stylesheet" type="text/css">-->
<!--	<link href="responsive.css" rel="stylesheet" type="text/css">-->
	<link href="style.css" rel="stylesheet" type="text/css">
	<script src="https://use.fontawesome.com/72e868d4a3.js"></script>
	<script 	  src="https://code.jquery.com/jquery-3.1.1.min.js"
			  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
			  crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
	
</head>
<body>
    <header class="header">
		<a class="logo" href="/"><img src="KhonsLogo.png"></a>
		<ul class="menu" id="menu">
			<li class="navtext"><a class="page" href="login.php">Login</a></li>
            <li class="navtext"><a href="service.php">Order</a></li>
			<li class="navtext"><a href="products.php">Menu</a></li>
			<li class="navtext"><a href="index.php">Home</a></li>
		</ul>
	</header>
    
<form action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php" >  
  <div class="login">
      <label for="name"><p>Username</p></label>
    <input type="text" placeholder="Enter Username" name="name" required>
<br>
    <label for="pw"><p>Password</p></label>
    <input type="password" placeholder="Enter Password" name="pw" required>
<br>
    <button type="submit" id="log">Login</button>
  
  </div>
    </form>
</body>
<footer class="footer">
	<br>
    <span class="footer-head">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="products.php">Menu</a></li>
			<li><a href="service.php">Order Now</a></li>
			<li><a href="login.php">Login</a></li>
		</ul>
	</span>
    <br>
    <h1></h1>
    <br>
	<p id="copyright">&copy; Khon's Asian Takeaway 
        <script>
            document.write(new Date().getFullYear());
        </script>
	 | Site designed by Dylan | s3683103</p>
   

	 

	
</footer>

</html>