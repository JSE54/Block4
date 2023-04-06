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
        <label for="ClassID">Class ID:</label><br>
        <input type="number" id="ClassID" name=" ClassID" value="" required><br>
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
        $ClassID = $_POST['ClassID'];
        $sql = "DELETE FROM class where ClassID = ('$ClassID')";
        if (mysqli_query($link, $sql)) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record ";
        }
    }
    ?>

    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>