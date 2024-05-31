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
    <form action="applies.php">
        <input type="submit" value="Pieteikumi" style="position:absolute; right:0px;"></a>
        </form>
   
   <h1>Pievienot automobīli enciklopēdijai:</h1>
   <form action="addcar.php" method="POST">
  <input type="text" name="brand" placeholder="Marka" required><br>
  <input type="text" name="model" placeholder="Modelis" required><br>
  <input type="int" name="year" placeholder="Izlaiduma gads" required><br>
  <input type="text" name="fueltype" placeholder="Degviela" required><br>
  <input type="text" name="engine" placeholder="Dzinēja tilpums" required><br>
  <input type="text" name="gearbox" placeholder="Atrumkarba" required><br>
  <input type="text" name="cartype" placeholder="Auto tips" required><br>
  <form action="carphoto.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="brandId" value="<?php echo $brandId; ?>">
      <input type="file" name="photo">
      <input type="submit" value="Pievienot">
    </form>
  <!-- <input type="image" name="photo" placeholder="Bilde"><br> -->
  <!-- <input type="submit" value="Pievienot"> -->
</form>
  <a href="logout.php" class="logout-link">Iziet</a></center>
</div>

<div class="form-container"  id="section-1">
        <form action="sendapply.php" method="post">

            <label for="subject" class="form-label">Jūsu komentārs:</label>
            <input type="text" name="text" class="form-input" required>

            <input type="submit" value="Nosūtīt" class="form-submit">
        </form>
    </div>

<table id="tableofcar">
<?php
  require_once "db_connect.php";


  // deleting
  if (isset($_POST['delete_id'])) {
    // Get the record ID from the POST request
    $delete_id = $_POST['delete_id'];

    // Create and execute the DELETE query
    $delete_sql = "DELETE FROM cars WHERE id = ?";
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

  $sql = "SELECT * FROM cars";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $count = 0; // Initialize a count variable to track the number of items displayed

    while ($row = $result->fetch_assoc()) {
      if ($count % 4 === 0) {
        // Start a new row every 5 items
        echo '<tr>';
      }
      ?>
      <td id="carlist">
        <!-- showing cars -->
          <?php if ($row['photo']) { ?>
            <img style="position:relative; width: 200px; height: 200px;  border-radius: 10px;" src="photos/<?php echo $row['photo']; ?>" alt="photo">
          <?php } ?>
          <!-- <div id="carlistmini"> -->
          <p>
          <img src="https://lizingsauto.lv/wp-content/themes/blank/img/icons/year.png"> &nbsp<?php echo $row['year']; ?>g.
          <img src="https://lizingsauto.lv/wp-content/themes/blank/img/icons/volume.png"> &nbsp <?php echo $row['engine']; ?>L <br>
          <img src="https://lizingsauto.lv/wp-content/themes/blank/img/icons/fuel.png">&nbsp <?php echo $row['fueltype']; ?>
          <img src="https://lizingsauto.lv/wp-content/themes/blank/img/icons/gearbox.png"> &nbsp <?php echo $row['gearbox']; ?>
          <img src="https://lizingsauto.lv/wp-content/themes/blank/img/icons/hood.png"> &nbsp <?php echo $row['cartype']; ?>
         <br> &nbsp <?php echo $row['brand']; ?> <?php echo $row['model']; ?>
          <!-- </div> -->
          <?php 
              echo '<form method="post">';
              echo '<input type="hidden" name="delete_id" value="' . $row['id'] . '">';
              echo '<input type="submit" value="Noņemt">';
              echo '</form>';
              ?>
      </td>
      <?php
      $count++;

      if ($count % 4 === 0) {
        // End the current row after displaying 5 items
        echo '</tr>';
      }
    }

    // Close the last row if it's not complete
    if ($count % 4 !== 0) {
      echo '</tr>';
    }
  } else {
    echo "Nav automobīļu";
  }

  $conn->close();
  ?>

</table>
</body>
</html>
