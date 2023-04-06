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
        <label for="Teacher_FName">First name:</label><br>
        <input type="text" id="Teacher_FName" name="Teacher_FName" value="" required><br>
        <label for="Teacher_LName">Last name:</label><br>
        <input type="text" id="Teacher_LName" name="Teacher_LName" value="" required><br>
        <label for="Teacher_DOB">Teacher Date of Birth:</label><br>
        <input type="date" id="Teacher_DOB" name="Teacher_DOB" value="" required><br>
        <label for="Teacher_Address">Teacher Address:</label><br>
        <input type="text" id="Address" name="Teacher_Address" value="" required><br>
        <label for="Teacher_Salary">Teacher Salary:</label><br>
        <input type="number" id="Teacher_Salary" name="Teacher_Salary" value="" required><br><br>
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
            $Teacher_FName = $_POST['Teacher_FName'];
            $Teacher_LName = $_POST['Teacher_LName'];
            $Teacher_DOB = $_POST['Teacher_DOB'];
            $Teacher_Address = $_POST['Teacher_Address'];
            $Teacher_Salary = $_POST['Teacher_Salary'];

            $sql = "INSERT INTO Teacher (Teacher_FName,Teacher_LName, Teacher_DOB, Teacher_Address, Teacher_Salary) VALUES ('$Teacher_FName','$Teacher_LName','$Teacher_DOB','$Teacher_Address','$Teacher_Salary')";
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