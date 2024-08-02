<?php

$username = "root";
$password = "thushan2001";
$host = "localhost";
$database = "kln_project";

// create a connection with localdatabase 

$connection = mysqli_connect($host,$username,$password,$database);

if (!$connection){
    die("error : ". mysqli_connect_error());
}

/*echo "connected";

$sql = "SHOW DATABASES";

$result = $connection->query($sql);

if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()) {
        echo $row["Database"]."<br/>";
    }
}

$connection->close();
*/
?>