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
        include("/Wamp/www/MeghTour/MegTour-Spot/backend/connection.php");
        include("/Wamp/www/MeghTour/MegTour-Spot/components/navbar.php");
        ?>
        <img src="assets/images/frontimg.jpg" alt="Example Image">
        <h1 class="text">Best Place in Meghalaya to Travel</h1>
        <div class="search-with-button">
            <input type="text" placeholder="Explore Destination">
            <button>Search</button>
        </div>
        <h2 class="secondtext">Best Place for Tourist to Travel</h2>
        <div class="flex-containers">
            <a href="all-places.php"><button class="black-button">Check out the places in Meghalaya</button></a>
            <!-- <button class="black-button">Button</button>
            <button class="black-button">Button</button>
            <button class="black-button">Button</button> -->
        </div>

    </div>
    <div class="second-container">
        <h2>Trending in Meghalaya</h2>
        <div class='flex-containers'>
            <?php
            $img_url = "assets/touring_places/";
            $sql = "SELECT * FROM touring_places LIMIT 4";
            $result = $conn->query($sql);

            // Check if the query returned any results
            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    // Decode JSON data to get array of image names
                    $images = json_decode($row['place_images'], true);

                    // Check if images array is not empty and get the first image
                    if (!empty($images)) {
                        $first_image = reset($images);
                        echo "<div class='single-item-container'>
                    <img src='{$img_url}{$first_image}' alt='{$row['place_name']} Image'>
                    <div class='card-text'>
                        <p>{$row['place_name']}</p>
                    </div>
                    <a href='single_place.php?id={$row['place_id']}' class='card-button'>Check</a>
                </div>";
                    }
                }
            } else {
                echo "0 results";
            }
            ?>

        </div>
        <h2>Top Destinations</h2>
        <div class="flex-containers">
            <?php
            $sql = "SELECT * FROM touring_places LIMIT 5";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    $images = json_decode($row['place_images'], true);
                    if (!empty($images)) {
                        $first_image = reset($images);
                        echo "<div class='single-item-small-container'> 
                            <img src='{$img_url}{$first_image}' alt='{$row['place_name']} Image'>
                            <div class='card-text-small'>
                            <p>{$row['place_name']}</p>
                        </div>
                            <a href='single_place.php?id={$row['place_id']}' class='card-button-small'>Check</a>
                            </div>";
                    }
                }
            } else {
                echo "0 results";
            }
            ?>

        </div>
    </div>
    <?php
    include("/Wamp/www/MeghTour/MegTour-Spot/components/footer.php");
    ?>
</body>

</html>