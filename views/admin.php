<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css">
    <title>Document</title>
</head>

<body>
    <div class="first-container">
        <?php
        include("/Wamp/www/MeghTour/MegTour-Spot/backend/connection.php");
        include("/Wamp/www/MeghTour/MegTour-Spot/components/navbar.php");
        ?>
        <div class="add-places">
            <form action="backend/add_places.php" method="POST">
                <div class="flex-order">
                    <p>Place Name: </p>
                    <input type="text" name="place_name" placeholder="Enter Place Name">
                </div>
                <div class="flex-order">
                    <p>Place Description: </p>
                    <textarea name="place_description"></textarea>
                </div>
                <div class="flex-order">
                    <p>Place Images: </p>
                    <input type="file" name="place_images[]" multiple accept="image/*">
                </div>
                <div class="flex-order">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>