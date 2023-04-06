<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="design.css">
</head>
<body>
    
    <?php
    require_once 'NavBar.php';
    ?>

    <img src = "Capture.JPG" alt = "download" width = 200 class = "gap right"/>

    <br><br><br><br><br><br><br><br>

    <div class = "margin gap"><span style = "color: black">Select Parent</span></div>
    
    <br><br>

    <!-- PHP ask how to hide/disable the links until yhe person logs-in -->

    <form method="post">
        <label for="ParentID">Parent ID:</label><br>
        <input type="text" id="ParentID" name="ParentID" value="" required><br>
        <input type="submit" name="submit1" value="Submit">
    </form>


    

    <table>
        <tr>
            <th width="150px">Parent ID<br><hr></th>
            <th width="250px">Parent First Name<br><hr></th>
            <th width="250px">Parent Last Name<br><hr></th>
            <th width="250px">Parent Address<br><hr></th>
        </tr>
    

    <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $DataBase = "rishton academy";

        $link = mysqli_connect($host, $username, $password, $DataBase);

        if(isset($_POST['submit1'])){
            $ParentID = $_POST['ParentID'];

            $sql = mysqli_query($link, "SELECT * FROM Parent WHERE ParentID = $ParentID");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['ParentID']}</th>
				<th>{$row['Parent_FName']}</th>
                <th>{$row['Parent_LName']}</th>
                <th>{$row['Parent_Address']}</th>
                </tr>";
			}
        }
    ?> 
    </table>

    
    <form method="post">
        <label for="ParentID">Parent ID:</label><br>
        <input type="number" id="ParentID" name="ParentID" value="" required><br>
        <label for="Parent_FName">First name:</label><br>
        <input type="text" id="Parent_FName" name="Parent_FName" value="" required><br>
        <label for="Parent_LName">Last name:</label><br>
        <input type="text" id="Parent_LName" name="Parent_LName" value="" required><br>
        <label for="Parent_Address">Parent Address:</label><br>
        <input type="text" id="Address" name="Parent_Address" value="" required><br><br>
        <input type="submit" name="submit2" value="Submit">
    </form>

    <?php
        if(isset($_POST['submit2'])){
            $ParentID = $_POST['ParentID'];
            $Parent_FName = $_POST['Parent_FName'];
            $Parent_LName = $_POST['Parent_LName'];
            $Parent_Address = $_POST['Parent_Address'];

            $sql = "UPDATE Parent SET Parent_FName = '$Parent_FName', Parent_LName = '$Parent_LName', Parent_Address = '$Parent_Address' WHERE ParentID = $ParentID";
            if (mysqli_query($link, $sql)) {
            echo "record successfully updated";
            } else {
            echo "Error updating record ";
            }
        }
    
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>