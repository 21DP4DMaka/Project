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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
<style>
        /* Reset some default styles */
        body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      background-image: url('pngegg(2).png'); /* Укажите путь к вашей картинке */
      background-size: cover;
      background-position: center;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      color: #000;
      margin: 0;
    }

    header {
      background-color: #333;
      color: #fff;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 20px;
    }

    .logo img {
      height: 100px;
    }

    nav ul {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      justify-content: center;
    }

    nav ul li {
      display: inline;
      margin-right: 20px;
    }

    nav a {
      text-decoration: none;
      color: #fff;
      font-weight: bold;
      font-size: 18px;
    }

    .main-page {
      margin-right: center;
      margin-left: center;
    }

    main {
      text-align: center;
      padding: 50px;
      flex-grow: 1;
    }

    h1 {
      font-size: 36px;
      color: #333;
      margin-bottom: 20px;
    }

    .content {
      background-color: #f9f9f9;
      padding: 40px;
      border-radius: 15px;
      color: #000;
      margin-bottom: 30px;
    }

    .comment-section {
      margin-top: 20px;
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }

    .comment-form {
      margin-bottom: 20px;
    }

    .comment-form textarea {
      width: 100%;
      max-width: 500px;
      height: 50px;
    }

    .comment-form button {
      padding: 5px 10px;
      background-color: #333;
      color: #fff;
      border: none;
      cursor: pointer;
    }

    .comment-list {
      width: 100%;
      max-width: 500px;
      margin-left: 20px;
    }

    .comment {
      background-color: #f9f9f9;
      border: 1px solid #ddd;
      border-radius: 5px;
      margin-bottom: 10px;
      text-align: left;
      width: 100%;
    }

    .comment-content {
      display: flex;
      align-items: center;
    }

    .comment-avatar {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      margin-right: 10px;
    }

    .comment-text {
      flex-grow: 1;
    }

    footer {
      background-color: #333;
      color: white;
      padding: 20px 0;
    }

    .footer-container {
      display: flex;
      justify-content: space-around;
      max-width: 1200px;
      margin: 0 auto;
    }

    .footer-column {
      flex: 1;
      padding: 0 20px;
    }

    .footer-column h3 {
      margin-bottom: 10px;
    }

    .footer-column ul {
      list-style: none;
      padding: 0;
    }

    .footer-column ul li {
      margin-bottom: 5px;
    }

    .footer-column ul li a {
      color: white;
      text-decoration: none;
    }

    .footer-column ul li a:hover {
      text-decoration: underline;
    }

    /* Анимация подчеркивания при наведении */
    nav ul li a {
      position: relative;
    }

    nav ul li a::after {
      content: '';
      position: absolute;
      bottom: -3px;
      left: 0;
      width: 0;
      height: 2px;
      background-color: white;
      transition: width 0.3s ease;
    }

    nav ul li a:hover::after {
      width: 100%;
    }
    .profile-button {
      background-color: #333;
      color: #fff;
      border: none;
      padding: 10px 20px;
      font-size: 18px;
      font-weight: bold;
      cursor: pointer;
      text-decoration: none;
      position: relative;
      margin-top: 10px;
    }

    .profile-button::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      display: block;
      margin-top: 5px;
      right: 0;
      background: #fff;
      transition: width 0.4s ease;
      -webkit-transition: width 0.4s ease;
    }

    .profile-button:hover::after {
      width: 100%;
      left: 0;
      background: #fff;
    }
    </style>
<html>
<header>
        <div class="logo">
          <a href="index.php"><img src="LOGO-removebg-preview(2).png" alt="BMW Logo"></a>
        </div>
        <nav>
        <ul>
        <li><a href="feedback.php">Feedback</a></li>
        <li class="main-page"><a href="main.php">Main page</a></li>
        <li><a href="main.php">Start page</a></li>
      </ul>
        </nav>
        <a href="logout.php" class="profile-button">Iziet</a>
      </header>
<body> 
  <div style="position:relative;" class="container">
<center>
    <h1>Hi!, <?php echo $currentUsername; ?> !</h1>

   
   <h1>Add your car to the encyclopedia:</h1>
   <form action="addcar.php" method="POST">
   <select id="brandSelect" name="brand" required onchange="toggleOtherBrand()">
  <option value="">Выберите марку</option>
  <option value="BMW">BMW</option>
  <option value="Volkswagen">Volkswagen</option>
  <option value="Mercedes-Benz">Mercedes-Benz</option>
  <option value="Другое"></option>
</select>
<input type="text" id="otherBrandInput" name="otherBrand" style="display: none;" placeholder="Введите марку"><br>


  <!-- Добавьте другие марки по мере необходимости -->
</select><br>
  <input type="text" name="model" placeholder="Modelis" required><br>
  <input type="int" name="year" placeholder="Izlaiduma gads" required maxlength="4"><br>
  <select name="fueltype" required>
  <option value="Benzīns">Benzīns</option>
  <option value="Dīzelis">Dīzelis</option>
</select><br>
<input type="text" name="engine" placeholder="Dzinēja tilpums" required maxlength="4"><br>
  <select name="gearbox" required>
  <option value="Manuālā">Manuālā</option>
  <option value="Automātiskā">Automātiskā</option>
</select><br>
  <input type="text" name="cartype" placeholder="Auto tips" required><br>
  <form action="carphoto.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="brandId" value="<?php echo $brandId; ?>">
      <input type="file" name="photo">
      <input type="submit" value="Pievienot">
    </form>
  <!-- <input type="image" name="photo" placeholder="Bilde"><br> -->
  <!-- <input type="submit" value="Pievienot"> -->
</form></center>
</div>

<script>
function toggleOtherBrand() {
  var brandSelect = document.getElementById("brandSelect");
  var otherBrandInput = document.getElementById("otherBrandInput");

  if (brandSelect.value === "Другое") {
    otherBrandInput.style.display = "inline-block";
    otherBrandInput.required = true;
  } else {
    otherBrandInput.style.display = "none";
    otherBrandInput.required = false;
  }
}
</script>

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
      <td id="carlist" style="background-color: #111; border-radius: 15px; padding: 10px; color: #fff;">
        <!-- showing cars -->
          <?php if ($row['photo']) { ?>
            <img style="position:relative; width: 400px; height: 200px;  border-radius: 10px;" src="photos/<?php echo $row['photo']; ?>" alt="photo">
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
<footer>
            <div class="footer-container">
              <div class="footer-column">
                <h3>Contact Us</h3>
                <ul>
                  <li><a href="#">danila.makarov1905@gmail.com</a></li>
                  <li><a href="#">+3712321323</a></li>
                </ul>
              </div>
              <div class="footer-column">
                <h3>Another Cars</h3>
                <ul>
                  <li><a href="volkswagen.php">Volkswagen</a></li>
                  <li><a href="mercedes.php">Mercedes-Benz</a></li>
                  <li><a href="bmw.php">BMW</a></li>
                </ul>
              </div>
              <div class="footer-column">
                <h3>Follow Us</h3>
                <ul>
                  <li><a href="#">Facebook</a></li>
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">Instagram</a></li>
                </ul>
              </div>
            </div>
          </footer>
</html>