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
        background-color: #fff;
        color: #fff;
        display: flex;
        flex-direction: column;
        margin: 0;
        height: 100vh;
    }

    header {
        background-color: #333;
        color: #fff;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        width: 100%;
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

        .container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        flex-grow: 1;
        background-image: url('pngegg(2).png'); /* Укажите путь к вашей картинке */
        background-size: cover;
        background-position: center;
        position: relative;
        width: 100%;
        padding: 20px;
    }

    .signup-form {
        background-color: rgba(34, 34, 34, 0.9); /* Полупрозрачный черный фон */
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        width: 300px;
        text-align: center;
        margin-bottom: 0px;
    }

    .input-container {
        margin-bottom: 15px;
    }

    .input-container input {
        width: 20px; /* Сделать поля ввода уже */
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #fff;
        color: #000;
        margin: center; /* Центрирование полей ввода */
    }

    .btn {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #fff;
    color: #000;
    cursor: pointer;
    font-weight: bold;
    position: relative;
    overflow: hidden;
    margin: 10px 0;
}

.btn::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    display: block;
    left: 0;
    bottom: 0;
    background: #000;
    transition: width 0.4s ease;
}

.btn:hover::after {
    width: 100%;
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
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        flex-direction: column;
    }

    .signup-form {
        background-color: #222;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        width: 300px;
        text-align: center;
    }

    .input-container {
        margin-bottom: 15px;
    }

    .input-container input {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #fff;
        color: #000;
    }

    .btn {
        width: 100%;
        padding: 10px;
        border: none;
        
        background-color: #fff;
        color: #000;
        cursor: pointer;
        font-weight: bold;
        position: relative;
        overflow: hidden;
    }

    .btn::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        display: block;
        left: 0;
        bottom: 0;
        background: #000;
        transition: width 0.4s ease;
    }

    .btn:hover::after {
        width: 100%;
    }

    .btn-left {
        position: absolute;
        left: 20px;
        bottom: 20px;
    }

    .btn-right {
        position: absolute;
        right: 20px;
        bottom: 20px;
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
        </form>
      </header>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
  </head>
<body>
    <!-- <center>
<h1>Izveidot administratora profilu:</h1>
<form action="signup.php" method="POST">
  <input type="text" name="username" placeholder="Lietotājvārds" required><br>
  <input type="password" name="password" placeholder="Parole" required><br>
  <input type="submit" class="btn" value="Signup">
</form></center> -->

<!-- qwf -->

<div class="container">
        <form class="signup-form" action="signup.php" method="POST">
            <h2>Registration</h2>
            <div class="input-container">
                <input type="text" name="username" placeholder="Lietotājvārds" required>
            </div>
            <div class="input-container">
                <input type="password" name="password" placeholder="Parole" required>
            </div>
            <input type="submit" class="btn" value="Izveidot">
        </form>
        <form class="signup-form" action="signin.php">
            <input type="submit" class="btn" value="Sign-in">
    </div>
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
</body>
</html>