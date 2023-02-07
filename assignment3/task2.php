
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<style type="text/css">
		 
		article {
			font-family: "Lucida Console", "Courier New", monospace;
		}
	</style>
</head>
<body>
<?php include('menu.inc'); echo "<br>"; ?>
 <!--Creating the checkbox for the products-->
<form action="task2.php" method="GET">
	<h2>Select product(s)</h2>
	<p><input type="checkbox" name="product[]" value="80" id="Boer Wors"><label for="boer wors">Boer Wors(R80)</label></p>
	<p><input type="checkbox" name="product[]" value="50" id="Rice"><label for="rice">Rice(R50)</label></p>
	<p><input type="submit" value="Submit Product" name="submit_product"></p>

</form>
<article>
<?php
///////////////////////task 1a////////////////////////
//The form uses the get method, and this is where the information entered, goes
if(isset($_GET["submit_product"])){
	if(isset($_GET['product'])){
		$products = $_GET['product'];
		foreach($products as $key => $value){

			$discountedBasePrice = $value * (1- 0.1);
			$vat = $discountedBasePrice * (1- 0.15);
			$finalPrice = $discountedBasePrice + $vat;

			if($key==0){
				$selectedProduct = "Boer Wors";
			}
			else{
				$selectedProduct = "Rice";
			}
//////////////////////task 1b///////////////////////// 
	//Displaying the information
	echo "Product Selected: $selectedProduct <br>
	      Base Price: R$value <br>
	      Discounted Price: R$discountedBasePrice <br>
          Discounted Percentage: 10% <br>	  
	      Vat Charged: R$vat <br> 
	      Final Price: R$finalPrice <br><br>";
	
	}
}
else {
	echo "<p>No Product Selected</p>";
}
	}

?>
</article>
<br><br>

<iframe src="task2.txt" height="400" scrolling="yes" width="1200px">
	<p>Your browser does not support iframes.</p>
</iframe>
</body>
</html>