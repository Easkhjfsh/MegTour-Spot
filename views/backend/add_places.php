<?php
// Include the connection file
include("/Wamp/www/MeghTour/MegTour-Spot/backend/connection.php");

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $place_name = $_POST['place_name'];
    $place_description = $_POST['place_description'];
    $imageNames = [];
    $uploadDir = '/Wamp/www/MeghTour/MegTour-Spot/views/assets/touring_places/';

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    if (!empty($_FILES['place_images']['name'][0])) {
        foreach ($_FILES['place_images']['tmp_name'] as $key => $tmpName) {
            $fileName = basename($_FILES['place_images']['name'][$key]);
            $targetFilePath = $uploadDir . $fileName;

            // Move the file to the upload directory
            if (move_uploaded_file($tmpName, $targetFilePath)) {
                $imageNames[] = $fileName; // Add image name to the array
            }
        }
    }

    $imageNamesJson = json_encode($imageNames);

    // Prepare and execute the SQL statement to insert data into the touring_places table
    $sql = "INSERT INTO touring_places (place_name, place_description, place_images) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $place_name, $place_description, $imageNamesJson);

    // Check if the query executed successfully
    if ($stmt->execute()) {
        // Retrieve the last inserted place_id
        $place_id = $conn->insert_id;

        // Retrieve other form data
        $hotel_name = $_POST['hotel_name'];
        $hotel_ph = $_POST['hotel_no'];
        $tour_guide = $_POST['guide_name'];
        $tour_guide_no = $_POST['guide_no'];
        $driver_name = $_POST['driver_name'];
        $driver_no = $_POST['driver_no'];

        // Prepare the SQL statement to insert data into the hotels table
        $sql1 = "INSERT INTO hotels (hotel_name, tour_guide, driver_name, hotel_ph, tour_guide_no, driver_no, place_id) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt1 = $conn->prepare($sql1);
        $stmt1->bind_param("ssssssi", $hotel_name, $tour_guide, $driver_name, $hotel_ph, $tour_guide_no, $driver_no, $place_id);

        // Execute the statement to insert data into the hotels table
        if ($stmt1->execute()) {
            // If data inserted successfully, display an alert dialog and redirect
            echo '<script>alert("Successfully uploaded"); window.location = "../admin.php"</script> ';
        } else {
            // Handle errors for inserting data into the hotels table
            echo "Error: " . $sql1 . "<br>" . $conn->error;
        }

        // Close the hotels statement
        $stmt1->close();
    } else {
        // Handle errors for inserting data into the touring_places table
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the touring_places statement and connection
    $stmt->close();
    $conn->close();
} else {
    // If form is not submitted, you can redirect the user or display an error message
    // For example:
    header("Location: ../index.html"); // Redirecting back to the form page
    exit(); // Ensure no further code is executed
}
?>
