<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/single.css">
</head>

<body>
    <div class="first-container">
        <?php
        include("/Wamp/www/MeghTour/MegTour-Spot/backend/connection.php");
        include("/Wamp/www/MeghTour/MegTour-Spot/components/navbar.php");
        if (isset($_GET['id'])) {
            // Retrieve the value of 'id' parameter
            $place_id = $_GET['id'];
        } else {
            // If 'id' parameter is not set
            echo "No place ID provided.";
        }
        $img_url = "assets/touring_places/";
        $sql = "SELECT * FROM touring_places where place_id = $place_id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                $images = json_decode($row['place_images'], true);
                if (!empty($images)) {
                    $first_image = reset($images);
        ?>
                    <div class="place-head-details">
                        <div class="image-container">
                            <?php
                            echo "<img src='{$img_url}{$first_image}' alt='{$row['place_name']} Image'>";
                            ?>
                            <p class="place-name">
                                <?php echo "{$row['place_name']}"; ?>
                            </p>
                        </div>
                    </div>
                    <div class="all-place-details">
                        <div class="place-details">
                            <div class="place-desc">
                                <p>  <?php echo "{$row['place_name']}"; ?></p>
                                <justify>
                                    <?php echo "{$row['place_description']}."; ?>
                                </justify>
                                <div class="time">
                                    <p>Suggested Visiting Time: <?php echo "{$row['opening_time']}-{$row['closing_time']}"; ?></p>
                                </div>
                                <div class="button-book">
                                    <a href="#">Book Tour Guide</a>
                                </div>
                            </div>

                            <div class="place-img">
                                <?php
                                if (!empty($images)) {
                                    foreach ($images as $image) {
                                        echo "<img src='{$img_url}{$image}' alt='{$row['place_name']} Image'>";
                                    }
                                }
                                ?>
                            </div>
                        </div>

                    </div>
    </div>
<?php
                }
            }
        } else {
            echo "0 results";
        }
        include("/Wamp/www/MeghTour/MegTour-Spot/components/footer.php");

?>
</body>

</html>