<!DOCTYPE html>
<html>
<head>
  <title>TEncyclopedia</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/lizing.css">
  <link rel="stylesheet" type="text/css" href="css/bloki.css">
  <link rel="stylesheet" type="text/css" href="css/nav.css">
  <link rel="stylesheet" type="text/css" href="css/cars.css">
  <style>
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
      height: 150px;
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
      position: relative;
      text-decoration: none;
      color: #fff;
      font-weight: bold;
      font-size: 18px;
      padding: 5px 0;
    }

    nav a::after {
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

    nav a:hover::after {
      width: 100%;
      left: 0;
      background: #fff;
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
          text-align: center;
            font-size: 36px;
            color: #333;
            margin-bottom: 20px;
        }

        .product-grid {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .product {
            margin: 20px;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
            max-width: 270px;
        }

        .product img {
            max-width: 100%;
            max-height: 100%;
        }

        .product:hover {
            transform: scale(1.05);
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
    .search {
  margin-left: auto; /* Для размещения справа */
  display: flex;
  align-items: center;
}

/* Стили для кнопки поиска */
.search-button {
  background-color: #000; /* Серый цвет */
  color: #fff; /* Белый текст */
  border: none;
  padding: 8px 16px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 5px;
  transition: background-color 0.3s ease; /* Плавное изменение цвета фона при наведении */
}

.search-button:hover {
  background-color: #999; /* Цвет фона при наведении */
}
    
    </style>
</head>
<body>
      <header>
    <div class="logo">
      <a href="index.php"><img src="LOGO-removebg-preview(2).png" alt="TEncyclopedia Logo"></a>
    </div>
    
    <nav>
      <ul>
        <li><a href="feedback.php">Feedback</a></li>
        <li class="main-page"><a href="main.php">Main page</a></li>
        <li><a href="main.php">Start page</a></li>
      </ul>
    </nav>
    <a href="signin.php" class="profile-button">Tell us about your car</a>
    </form>
    <div class="search">
    <input type="text" id="searchInput" placeholder="Search cars...">
    <button onclick="searchCars()" class="search-button">Search</button>
  </header>
  <main>
    <h1>Your cars encyclopedia</h1>
    <div class="product-grid">
      <div class="product" id="product1" onclick="showProductInfo(1)">
        <img src="BMW_logo_(gray).svg.png" alt="BMW History">
      </div>
      <div class="product" id="product2" onclick="showProductInfo(2)">
        <img src="mer.png" alt="Mercedes-Benz">
      </div>
      <div class="product" id="product3" onclick="showProductInfo(3)">
        <img src="vk.png" alt="Volkswagen">
      </div>
    </div>
    <h1>Users published cars:</h1>
  </main>

  <script>
    function showProductInfo(productId) {
      switch (productId) {
        case 1:
          window.location.href = 'bmw.php';
          break;
        case 2:
          window.location.href = 'mercedes.php';
          break;
        case 3:
          window.location.href = 'volkswagen.php';
          break;
        default:
          alert('Product information not available.');
      }
    }
  </script>


<table id="tableofcar">
  <?php
    require_once "db_connect.php";

    $sql = "SELECT * FROM cars";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      $count = 0;

      while ($row = $result->fetch_assoc()) {
        if ($count % 4 === 0) {
          echo '<tr>';
        }
        ?>
        <td id="carlist" style="background-color: #000; border-radius: 15px; padding: 10px; color: #fff;">
          <?php if ($row['photo']) { ?>
            <img style="position:relative; width: 450px; height: 200px; border-radius: 10px;" src="photos/<?php echo $row['photo']; ?>" alt="photo">
          <?php } ?>
          <p>
            <img src="https://lizingsauto.lv/wp-content/themes/blank/img/icons/year.png"> &nbsp<?php echo $row['year']; ?>g.
            <img src="https://lizingsauto.lv/wp-content/themes/blank/img/icons/volume.png"> &nbsp <?php echo $row['engine']; ?> <br>
            <img src="https://lizingsauto.lv/wp-content/themes/blank/img/icons/fuel.png">&nbsp <?php echo $row['fueltype']; ?>
            <img src="https://lizingsauto.lv/wp-content/themes/blank/img/icons/gearbox.png"> &nbsp <?php echo $row['gearbox']; ?>
            <img src="https://lizingsauto.lv/wp-content/themes/blank/img/icons/hood.png"> &nbsp <?php echo $row['cartype']; ?>
            <br> &nbsp <?php echo $row['brand']; ?> <?php echo $row['model']; ?>
          </p>
        </td>
        <?php
        $count++;
        if ($count % 4 === 0) {
          echo '</tr>';
        }
      }

      if ($count % 4 !== 0) {
        echo '</tr>';
      }
    } else {
      echo "Nav automobīļu";
    }

    $conn->close();
  ?>
<script>
  function searchCars() {
    var searchText = document.getElementById("searchInput").value.toLowerCase();
    var carsContainer = document.querySelector('#tableofcar');
    var cars = document.querySelectorAll('#tableofcar td');

    // Сбрасываем видимость всех элементов перед началом поиска
    cars.forEach(function(car) {
      car.style.visibility = 'visible';
    });

    // Проходимся по всем нижним контейнерам с информацией о машинах и скрываем/показываем в соответствии с результатом поиска
    cars.forEach(function(car) {
      var carInfo = car.innerText.toLowerCase();
      if (carInfo.indexOf(searchText) === -1) {
        car.style.visibility = 'hidden';
      } else {
        // Если машина соответствует критериям поиска, перемещаем ее в начало таблицы
        carsContainer.insertBefore(car.parentNode, carsContainer.firstChild);
      }
    });
  }
</script>
</table>

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
      <div class="white-text">
            <?php
                // Подключение к базе данных и получение количества пользователей
                require_once "db_connect.php";
                $sql = "SELECT COUNT(*) as total_users FROM users";
                $result = $conn->query($sql);
                $total_users = 0;
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $total_users = $row['total_users'];
                }
                $conn->close();
            ?>
            <h3>Total Registered Users: <?php echo $total_users; ?></h3>
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
</body>
</html>
