<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .navbar {
            background-color: transparent;
            height: 80px;
        }

        .nav {
            width: 100%;
            height: 100%;
        }

        .logo a {
            text-decoration: none;
            color: white;
            font-weight: 500;
            padding-left: 20px;
            font-size: 30px;
        }

        .items {
            width: 100%;
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .end-items {
            display: flex;
            justify-content: space-between;
            gap: 50px;
        }

        .end-items a {
            padding-top: 15px;
            text-decoration: none;
            color: white;
            margin-right: 20px;
        }

        .end-items button {
            margin-top: 15px;
            border-radius: 15px;
            background-color: black;
            color: white;
            width: 100px;
            height: 30px;
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="nav">
            <div class="items">
                <div class="logo"><a href="admin.php">MegTour-Spot</a></div>
                <div class="end-items">
                    <a href="all_places_admin.php">Check Added Places</a>
                    <a href="signin.php">Log out</a>
                </div>
            </div>
        </div>
    </nav>
</body>

</html>