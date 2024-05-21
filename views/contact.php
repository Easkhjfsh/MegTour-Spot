<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Contact Page</title>
    <link rel="stylesheet" href="css/contact.css">
</head>

<body>
    <div class="subBody">
        <?php
        include("/Wamp/www/MeghTour/MegTour-Spot/components/navbar.php");
        ?>
        <!-- Navigation content goes here -->
        </nav>
        <div class="containerHome">
            <div class="bg-image">
                <img src="bg-contact.jpg" alt="">
                <p>CONTACT US</p>
            </div>
            <p class="middle-text">Get in touch with us!</p>
            <div class="contacts">
                <div class="contact-items">
                    <!-- Phone contact item -->
                </div>
                <div class="border"></div>
                <div class="contact-items">
                    <!-- Address contact item -->
                </div>
                <div class="border"></div>
                <div class="contact-items">
                    <!-- Email contact item -->
                </div>
            </div>
            <div class="contact-form">
                <!-- Contact form goes here -->
            </div>
            <p class="middle-text">Connect with us</p>
            <div class="socials">
                <!-- Social icons go here -->
            </div>
            <div class="contact-map">
                <!-- Map component goes here -->
            </div>
        </div>
        <?php
        include("/Wamp/www/MeghTour/MegTour-Spot/components/footer.php");
        ?>
    </div>
</body>

</html>