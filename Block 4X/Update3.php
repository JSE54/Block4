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

    <div class = "margin gap"><span style = "color: black">Select Teacher</span></div>
    
    <br><br>

    <!-- PHP ask how to hide/disable the links until yhe person logs-in -->

    <form method="post">
        <label for="TeacherID">Teacher ID:</label><br>
        <input type="text" id="TeacherID" name="TeacherID" value="" required><br>
        <input type="submit" name="submit1" value="Submit">
    </form>


    

    <table>
        <tr>
            <th width="150px">Teacher ID<br><hr></th>
            <th width="250px">Teacher First Name<br><hr></th>
            <th width="250px">Teacher Last Name<br><hr></th>
            <th width="250px">Teacher Date of Birth<br><hr></th>
            <th width="250px">Teacher Address<br><hr></th>
            <th width="250px">Teacher Salary<br><hr></th>
        </tr>
    

    <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $DataBase = "rishton academy";

        $link = mysqli_connect($host, $username, $password, $DataBase);

        if(isset($_POST['submit1'])){
            $TeacherID = $_POST['TeacherID'];

            $sql = mysqli_query($link, "SELECT * FROM Teacher WHERE TeacherID = $TeacherID");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['TeacherID']}</th>
				<th>{$row['Teacher_FName']}</th>
                <th>{$row['Teacher_LName']}</th>
                <th>{$row['Teacher_DOB']}</th>
                <th>{$row['Teacher_Address']}</th>
                <th>{$row['Teacher_Salary']}</th>
                </tr>";
			}
        }
    ?> 
    </table>

    
    <form method="post">
        <label for="TeacherID">Teacher ID:</label><br>
        <input type="number" id="TeacherID" name="TeacherID" value="" required><br>
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
        <input type="submit" name="submit2" value="Submit">
    </form>

    <?php
        if(isset($_POST['submit2'])){
            $TeacherID = $_POST['TeacherID'];
            $Teacher_FName = $_POST['Teacher_FName'];
            $Teacher_LName = $_POST['Teacher_LName'];
            $Teacher_DOB = $_POST['Teacher_DOB'];
            $Teacher_Address = $_POST['Teacher_Address'];
            $Teacher_Salary = $_POST['Teacher_Salary'];

            $sql = "UPDATE Teacher SET Teacher_FName = '$Teacher_FName', Teacher_LName = '$Teacher_LName', Teacher_DOB = '$Teacher_DOB', Teacher_Address = '$Teacher_Address', Teacher_Salary = '$Teacher_Salary' WHERE TeacherID = $TeacherID";
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