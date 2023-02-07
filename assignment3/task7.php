<?php include('menu.inc'); echo "<br>"; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

///////////////////////task 1a////////////////////////
	//Defining the string

$colonString1 = "I:am:Sam";
   $colon1 = explode(':', $colonString1);
   
   print_r($colon1);
   
   echo "<br>length of string is"; echo strlen($colonString1);
   echo "<br>"; echo substr($colonString1, -1);
 
?>
</br><br>

<?php
$colonString2 = "Too:good:to:be:true";
$colon2 = explode(':', $colonString2);
   
   print_r($colon2);
   
   echo "<br>length of string is"; echo strlen($colonString2);
   echo "<br>"; echo substr($colonString2, -1);
?>

   <?php
	//////////////////////task 1b///////////////////////// 
	$today = new DateTime();
$futureDate = new DateTime('31-12-2022');
$difference = $today->diff($futureDate);
echo $difference->m;	

$class="time";

?>
<br><br>
<iframe src="task7.txt" height="400" scrolling="yes" width="1200px">
	<p>Your browser does not support iframes.</p>
</iframe>
</body>
</html>



