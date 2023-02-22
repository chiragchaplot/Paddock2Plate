<?php
// Database connection details
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create database connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get cow ID from form data
$cow_id = $_POST['cow_id'];

// Get cow weight from form data
$cow_weight = $_POST['cow_weight'];

// Get image file details
$image_name = $_FILES['cow_image']['name'];
$image_tmp_name = $_FILES['cow_image']['tmp_name'];
$image_size = $_FILES['cow_image']['size'];
$image_error = $_FILES['cow_image']['error'];

// Check if image is uploaded successfully
if ($image_error === 0) {
    // Create folder to store images (if it doesn't exist)
    $folder = "images/";
    if (!is_dir($folder)) {
        mkdir($folder);
    }

    // Save image to folder with unique name
    $image_extension = pathinfo($image_name, PATHINFO_EXTENSION);
    $image_new_name = $cow_id . '.' . $image_extension;
    $image_path = $folder . $image_new_name;
    move_uploaded_file($image_tmp_name, $image_path);
    
    // Update data in cowWeight table
    $sql = "UPDATE cowWeight SET weight='$cow_weight' WHERE id='$cow_id'";
    mysqli_query($conn, $sql);

    // Update data in cowImage table
    $sql = "UPDATE cowImage SET imageName='$image_new_name' WHERE id='$cow_id'";
    mysqli_query($conn, $sql);
} else {
    echo "Error uploading image.";
}

// Close database connection
mysqli_close($conn);
?>
