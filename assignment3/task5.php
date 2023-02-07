<?php

$conn = mysqli_connect("localhost", "root", "Mh071561", "modules");
$sql = "SELECT * FROM  tfour";
$result = $conn->query($sql);
$editCode = null;
$editModule = null;
$editLecturer = null;


//adding data
if (isset($_POST['add'])) { 
    echo "Adding Module data";

    if (!empty($_POST['codeAdd']) && !empty($_POST['nameAdd']) && !empty($_POST['lectAdd'])) {
        $code = $_POST['codeAdd'];
        $name = $_POST['nameAdd'];
        $lecurer = $_POST['lectAdd'];
        $addSql = "INSERT INTO `tfour` (`code`, `name`, `lecturer`) VALUES ('$code', '$name', '$lecurer')";
        $res = $conn->query($addSql);
    }
}

//updating data
if (isset($_POST['update'])) { 
    if (!empty(!empty($_POST['nameUpdate']) && !empty($_POST['lectUpdate']))) {
        $name = $_POST['nameUpdate'];
        $lecturer = $_POST['lectUpdate'];

        $updateQuery = "UPDATE `tfour` SET `name`='$name',`lecturer`='$lecturer' WHERE `code`='$code'";
        $updateRes = $conn->query($updateQuery);
    }
}

//delete data
if (isset($_POST['delete'])) { 
    if (!empty($_POST['code'])) {
        $code = trim($_POST['code']);
        $deleteSql = "DELETE FROM `tfour` WHERE `code` = '$code'";

        $resDel = $conn->query($deleteSql);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $code = $row['code'];
                echo "<tr><td>" . $row["code"] . "</td><td>" . $row["name"] . "</td><td>" . $row["lecturer"] . "<td>";
            }
        }
            
        ?>
    </table>
    <br>
    <!-- Addition form starts here -->
    <h3>Add Module</h3>

    <Form action="task5.php" method="POST">

        Module Code <br>
        <input type="text" name="codeAdd">
        <br>
        <br>
        Module Name: <br>
        <input type="text" name="nameAdd">
        <br>
        <br>
        Lecturer Name: <br>
        <input type="text" name="lectAdd"> <br>
        <br>

        <button type="submit" name="add">
            Add Module
        </button>
    </Form>

    <!-- Update form starts here -->
    <h3>Update Module</h3>

     <form action="task5.php" method="POST">
        <input type='hidden' name='editCode' > Module Code <br>
        <input type="text" name="nameUpdate" >
        <br>
        <br>
        Module Lecturer: <br>
        <input type="text" name="lectUpdate" value="<?php echo $editLecturer; ?>"> <br>
        <br>

        <button type="submit" name="update">
            Update Module
        </button>
    </form>

    <!-- Deletion form starts here -->
    <h3>Delete Module</h3>

    <form action="task5.php" method="POST">
        Module Code <br>
        <input type="text" value="" name="code">
        <br>
        <br>

        <button type="submit" name="delete">
            Delete Module
        </button>
    </form>
    <br><br>

</body>

</html>