<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/home.css">
    <style>
        body {
            background-color: black;
            padding-left: 8vh;
            padding-right: 8vh;
        }

        .first-container {
            margin-top: -10px;
            height: 100vh;
            padding-top: 10vh;
            background-color: #28292B;
        }

        .first-container img {
            height: 90vh;
            width: 100%;
            z-index: -1;
        }

        .search-with-button input {
            margin-left: 250px;
            color: white;
            width: 100vh;
            height: 40px;
            margin-bottom: 30px;
            margin-top: 50px;
            border-radius: 10px;
            background-color: #343434;
        }

        .search-with-button {
            display: flex;
        }

        .search-with-button button {
            background-color: #000000;
            color: white;
            height: 40px;
            margin-bottom: 30px;
            margin-top: 50px;
            width: 100px;
            border-radius: 10px;
        }


        .text {
            z-index: 1;
            font-size: 50px;
            color: white;
            margin-top: -50vh;
            text-align: center;
        }

        .secondtext {
            z-index: -1;
            font-size: 28px;
            color: white;
            margin-bottom: -5vh;
            text-align: center;
        }

        .second-image {
            width: 96%;
            height: auto;
            margin: 0 auto;
            border: 2px solid white;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .second-image img {
            width: 220px;
            height: 180px;
            border: 2px solid white;
        }

        h2 {
            text-align: center;
            font-size: 35px;
            color: white;
            padding: 20px;

        }

        .second-img {
            width: 220px;
            height: 180px;
            border: 2px solid white;
        }

        .navbar {
            background-color: grey;
            padding: 10px 20px;
        }

        /* Styling the logo */
        .logo a {
            color: #fff;
            font-size: 24px;
            /* Font size */
            font-weight: bold;
            /* Font weight */
            text-decoration: none;
            /* Remove underline */
        }

        /* Styling the navigation links */
        .nav li {
            display: inline;
            /* Display inline */
            margin-right: 20px;
            /* Margin between links */
        }

        .nav li a {
            color: #fff;
            /* Text color */
            text-decoration: none;
            /* Remove underline */
        }

        .nav li a:hover {
            color: #ddd;
            /* Text color on hover */
        }
    </style>
    <title>Megtour-Spot</title>
</head>

<body>
    <div class="first-container">
        <div>
            <?php
            $imageFilename = 'frontimg.jpg';
            ?>
            <img src="<?php echo $imageFilename; ?>" alt="Example Image">
            <h1 class="text">Best Place in Meghalaya to Travel</h1>
            <div class="search-with-button">
                <input type="text" placeholder="Explore Destination">
                <button>Search</button>
            </div>
            <h2 class="secondtext">Best Place for Tourism to Travel</h2>
        </div>
    </div>
    <div class="second-container">
        <h2>Trending in Meghalaya</h2>
        <div class="second-image">
        </div>
    </div>




</body>

</html>