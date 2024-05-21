<?php
// Include the connection file
include("/Wamp/www/MeghTour/MegTour-Spot/backend/connection.php");

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare SQL statement to fetch user by username
    $sql = "SELECT * FROM user WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows === 1) {
        // Fetch the user row
        $user = $result->fetch_assoc();
        
        // Verify password
        if (password_verify($password, $user['password'])) {
            // Password is correct, redirect to admin page or home page
            if ($user['username'] == "admin") {
                // Redirect to admin page
                header("Location: ../admin.php");
                exit();
            } else {
                // Redirect to home page
                header("Location: ../home.php");
                exit();
            }
        } else {
            // Password is incorrect, redirect to login page with error message
            header("Location: ../signin.php?error=incorrect_password");
            exit();
        }
    } else {
        // User not found, redirect to login page with error message
        header("Location: signin.php?error=user_not_found");
        exit();
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    // If form is not submitted, redirect to login page
    header("Location: signin.php");
    exit();
}
?>
