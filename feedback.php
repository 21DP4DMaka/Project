<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Feedback Page</title>
<style>
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

section {
max-width: 600px;
margin: auto;
margin-top: 30px;
}

form {
display: flex;
flex-direction: column;
}

label {
margin-top: 10px;
}

input,
textarea {
width: 100%;
padding: 8px;
margin-top: 5px;
margin-bottom: 10px;
box-sizing: border-box;
}

footer {
background-color: #333;
color: #fff;
text-align: center;
padding: 10px;
}
#thank-you {
background-color: #4CAF50;
color: white;
text-align: center;
padding: 10px;
margin-top: 10px;
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
        <li><a href="main.php">Start page</a></li>
      </ul>
        </nav>
        <a href="signin.php" class="profile-button">Tell us about your car</a>
      </header>

</header>
    
<main>
<section>
    <h1>Feedback</h1>
    <form id="feedbackForm" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="message">Your Feedback:</label>
    <textarea id="message" name="message" rows="4" required></textarea>
    <input type="submit" value="Submit Feedback">
    <div id="thank-you" style="display: none;">Thank you for your feedback!</div>
    </form>
    <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7791376.168443524!2d2.7872503325429165!3d17.53694768203935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1199ec7ac6a1af5d%3A0xc933920a158e24d4!2zTmlnxJNyYQ!5e0!3m2!1slv!2slv!4v1700126868374!5m2!1slv!2slv" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
</section>
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
<script>
document.getElementById('feedbackForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Предотвращаем стандартное поведение формы

    // Собираем данные формы
    const formData = new FormData(this);

    // Отправляем данные на серверный скрипт
    fetch('send_feedback.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        // Показываем сообщение "Спасибо"
        document.getElementById("thank-you").style.display = "block";

        // Переадресация на home.html через 2 секунды
        setTimeout(function() {
            window.location.href = "feedback.html";
        }, 2000);
    })
    .catch(error => console.error('Error:', error));
});
</script>
</body>
</html>