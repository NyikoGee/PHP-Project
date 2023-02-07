<?php
function displayAll() {
	$pdoConnect = dbConnection();
	$statement = $pdoConnect->prepare("SELECT * FROM `modules`");
	$statement->execute();
	if($statement->rowCount() > 0) {
		return $statement->fetchAll();
	}
	else {
		return false;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php include("menu.inc"); ?>

    <table border="solid">
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Lecturer</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "Mh071561", "modules");
        $sql = "SELECT * FROM tfour";
        $result = $conn->query($sql);

        if ($result-> num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["code"] . "</td><td>" . $row["name"] . "</td><td>" . $row["lecturer"] . "</tr>";
            }
        }
        ?>
    </table>

    <?php

    $host = "localhost";
    $databaseName = "modules";
    $username = "root";
    $password = "Mh071561";

    $dsn = "mysql:hotst=$host;dbname=$databaseName";

    echo "<br>";
    echo "<br>";

    try {
        $databasConnection = new PDO($dsn, $username, $password);
        echo " Connection successful";
    } catch (PDOException $error) {
        echo $error;
    }
    ?>
</body>
</html>