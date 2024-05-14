<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/home.css">
    <title>Megtour-Spot</title>
</head>

<body>
    <div class="first-container">
        <?php
        include("/Wamp/www/MeghTour/MegTour-Spot/components/navbar.php")
        ?>
        <img src="assets/images/frontimg.jpg" alt="Example Image">
        <h1 class="text">Best Place in Meghalaya to Travel</h1>
        <div class="search-with-button">
            <input type="text" placeholder="Explore Destination">
            <button>Search</button>
        </div>
        <h2 class="secondtext">Best Place for Tourist to Travel</h2>
    </div>
    <div class="second-container">
        <h2>Trending in Meghalaya</h2>
        <div class="flex-text">
            <a href="#">All</a>
            <a href="#">Latest</a>
            <a href="#">Most Visited</a>
        </div>
        <div class="flex-containers">
            <div class="single-item-container">
                <img src="assets/images/frontimg.jpg" alt="Example Image">
            </div>
        </div>
        <div class="flex-containers">
        <div class="single-item-small-container">
                <img src="assets/images/frontimg.jpg" alt="Example Image">
            </div>
        </div>
    </div>
</body>

</html>