<!doctype html>
<html>
<head>
    <title>Khon's Asian Takeaway | Menu</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
     	<link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">

	
</head>
<body>
    <header class="header">
		<a class="logo" href="index.php"><img src="KhonsLogo.png"></a>
		<ul class="menu" id="menu">
			<li class="navtext"><a href="login.php">Login</a></li>
            		<li class="navtext"><a href="service.php">Order</a></li>
			<li class="navtext"><a class="page" href="products.php">Menu</a></li>
			<li class="navtext"><a href="index.php">Home</a></li>
		</ul>
	</header>
    <div class="menu">
    <h3>Khon's Menu</h3>
     <?php    
   
  	$fp = fopen('Products1.txt', "r");
	flock($fp, LOCK_SH);
	$headings = fgetcsv($fp, "\t");
	while ($aLineOfCells = fgetcsv($fp, "\t")) {
  	$records[] = $aLineOfCells;
	}
	flock($fp, LOCK_UN);
	$menuLength = count($records);
	echo "<p>{$headings[2]} {$headings[3]} {$headings[4]} {$headings[5]}</p>";
	//for ($x = 0; $x < $records;  $x++) {
	  //  print implode(",", $records[$x]);
		
		//if ($records = 50){
			//echo "br";
		//}
	//}
	 fclose($fp);
	 echo   '<table id="displayMenu">
			
			<tr id="menuHeadings">
				<th>
					<h3>'.$headings[2].'</h3>
				</th>					
				<th>
					<h3>'.$headings[3].'</h3>
				</th>										
				<th>
					<h3>'.$headings[4].'</h3>
				</th>
				<th>
					<h3>'.$headings[5].'</h3>
				</th>
			</tr>
			<tr>
				<td>
					<h4>'.$records[0][2].'</h4>
				</td>
				<td>'.$records[0][3].'</td>
				<td>'.$records[0][4].'</td>
				<td>$'.$records[0][5].'</td>
			</tr>
			<tr>
				<td>
					<h4>'.$records[1][2].'</h4>
				</td>
				<td>'.$records[1][3].'</td>
				<td>'.$records[1][4].'</td>
				<td>$'.$records[1][5].'</td>
			</tr>
			<tr>
				<td>
					<h4>'.$records[2][2].'</h4>
				</td>
				<td>'.$records[2][3].'</td>
				<td>'.$records[2][4].'</td>
				<td>$'.$records[2][5].'</td>
			</tr>	
				<td>
					<h4>'.$records[3][2].'</h4>
				</td>
				<td>'.$records[3][3].'</td>
				<td>'.$records[3][4].'</td>
				<td>$'.$records[3][5].'</td>
			<tr>
				<td>
					<h4>'.$records[4][2].'</h4>
				</td>
				<td>'.$records[4][3].'</td>
				<td>'.$records[4][4].'</td>
				<td>$'.$records[4][5].'</td>
			</tr>
			<tr>
				<td>
					<h4>'.$records[5][2].'</h4>
				</td>
				<td>'.$records[5][3].'</td>
				<td>'.$records[5][4].'</td>
				<td>$'.$records[5][5].'</td>
			<tr>
				<td>
					<h4>'.$records[6][2].'</h4>
				</td>
				<td>'.$records[6][3].'</td>
				<td>'.$records[6][4].'</td>
				<td>$'.$records[6][5].'</td>
			</tr>	
		''$currRow = 0;
	    	$currCol = 2;
		 for ($x <12, $x++){
				echo "<td>'.$records[$currCol][$currRow].'</td>";
			 	echo $currCol + 1;
		 		if ($currCol = 6){
					$currRow + 1;
					$currCol = 2;
				}
		 }'
		
	'</table>';
	
		
 	
	    
        ?>
    
    <h3 id="size">Large</h3><h3 id="size">Small</h3>
    <p id="menu_type">Chicken</p><p id="price_large">$12</p><p id="price_small">$10</p>
        <br><br>
    <p id="menu_type">Prawn</p><p id="price_large">$14</p><p id="price_small">$12</p>
         <br>
    <p id="menu_type">Rice</p><p id="price_large">$8</p><p id="price_small">$6</p>
        <img src="rice.jpg" id="chicken_pic" title="Chicken with Rice" alt="Chicken with Rice">
        <img src="Prawn.jpg" id="prawn_pic" title="Prawn with Salad" alt="Prawn with Salad">
        <img src="Rice (2).jpg" id="rice_pic" title="Rice with Prawns" alt="Rice with Prawns">
    </div>
 

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
