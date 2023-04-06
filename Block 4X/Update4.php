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

    <div class = "margin gap"><span style = "color: black">Select Class</span></div>
    
    <br><br>

    <!-- PHP ask how to hide/disable the links until yhe person logs-in -->

    <form method="post">
        <label for="ClassID">Class ID:</label><br>
        <input type="text" id="ClassID" name="ClassID" value="" required><br>
        <input type="submit" name="submit1" value="Submit">
    </form>


    

    <table>
        <tr>
            <th width="150px">Class ID<br><hr></th>
            <th width="250px">Class Year<br><hr></th>
            <th width="250px">Student Amount<br><hr></th>
        </tr>
    

    <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $DataBase = "rishton academy";

        $link = mysqli_connect($host, $username, $password, $DataBase);

        if(isset($_POST['submit1'])){
            $ClassID = $_POST['ClassID'];

            $sql = mysqli_query($link, "SELECT * FROM class WHERE ClassID = $ClassID");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['ClassID']}</th>
				<th>{$row['Year']}</th>
                <th>{$row['Student_Amount']}</th>
                </tr>";
			}
        }
    ?> 
    </table>

    
    <form method="post">
        <label for="ClassID">Class ID:</label><br>
        <input type="number" id="ClassID" name="ClassID" value="" required><br>
        <label for="Year">Class Year:</label><br>
        <input type="number" id="Year" name="Year" value="" required><br>
        <label for="Student_Amount">Student Amount:</label><br>
        <input type="number" id="Student_Amount" name="Student_Amount" value="" required><br><br>
        <input type="submit" name="submit2" value="Submit">
    </form>

    <?php
        if(isset($_POST['submit2'])){
            $ClassID = $_POST['ClassID'];
            $Year = $_POST['Year'];
            $Student_Amount = $_POST['Student_Amount'];

            $sql = "UPDATE class SET Year = '$Year', Student_Amount = '$Student_Amount' WHERE ClassID = $ClassID";
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