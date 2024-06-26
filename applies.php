<?php
session_start();
require_once "db_connect.php";

// Check if the user is logged in
if (!isset($_SESSION["username"])) {
  header("Location: index.php");
  exit;
}

$username = $_SESSION["username"];

// Fetch the user's information
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
  $row = $result->fetch_assoc();
  $userId = $row["id"];
  $currentUsername = $row["username"];
} else {
//  Redirect to signin page if user not found
  header("Location: index.php");
  exit;
}

if (!isset($_SESSION['username'])) {
    // User is not logged in, redirect to the signin page
    header("Location: index.php");
    exit();
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/cars.css">
</head>
<body> 
  <div style="position:relative;" class="container">
<center>
    <h1>Labdien, <?php echo $currentUsername; ?> !</h1>

    <form action="profile.php">
        <input type="submit" value="Atpakaļ uz profilu" style="position:absolute; right:0px;"></a>
        </form>

  <a href="logout.php" class="logout-link">Iziet</a></center>
</div>


<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<!--  -->
<table id="tableofcars">
<?php
  require_once "db_connect.php";

  // deleting
  if (isset($_POST['delete_id'])) {
    // Get the record ID from the POST request
    $delete_id = $_POST['delete_id'];

    // Create and execute the DELETE query
    $delete_sql = "DELETE FROM comments WHERE id = ?";
    $stmt = $conn->prepare($delete_sql);
    $stmt->bind_param("i", $delete_id);

    if ($stmt->execute()) {
        // Deletion successful
        echo " ";
    } else {
        // Deletion failed
        echo "Error deleting record: " . $stmt->error;
    }
}
  // deleting end

  $sql = "SELECT * FROM comments";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $count = 0; // Initialize a count variable to track the number of items displayed

    while ($row = $result->fetch_assoc()) {
      if ($count % 5 === 0) {
        // Start a new row every 5 items
        echo '<tr>';
      }
      ?>
      <td id="carlist">
        <!-- showing applies -->
        <h3><?php echo $row['text']; ?></h3>
          <?php 
              echo '<form method="post">';
              echo '<input type="hidden" name="delete_id" value="' . $row['id'] . '">';
              echo '<input type="submit" value="Noņemt">';
              echo '</form>';
              ?>
      </td>
      <?php
      $count++;

      if ($count % 3 === 0) {
        // End the current row after displaying 5 items
        echo '</tr>';
      }
    }

    // Close the last row if it's not complete
    if ($count % 3 !== 0) {
      echo '</tr>';
    }
  } else {
    echo "Nav pieteikumu";
  }

  $conn->close();
  ?>

</table>
</body>
</html>
