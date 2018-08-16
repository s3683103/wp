<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <title>Assignment 3</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <!--<link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>-->
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <!--<script src='../wireframe.js'></script>
    <style>
      <?php
        // This PHP code inserts CSS to style the "current page" link in the nav area
        /*$here = $_SERVER['SCRIPT_NAME']; 
        $bits = explode('/',$here); 
        $filename = $bits[count($bits)-1]; 
        echo "nav a[href$='$filename'] {
        box-shadow: 1px 1px 1px 2px navy;
      }";
	*/      
?>
      
    </style>-->
  </head>

  <body>

 <header class="header">
		<a class="logo" href="/"><img src="KhonsLogo.png"></a>
		<ul class="menu" id="menu">
			<li class="navtext"><a href="login.php">Login</a></li>
            		<li class="navtext"><a href="service.php">Order</a></li>
			<li class="navtext"><a href="products.php">Menu</a></li>
			<li class="navtext"><a class="page" href="index.php">Home</a></li>
		</ul>
	</header>

    <!--<nav>
      <div>Put website navigation links here</div>
    </nav>-->
<div id="jumbotron" style="background-image('cooking.jpg')" class="clearfix">
	<div id="jumbocontent"><h1 class="toptext">Khon's Asian Takeaway</h1>
		<p>Dine in or take out made to order</p>
        <h5><a href="products.php"><button id="menubutton">See Menu</button></a>
            <a href="service.php"><button id="orderbutton">Order Now</button></a></h5>
	</div>
</div>

<div class="wrap">
	<div class="bg">
	<div class="content">
		<h3>Khon's Kitchen</h3>
		<p>Khon's Asian Takeaway is a family business in the central shop area of Mowbray. With many years of experience expect a loving atmosphere with great food. 
            <br><br>Food is made to order or you can choose from the ready cooked selection on offer.</p>
		<h3>Menu</h3>
		<p> </p>
	
	</div>
	
	<div class="hours">
	
		<table>
			
			<tr class="openhourstop">
				<th>
					<h3 id="openhours">Open Hours</h3>
				</th>					
				<th>
					<h3>Lunch</h3>
				</th>										
				<th>
					<h3>Dinner</h3>
				</th>
			</tr>
			<tr>
				<td>
					<h4>Monday:</h4>
				</td>
				<td>Closed</td>
				<td>Closed</td>
			</tr>
			<tr>
				<td>	
					<h4>Tuesday:</h4>
				</td>
				<td>Closed</td>
				<td>11am - 1pm</td>
			</tr>
			<tr>
				<td>	
					<h4>Wednesday:</h4>
				</td>
				<td>Closed</td>
				<td>5pm - 9pm</td>
			</tr>	
				<td>	
					<h4>Thursday:</h4>
				</td>
				<td>Closed</td>
				<td>5pm - 9pm</td>
			<tr>
				<td>
					<h4>Friday:</h4>
				</td>
				<td>Closed</td>
				<td>5pm - 9pm</td>
			</tr>
			<tr>
				<td>
					<h4>Saturday:</h4>
				</td>
				<td>Closed</td>
				<td>5pm - 9pm</td>
			<tr>
				<td>
					<h4>Sunday:</h4>
				</td>
				<td>Closed</td>
				<td>5pm - 9pm</td>
			</tr>	
		
	</table>
	
</div>
	</div>
</div>
    
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
    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Put your name(s), student number(s) and group name here.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div>Maintain links to your <a href='products.txt'>products spreadsheet</a> and <a href='orders.txt'>orders spreadsheet</a> here. <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>
   
  </body>
</html>
