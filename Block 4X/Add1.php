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

    
    <br><br>

    <!-- PHP ask how to hide/disable the links until yhe person logs-in -->

    <form method="post">
        <label for="Pupil_FName">First name:</label><br>
        <input type="text" id="Pupil_FName" name="Pupil_FName" value="" required><br>
        <label for="Pupil_LName">Last name:</label><br>
        <input type="text" id="Pupil_LName" name="Pupil_LName" value="" required><br>
        <label for="Pupil_DOB">Pupil Date of Birth:</label><br>
        <input type="date" id="Pupil_DOB" name="Pupil_DOB" value="" required><br>
        <label for="Pupil_Class">Pupil Class:</label><br>
        <input type="number" id="Pupil_Class" name="Pupil_Class" value="" required><br>
        <label for="Pupil_Class">Pupil Address:</label><br>
        <input type="text" id="Address" name="Pupil_Address" value="" required><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <br>

    <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $DataBase = "rishton academy";

        $link = mysqli_connect($host, $username, $password, $DataBase);

        if(isset($_POST['submit'])){
            $Pupil_FName = $_POST['Pupil_FName'];
            $Pupil_LName = $_POST['Pupil_LName'];
            $Pupil_DOB = $_POST['Pupil_DOB'];
            $Pupil_Class = $_POST['Pupil_Class'];
            $Pupil_Address = $_POST['Pupil_Address'];

            $sql = "INSERT INTO pupil (Pupil_FName,Pupil_LName, Pupil_DOB, Pupil_Class, Pupil_Address) VALUES ('$Pupil_FName','$Pupil_LName','$Pupil_DOB','$Pupil_Class','$Pupil_Address')";
            if (mysqli_query($link, $sql)) {
            echo "New record created successfully";
            } else {
            echo "Error adding record ";
            }
        }
    
    ?>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>
<!--mysqli_error($link)  -->