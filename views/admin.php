<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css">
    <title>Add Places</title>
    <style>
        .image-names {
            margin-top: 10px;
            color: white;
        }
    </style>
</head>

<body>
    <div class="first-container">
        <?php
        include("/Wamp/www/MeghTour/MegTour-Spot/backend/connection.php");
        include("/Wamp/www/MeghTour/MegTour-Spot/components/navbarAdmin.php");
        ?>
        <div class="add-places">
            <div class="head-text">
                <p>Add Places</p>
            </div>
            <form action="backend/add_places.php" method="POST" enctype="multipart/form-data">
                <p>Place Name: </p>
                <input type="text" name="place_name" placeholder="Enter Place Name">

                <p>Place Description: </p>
                <textarea placeholder="Enter Description" name="place_description"></textarea>
                <div>
                    <label style="background-color: black; color:white;" for="files" class="btn">Select Images</label>
                    <input class="image-select" id="files" multiple accept="image/*" name="place_images[]" style="visibility:hidden;" type="file" onchange="displayImageNames()">
                    <div id="image-names" class="image-names"></div>
                </div>
                <hr>
                
                <div class="head-text">
                    <p>Add Hotel</p>
                </div>
                <p>Hotel Name: </p>
                <input type="text" name="hotel_name" placeholder="Enter Hotel Name">
                <p>Hotel Phone: </p>
                <input type="number" name="hotel_no" placeholder="Enter Hotel Phone Number">

                <div class="head-text">
                    <p>Add Tour Guide</p>
                </div>
                <p>Guide Name: </p>
                <input type="text" name="guide_name" placeholder="Enter Guide Name">
                <p>Guide Phone: </p>
                <input type="number" name="guide_no" placeholder="Enter Guide Phone Number">

                <div class="head-text">
                    <p>Add Transport</p>
                </div>
                <p>Driver Name: </p>
                <input type="text" name="driver_name" placeholder="Enter Driver Name">

                <p>Driver Phone: </p>
                <input type="number" name="driver_no" placeholder="Enter Driver Phone Number">
                <div class="center-button">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function displayImageNames() {
            const input = document.getElementById('files');
            const imageNamesDiv = document.getElementById('image-names');
            const fileNames = Array.from(input.files).map(file => file.name);
            imageNamesDiv.textContent = fileNames.join(', ');
        }
    </script>
</body>

</html>
