<?php include('menu.inc'); echo "<br>"; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="task6.php" method="POST">
    <h1>Please enter your mark</h1><br>

<label>Enter your mark:</label><br><br>
<input type="text" name="mark" placeholder=""><br><br>
<input type="submit" name="grades" value="Submit"><br><br> <!--This is a button to submit the information entered!-->
</form>

	<?php
	///////////////////////task 1a////////////////////////
	//a function that accepts a mark and returns the result

    echo "<br>";

    if (isset($_POST['grades'])) {
        $enter = $_POST['mark'];
        if ($enter >= 75) {
            echo "Distinction";
        } elseif ($enter >= 50) {
            echo "Pass";
        } elseif ($enter >= 40) {
            echo "Supplementary Exam";
        } else {
            echo "Fail";
        }
    }
    echo "<br>";
    echo "<br>";

    for ($i = 0; $i < 10; ++$i) {
        echo $rand = rand(1, 100), ' is ', ($rand & 1 ? 'odd' : 'even'), '<br>';
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";

    $i = 0;
    do {
        echo $rand = rand(1, 100), ' is ', ($rand & 1 ? 'odd' : 'even'), '<br>';
        ++$i;
    } while ($i < 10);

    echo "<br>";
    echo "<br>";
    echo "<br>";

    $a = 1;

    while ($a <= 10) {
        $a += 1;
        $winds = rand(1, 4);
        switch ($winds) {
            case 1:
                echo "{$winds}, North <br>";
                break;
            case 2:
                echo "{$winds}, South <br>";
                break;
            case 3:
                echo "{$winds}, East <br>";
                break;
            case 4:
                echo "{$winds}, West <br>";
                break;
            default:
                echo "";
        };
    }
	
		?>

		<br><br>

<iframe src="task6.txt" height="400" scrolling="yes" width="1200px">
	<p>Your browser does not support iframes.</p>
</iframe>
</body>
</html>



