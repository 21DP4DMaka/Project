<?php
// Retrieve the user ID from the form submission
$brandId = $_POST['brandId'];

// Check if a file was uploaded
if ($_FILES['photo']['brand']) {
  // File upload configuration
  $targetDir = "photos/";
  $fileName = basename($_FILES['photo']['brand']);
  $targetFilePath = $targetDir . $fileName;
  $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

  if ($_FILES['photo']['error'] !== UPLOAD_ERR_OK) {
    echo "Upload error: " . $_FILES['photo']['error'];
    exit;
}

  // Allow only specific file types (e.g., JPEG, PNG)
  $allowedTypes = array('jpg', 'jpeg', 'png');
  if (in_array($fileType, $allowedTypes)) {
    // Upload the file to the server
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetFilePath)) {
      // File uploaded successfully, update the user's profile picture in the database
      require_once "db_connect.php";
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      // Update the user's profile picture filename in the database
      $sql = "UPDATE cars SET photo = '$fileName' WHERE id = $brandId";
      if ($conn->query($sql) === TRUE) {
        header("Location: profile.php");
        // // Profile picture updated successfully
        // echo "Profile picture uploaded successfully";
      } else {
        echo "Error updating picture: " . $conn->error;
      }

      $conn->close();
    } else {
      echo "Error uploading file";
    }
  } else {
    echo "Invalid file type. Only JPG, JPEG, and PNG files are allowed.";
  }
} else {
  echo "No file selected";
}
?>
