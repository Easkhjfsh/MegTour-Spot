<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/all.css">
</head>

<body>
    <div class="first-container">
        <?php
        include("/Wamp/www/MeghTour/MegTour-Spot/backend/connection.php");
        include("/Wamp/www/MeghTour/MegTour-Spot/components/navbar.php");
        ?>
        <div class="all-place">
            
                <?php
                // Query to fetch place_name and place_image from tourist_places table
                $query = "SELECT place_id, place_name, place_images FROM touring_places";
                $result = mysqli_query($conn, $query);
                $img_url = "assets/touring_places/";
                // Check if query was successful
                if ($result) {
                    // Loop through each row in the result set
                    while ($row = mysqli_fetch_assoc($result)) {
                        $images = json_decode($row['place_images'], true);
                        if (!empty($images)) {
                            $first_image = reset($images);
                            // Output HTML for each place
                            echo '<div class="single-place"><div class="place">';
                            echo '<h3>' . $row['place_name'] . '</h3>';
                            echo "<img src='{$img_url}{$first_image}' alt=''>";
                            echo "<a href='single_place.php?id={$row['place_id']}'>Check</a>";
                            echo '</div></div>';
                        }
                    }
                } else {
                    // Display an error message if the query fails
                    echo "Error fetching data from database: " . mysqli_error($conn);
                }
                ?>
        </div>
    </div>
    <?php
    include("/Wamp/www/MeghTour/MegTour-Spot/components/footer.php");
    ?>
</body>

</html>