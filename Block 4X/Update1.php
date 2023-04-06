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

    <div class = "margin gap"><span style = "color: black">Select Pupil</span></div>
    
    <br><br>

    <!-- PHP ask how to hide/disable the links until yhe person logs-in -->

    <form method="post">
        <label for="PupilID">Pupil ID:</label><br>
        <input type="text" id="PupilID" name="PupilID" value="" required><br>
        <input type="submit" name="submit1" value="Submit">
    </form>


    

    <table>
        <tr>
            <th width="150px">Pupil ID<br><hr></th>
            <th width="250px">Pupil First Name<br><hr></th>
            <th width="250px">Pupil Last Name<br><hr></th>
            <th width="250px">Pupil Date of Birth<br><hr></th>
            <th width="250px">Pupil Class<br><hr></th>
            <th width="250px">Pupil Address<br><hr></th>
        </tr>
    

    <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $DataBase = "rishton academy";

        $link = mysqli_connect($host, $username, $password, $DataBase);

        if(isset($_POST['submit1'])){
            $PupilID = $_POST['PupilID'];

            $sql = mysqli_query($link, "SELECT * FROM pupil WHERE PupilID = $PupilID");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['PupilID']}</th>
				<th>{$row['Pupil_FName']}</th>
                <th>{$row['Pupil_LName']}</th>
                <th>{$row['Pupil_DOB']}</th>
                <th>{$row['Pupil_Class']}</th>
                <th>{$row['Pupil_Address']}</th>
                </tr>";
			}
        }
    ?> 
    </table>

    
    <form method="post">
        <label for="PupilID">Pupil ID:</label><br>
        <input type="number" id="PupilID" name="PupilID" value="" required><br>
        <label for="Pupil_FName">First name:</label><br>
        <input type="text" id="Pupil_FName" name="Pupil_FName" value="" required><br>
        <label for="Pupil_LName">Last name:</label><br>
        <input type="text" id="Pupil_LName" name="Pupil_LName" value="" required><br>
        <label for="Pupil_DOB">Pupil Date of Birth:</label><br>
        <input type="date" id="Pupil_DOB" name="Pupil_DOB" value="" required><br>
        <label for="Pupil_Class">Pupil Class:</label><br>
        <input type="number" id="Pupil_Class" name="Pupil_Class" value="" required><br>
        <label for="Pupil_Address">Pupil Address:</label><br>
        <input type="text" id="Address" name="Pupil_Address" value="" required><br><br>
        <input type="submit" name="submit2" value="Submit">
    </form>

    <?php
        if(isset($_POST['submit2'])){
            $PupilID = $_POST['PupilID'];
            $Pupil_FName = $_POST['Pupil_FName'];
            $Pupil_LName = $_POST['Pupil_LName'];
            $Pupil_DOB = $_POST['Pupil_DOB'];
            $Pupil_Class = $_POST['Pupil_Class'];
            $Pupil_Address = $_POST['Pupil_Address'];

            $sql = "UPDATE pupil SET Pupil_FName = '$Pupil_FName', Pupil_LName = '$Pupil_LName', Pupil_DOB = '$Pupil_DOB', Pupil_Class = '$Pupil_Class', Pupil_Address = '$Pupil_Address' WHERE PupilID = $PupilID";
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