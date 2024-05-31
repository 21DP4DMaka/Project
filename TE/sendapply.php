<?php
require_once "db_connect.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $text = $_POST["text"];

  $text = mysqli_real_escape_string($conn, $text);

  $sql = "INSERT INTO comments (text) VALUES ('$text')";
  if ($conn->query($sql) === TRUE) {
    header("Location: profile.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

?>