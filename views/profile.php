<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Profile Page</title>
    <link rel="stylesheet" href="css/profile.css">
</head>

<body>
    <div class="sub-body">
        <?php
        include("/Wamp/www/MeghTour/MegTour-Spot/components/navbar.php");
        ?>
        <div class="container-home">
            <div class="profile-default-img">
                <img src="bg1.png" alt="">
            </div>
            <p class="profile-text">Profile</p>
            <div class="user-info">
                <img src="bg2.png" alt="">
                <p>Nahath</p>
                <button class="user-info-button">Upload Template</button>
            </div>
            <hr class="profile-line">
            <div class="edit-profile_user-content">
                <div class="edit-profile">
                    <p>User Profile</p>
                    <a href="/edit-profile"><button>Edit Profile</button></a>
                    <button>Add Interest</button>
                </div>
                <div class="user-content">
                    <p>User Posts</p>
                    <div class="user-templates-info">
                        <div class="center-text">
                            <h2>Upload your First Template!</h2>
                        </div>
                        <a href="/user-posts"><button class="center-button">Load more</button></a>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <!-- Footer content goes here -->
        </footer>
        <div class="modal-overlay">
            <div class="modal-content">
                <span class="close-button">&times;</span>
                <!-- CardWithForm component content goes here -->
            </div>
        </div>
        <?php
        include("/Wamp/www/MeghTour/MegTour-Spot/components/footer.php");
        ?>
    </div>

</body>

</html>