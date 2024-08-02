<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script/register.js"></script>
    <link rel="stylesheet" href="style/register.css">
</head>
<body>
    <div>
        <h1>Flowers</h1>
    </div>
        <div class="container">
            <form action="login.php" method="post">

                <input type="text" name="username" id="username"  placeholder="Username" required/><br><br>

                <input type="email" name="email" id="email"  placeholder="Email" required/><br><br>

                <input type="number" name="mobile" id="mobile"  placeholder="Mobile" required/><br><br>

                <input type="password" name="password" id="password"  placeholder="Password" required/><br><br>

                <input type="password" name="re-password" id="password"  placeholder="Re-Enter Password" required/><br><br>

                <label for="Male">
                    <input type="radio" id="Male" name="gender" value="male"/>Male
                </label>

                <label for="Female">
                    <input type="radio" id="Male" name="gender" value="female"/>Female
                </label>
                

                <button id="submit-btn" type="submit">Sign up</button><br><br>

                
            </form>
        </div>
    
</body>
</html>