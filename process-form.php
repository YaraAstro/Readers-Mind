<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query Result | Readers' Mind</title>
    <link rel="icon" href="logo.png">
    <link rel="stylesheet" href="process-style.css">
</head>
<body>
<?php
		$conn = mysqli_connect("localhost", "root", "", "bookself");
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
            echo"Connection Failed :(";
		} else {
            echo"Server connected Sucessfully !\n";
        }
		
        $bookID = $_REQUEST['bookID'];
		$name = $_REQUEST['name'];
		$author = $_REQUEST['author'];
		$genre = $_REQUEST['genre'];
		$publishdate = $_REQUEST['publishdate'];
		$summary = $_REQUEST['summary'];
        $sendemail = $_REQUEST['sendemail'];

		$sql = "INSERT INTO bookself VALUES ('$bookID',
        '$name','$author','$genre','$publishdate','$summary','$sendemail')";
    
        if(mysqli_query($conn, $sql)){
            echo "<h3>New book added successfuly !</h3>";
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        
        mysqli_close($conn);
    ?>

    <!--bottum-->
    <div class="botm">
        <p class="qt">A Room without Book is like Body without Soul..</p>
        <div class="btmtbl">
            <p>Yara'</p>
            <p>@2022</p>
        </div>
    </div>
</body>
</html>