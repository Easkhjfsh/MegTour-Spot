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
        <div class="block">
            <form action="backend/register_process.php" method="POST">
                <h2>Register</h2>
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" value="Register"><br>
                <a href="signin.php">Already a user? Log In</a>
            </form>
        </div>
    </div>

</body>

</html>