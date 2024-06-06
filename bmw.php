<!DOCTYPE html>
<html>
<head>
  <title>BMW History</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
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
      <a href="index.php"><img src="BMW_logo_(gray).svg.png" alt="BMW Logo"></a>
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
    <h1>BMW History</h1>
    <div class="content">
      <p>
        The official founding date of the German motor vehicle manufacturer BMW is 7 March 1916, when an aircraft producer called Bayerische Flugzeugwerke (formerly Otto Flugmaschinenfabrik) was established.[1][2] This company was renamed to Bayerische Motoren Werke (BMW) in 1922. However, the BMW name dates back to 1917, when Rapp Motorenwerke changed its name to Bayerische Motoren Werke.[3] BMW's first product was a straight-six aircraft engine called the BMW IIIa. Following the end of World War I, BMW remained in business by producing motorcycle engines, farm equipment, household items and railway brakes.This was not enough and the company was suspended, bankrupt really, from 6 November 1918 to 1 February 1919. BMW turned to motorcycle engine manufacturing, building a smooth operating horizontally opposed engine to keep the centre of mass low and thus make a more responsive machine. The engine was well received but the motorcycles made using it were not and sold slowly. BMW's General Director Franz Josef Popp had to branch out again and BMW became a sub-contract manufacturer for braking system manufacturer Knorr Bremse. The major shareholder in BMW, Vienna based Italian speculator Camillo Castiglionli, sold all of his shares to Knorr Bremse in May 1920, who then acquired the remaining shares to make BMW a wholly owned subsidiary still run by Popp. Less than two years later Popp persuaded Castiglionli buy back the BMW company name and buy the Bayerische Flugzeugwerke for its production site on the other side of the air field.There the company produced its first motorcycle in 1923. This was the legendary Max Fritz designed BMW R32 shaft drive motorcycle, which featured an integrated gearbox, recirculating rather than total loss lubrication and with the cylinder heads poking out for cooling.BMW became an automobile manufacturer in 1928 when it purchased Fahrzeugfabrik Eisenach, which built Austin Sevens at that time under licence (under the Dixi marque).[4] The first car sold as a BMW was a rebadged Dixi called the BMW 3/15. Throughout the 1930s, BMW expanded its range into sports cars and larger luxury cars.Aircraft engines, motorcycles, and automobiles would be BMW's main products until World War II. During the war, against the wishes of Popp, BMW concentrated on aircraft engine production, with motorcycles as a side line, and automobile manufacture stopped altogether. BMW's factories were heavily bombed during the war, its automobile factory in the Russian controlled East Germany and its remaining West German facilities were banned from producing motor vehicles or aircraft after the war. Again, the company survived by making pots, pans and bicycles. In 1948, BMW restarted motorcycle production. BMW resumed car production in Bavaria in 1952 with the BMW 501 luxury saloon. The range of cars was expanded in 1955, through the production of the cheaper Isetta microcarafter acquiring the rights from Italian company Iso. Slow sales of loss making luxury cars, declining profitable motorcycle sales as the economy improved and small profit margins from microcars meant BMW was in serious financial trouble. A "600" 4 seat version of the Isetta with the "fridge" front door and one side door and a 600 cc air cooled horizontal twin motorcycle engine, was a sales flop. This led to a "proper car" styled by Micholetti based on the 600 was developed but consumed all available fund leading to very limited production in 1959. In December 1959, the company was nearly taken over by rival Daimler-Benz. Herbert Quandt and Harald Quandt acquired a controlling interest, largely based on the sales prospect of the 700 resulted in the company surviving as a separate entity.The Quandt's father, Günther Quandt, was a well-known German industrialist. Quandt joined the Nazi party in 1933 and made a fortune arming the German Wehrmacht, manufacturing weapons and batteries.[5][6] Many of his enterprises had been appropriated from Jewish owners under duress and with minimal compensation. At least three of his enterprises made extensive use of slave laborers, as many as 50,000 in all.[7][8] One of his battery factories had its own on-site concentration camp, complete with gallows. While the Quandt family and BMW were not directly connected during the war, funds amassed in the Nazi era by his father allowed Herbert Quandt to buy BMW.[9]The BMW 700 was successful and assisted in the company's recovery.The 1962 introduction of the BMW New Class compact sedans was the beginning of BMW's reputation as a leading manufacturer of sport-oriented cars. Throughout the 1960s, BMW expanded its range by adding coupe and luxury sedan models. The BMW 5 Series mid-size sedan range was introduced in 1972, followed by the BMW 3 Series compact sedans in 1975, the BMW 6 Series luxury coupes in 1976 and the BMW 7 Series large luxury sedans in 1978.The BMW M division released its first road car, a mid-engine supercar, in 1978. This was followed by the BMW M5 in 1984 and the BMW M3 in 1986. Also in 1986, BMW introduced its first V12 engine in the 750i luxury sedan.The company purchased the Rover Group in 1994, but the takeover was not successful and caused BMW large financial losses. In 2000, BMW sold off most of the Rover brands, retaining only Mini. BMW acquired the rights to the Rolls-Royce brand in 1998.The 1995 BMW Z3 expanded the line-up to include a mass-production two-seat roadster, and the 1999 BMW X5 was the company's entry into the SUV market.Their first mass-produced turbocharged petrol engine was introduced in 1980 (m102), with most engines switching over to turbocharging over the following decade. The first hybrid BMW was the 2010 BMW ActiveHybrid 7, and BMW's first electric car was the BMW i3 city car, which was released in 2013. After many years of establishing a reputation for sporting rear-wheel drive cars, BMW's first front-wheel drive car was the 2014 BMW 2 Series Active Tourer multi-purpose vehicle (MPV). </p>
    </div>
      <div class="placeholder-text"></div>
    </div>

    <div class="comment-section">
      <h2>Comments</h2>
      <div class="comment-form">
        <form method="post" action="">
          <textarea name="comment" placeholder="Add a comment..."></textarea>
          <button type="submit" name="submit">Submit</button>
        </form>
      </div>
      <div class="comment-list">
      <?php
          require_once "db_connect.php";

          if (isset($_POST['submit'])) {
            $comment = $_POST['comment'];

            // Insert comment into the database
            $sql = "INSERT INTO comments_bmw (text) VALUES (?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $comment);
            $stmt->execute();
          }

          // Fetch comments from the database
          $sql = "SELECT * FROM comments_bmw";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<div class='comment'>";
              echo "<div class='comment-content'>";
              echo "<img class='comment-avatar' src='ava.jpg' alt='User'>"; 
              echo "<div class='comment-text'>" . $row['text'] . "</div>";
              echo "</div>";
              echo "</div>";
            }
          } else {
            echo "No comments yet.";
          }

          $conn->close();
        ?>
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