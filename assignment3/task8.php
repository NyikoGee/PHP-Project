<?php include('menu.inc'); echo "<br>"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Task 8</title>
    <style>
        
    </style>
</head>
<body>
	<?php
	///////////////////////task 1a////////////////////////
    $monthsNum =  range(1, 12);
    $monthsString = [
        "January", 
        "February", 
        "March",
        "April", 
        "May",
        "June", 
        "July",
        "August", 
        "September", 
        "October",
        "November", 
        "December"
    ];
            
    foreach ($monthsNum as $key => $value) {
        echo $value . " - " . $monthsString[$key] . "<br>";
    }
    echo "<br>";
    echo "<br>";


    foreach ($monthsString as $value) {
        echo $value . "<br>";
    }
    $months = [
        1 => "January",
        2 => "February",
        3 => "March",
        4 => "April",
        5 => "May",
        6 => "June",
        7 => "July",
        8 => "August",
        9 => "September",
        10 => "October",
        11 => "November",
        12 => "December",

    ];
    echo "<br>";

    foreach ($months as $key => $value) {
        echo $key . " - " . $value . "<br>";
    }

    echo "<br>";
    echo "<br>";

    $months = array(
        1 => "January",
        2 => "February",
        3 => "March",
        4 => "April",
        5 => "May",
        6 => "June",
        7 => "July",
        8 => "August",
        9 => "September",
        10 => "October",
        11 => "November",
        12 => "December",
    );
    foreach ($months as $key => $value) {
        echo $key . " - " . $value . "<br>";
    }

    ?>


<br><br>
<iframe src="task8.txt" height="400" scrolling="yes" width="1200px">
	<p>Your browser does not support iframes.</p>
</body>
</html>