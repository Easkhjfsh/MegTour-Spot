<?php
// Include the connection file
include("/Wamp/www/MeghTour/MegTour-Spot/backend/connection.php");

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $place_name = $_POST['place_name'];
    $place_description = $_POST['place_description'];

    // Prepare and execute the SQL statement to insert data into the table
    $sql = "INSERT INTO touring_places (place_name, place_description) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $place_name, $place_description);

    // Check if the query executed successfully
    if ($stmt->execute()) {
        // If data inserted successfully, display an alert dialog
        echo '<script>alert("Successfully uploaded");</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    // If form is not submitted, you can redirect the user or display an error message
    // For example:
    header("Location: ../index.html"); // Redirecting back to the form page
    exit(); // Ensure no further code is executed
}
?>
