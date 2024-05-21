<?php
// Include the connection file
include("/Wamp/www/MeghTour/MegTour-Spot/backend/connection.php");

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // You should perform validation and sanitation of the input here

    // Example: Save user to database (You should use prepared statements for security)
    // Replace this with your database logic
    $sql = "INSERT INTO user (username, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    
    // Hash the password (you should use a secure hashing algorithm like bcrypt)
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Bind parameters and execute the statement
    $stmt->bind_param("ss", $username, $hashed_password);
    if ($stmt->execute()) {
        // Data inserted successfully, redirect to login page
        header("Location: ../signin.php");
        exit();
    } else {
        // Error occurred, handle it accordingly (e.g., display an error message)
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    // If form is not submitted, redirect to register page
    header("Location: ../signup.php");
    exit();
}
?>
