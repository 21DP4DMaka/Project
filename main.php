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
</head>
<body>
    <header>
        <div class="logo">
          <a href="index.php"><img src="LOGO-removebg-preview(2).png" alt="BMW Logo"></a>
        </div>
        <nav>
        <ul>
        <li><a href="feedback.php">Feedback</a></li>
        <li class="main-page"><a href="main.php">Main page</a></li>
        <li><a href="index.php">Start page</a></li>
      </ul>
        </nav>
        <a href="signin.php" class="profile-button">Tell us about your car</a>
      </header>
    <main>
        <!-- Сообщение о необходимости входа -->
        <div class="content">
            <div class="content">
                <h1>Welcome to Our Website</h1>
                <p>History and Development: Our pages cover the rich history of vehicles, including famous car brands such as <span class="brand">BMW (Bavarian Motor Works):</span> From its earliest days at the beginning of the 20th century, BMW quickly established itself as a manufacturer of high-quality cars with unique designs and outstanding performance. On the pages of our encyclopedia you will find information about key moments in the history of <span class="brand">Mercedes-Benz:</span> Mercedes-Benz is a story of luxury and innovation in the world of automobiles. We will tell you about their first steps, the creation of the first car, and how they became one of the most prestigious brands in the world of cars. You'll also learn about their state-of-the-art eco-friendly designs and electric models. <span class="brand">Volkswagen (Volkswagen):</span> Volkswagen is a brand widely known for its people's cars such as the Volkswagen Beetle and Volkswagen Golf. Our pages provide an overview of the history and development of Volkswagen, their contributions to the automotive industry, as well as current models, including eco-friendly and electric cars. Each of these brands has its own unique history and mark on the history of automobiles. Our materials will give you a better understanding of how these brands have evolved over time and what innovations they have brought to the world of cars.</p>
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
        </main>
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
</body>
</html>