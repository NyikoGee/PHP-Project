
<?php include('menu.inc'); echo "<br>"; ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
</head>
<body>
		<br><br>
	<?php
///////////////////////task 1a////////////////////////
	// Defining the string

define('MODULECODE', 2022);  
$moduleCode = "ICT2613";
$registrationYear = 2022;
$numberOfAssignments = 3;


//////////////////////task 1b///////////////////////// 
 // Displaying the string stored in the array

echo "I am registered for: <b> $moduleCode </b> in <b> $registrationYear </b>. <b>$moduleCode</b> has <b>$numberOfAssignments</b> assignments."; 

?>
<br><br>
<br><br>

<iframe src="task1.txt" height="400" scrolling="yes" width="1200px">
	<p>Your browser does not support iframes.</p>
</iframe>
</body>
</html>