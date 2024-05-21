<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .footer {
            background-color: #323232;
            color: #fff;
            font-weight: 400;
            font-size: 16px;
            padding-top: 40px;
            padding-bottom: 15px;
            padding-left: 20px;
            padding-right: 30px;
        }

        .footer-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
        }

        .footer-links {
            margin-top: -120px;
        }

        .footer-links a {
            margin-right: 30px;
            color: #fff;
            text-decoration: none;
        }

        .footer-links a:hover {
            transform: scale(1.05);
            /* Increase size on hover */
            color: rgb(102, 102, 102);
        }

        .footer-contact {
            margin-top: -20px;
        }

        .footer-contact p {
            margin-left: 0px;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 30px;
        }

        .custom-navbar {
            display: flex;
            align-items: center;
            background-color: transparent;
            padding: 20px 55px;
            /* Adjust padding */
        }
    </style>
</head>

<body>
    <div class='footer'>
        <div class='footer-container'>
            <div class='footer-links'>
                <a href='#'>Home</a>
                <a href='#'>About Us</a>
                <a href='#'>Services</a>
                <a href='#'>Contact</a>
            </div>
            <div class='footer-contact'>
                <p>Contact Us: 987654321</p>
                <p>Email: meghtour@sphere.com</p>
                <p>Phone: +1234567890</p>
            </div>
        </div>
        <div class='footer-bottom'>
            <p>&copy; <?php echo date("Y"); ?> MeghTour. All rights reserved.</p>
        </div>
    </div>

</body>

</html>