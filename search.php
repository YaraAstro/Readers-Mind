    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Result | Readers' Mind</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="search-style.css">
    <link rel="icon" href="logo.png">
    <?php

        #check the connection
        $connection = mysqli_connect('localhost', 'root', '', 'bookself');

        if(mysqli_connect_errno()){
            die('Database connection failed' . mysqli_connect_error());
        } else {
            echo 'Database connected successfully !';
        }
        
        $search='';

?>
</head>
<body>

    <!--search form-->
    <div class="frm02">
        <h2>Search about Books</h2>
        <form action="search.php" method="get" class="scnd-fm">
            <input type="text" name="query" id="srchbr" placeholder="Type the key word ..." <?php echo $search?>>
            <button type="submit" value="search" id="search" name="search"><span class="material-symbols-outlined">
search
</span></button>
        </form>
    </div>
    
    <div class="main">
        <table>
            <tr>
                <th>Book Name</th>
                <th>Author</th>
                <th>Category</th>
                <th>Description</th>
                <th>Sender's E-mail</th>
            </tr>
            <?php
            $row = '';

            $sql = "SELECT * FROM bookself ORDER BY name";
            $result = $connection->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["name"]. "</td><td>" . $row["author"] . "</td><td>"
                . $row["genre"]. "</td><td>" .$row["sammury"]. "</td><td>" .$row["sendemail"]. "</td></tr>";
                }
                echo "</table>";
            } else { 
                echo "0 results"; 
            }

            #search query

                if( isset ($_GET['search'])){
                    $search = mysqli_real_escape_string($connection, $_GET['search']);
                    $result = "SELECT * FROM bookself WHERE name LIKE %{$search}% OR author LIKE %{$search}% OR genre LIKE %{$search}% OR sammury LIKE %{$search}% OR sendemail LIKE %{$search}% AND is_deleted=0 ORDER BY name";
                } else {
                    $result = "SELECT * FROM bookself ORDER BY name";
                } 
             ?>
        </table>
    </div>
    
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
<?php mysqli_close($connection) ?>