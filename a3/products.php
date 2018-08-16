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
     <?php include 'products.txt.tsv';
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
    <?php
    $fp = fopen($products.txt.tsv, "r");
flock($fp, LOCK_SH);
$headings = fgetcsv($fp);
while ($aLineOfCells = fgetcsv($fp)) {
  $records[] = $aLineOfCells;
}
flock($fp, LOCK_UN);
fclose($fp);
echo "<p>{$headings[5]}</p>";
echo "<p>{$records[0][0]}</p>";
?>
	<?php
	$data = explode($products.txt.tsv,$query);

    echo '<table>';
    foreach($data as $row){
        echo '<tr>';
        $row = explode($products.txt.tsv,$row);
        foreach($row as $cell){
            echo '<td>';
            echo $cell;
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
	?>
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
