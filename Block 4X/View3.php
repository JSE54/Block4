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

    <?php


    $link = mysqli_connect("localhost", "root", "", "rishton academy");
    // Check connection
    if ($link === false) {
        die("Connection failed: ");
    }
    ?>

    <br>

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
			/* 	function fetches a result row as an associative array.
              Note: Fieldnames returned from 
			  this function are case-sensitive.
			*/	
			$sql = mysqli_query($link, "SELECT * FROM Teacher");
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
			?>

    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>