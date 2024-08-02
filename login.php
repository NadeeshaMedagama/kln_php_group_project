
<?php

require_once './connection.php';
$username="";
$password;

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($username) && !empty($password)){
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)> 0){
            echo "<script> alert('Login sucessfull')</script>";
        }
    }
}

$connection->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/login.css">
</head>
<body>
    <div>
        <h1>Social Network</h1>
    </div>
    <div class="container">
        <form action="login.php" method="post">
            <input type="text" name="username" id="username"  placeholder="Username" required/><br><br>

            <input type="password" name="password" id="password"  placeholder="Password" required/><br><br>

            <button id="submit-btn" type="submit">Login</button><br><br>

            <a href="register.php" id="link">Create a new account</a>
        </form>
    </div>
    
</body>
</html>