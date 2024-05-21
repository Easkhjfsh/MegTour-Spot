<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sign.css">
    <title>Document</title>
</head>

<body>
    <div class="first-container">
        <?php
        include("/Wamp/www/MeghTour/MegTour-Spot/backend/connection.php");
        ?>
        <h2>Login</h2>
        <div class="block">
            <form action="backend/login_process.php" method="POST">
                <input type="text" name="username" placeholder="Username" required><br>
                <input type="password" name="password" placeholder="Password" required><br>
                <input type="submit" value="Login"><br>
                <div class="signup">
                    <a href="signup.php">Click here to create an account.</a>
                </div>
            </form>
        </div>

    </div>
</body>

</html>