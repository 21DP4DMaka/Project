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
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Ensure the body takes up at least the viewport height */
        }

        /* Header Styles */
        header {
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .logo img {
            height: 40px;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            font-size: 16px;
        }

        /* Main Content Styles */
        main {
            text-align: center;
            padding: 50px;
            flex-grow: 1; /* Allow the main content to grow and take up remaining space */
        }

        h1 {
            font-size: 36px;
            color: #333;
            margin-bottom: 20px;
        }

        /* Product Grid Styles */
        .product-grid {
            display: flex;
            justify-content: center; /* Center the products horizontally */
            align-items: center;
        }

        .product {
            margin: 20px;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
            max-width: 270px; /* Limit the width of the product images */
        }

        .product img {
            max-width: 100%;
            max-height: 100%;
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            max-width: 400px;
            text-align: center;
            position: relative;
        }

        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-weight: bold;
        }

        /* Comment Section Styles */
        .comment-section {
            margin-top: 10px;
        }

        .comment-section textarea {
            width: 100%;
            height: 50px;
            margin-bottom: 10px;
        }

        .comment-section button {
            display: inline-block;
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .comment-list {
            margin-top: 10px;
        }

        .comment {
            background-color: #f9f9f9;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        /* Footer Styles */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
 <header>
<form action="signin.php">
        <input type="submit" class="navbar" value="Your profile"></a>
     </form>
        </div>
        <nav>
            <ul>
                <li><a href="feedback.html">Feedback</a></li>
            </ul>
        </nav>
        
        <h2>
            TEncyclopedia
        </h2>
    </header>
    <main>
        <h1>Your cars encyclopedia</h1>
        <div class="product-grid">
            <div class="product" id="product1" onclick="showProductInfo(1)">
                <img src="BMW_logo_(gray).svg.png" alt="BMW History">
                <!-- <div class="comment-section">
                    <textarea placeholder="Add a comment..."></textarea>
                    <button onclick="addComment(1)">Submit</button>
                    <div class="comment-list"></div>
                </div> -->
            </div>
            <div class="product" id="product2" onclick="showProductInfo(2)">
                <img src="mer.png" alt="Mercedes-Benz">
                <!-- <div class="comment-section">
                    <textarea placeholder="Add a comment..."></textarea>
                    <button onclick="addComment(2)">Submit</button>
                    <div class="comment-list"></div>
                </div> -->
            </div>
            <div class="product" id="product3" onclick="showProductInfo(3)">
                <img src="vk.png" alt="Volkswagen">
                <!-- <div class="comment-section">
                    <textarea placeholder="Add a comment..."></textarea>
                    <button onclick="addComment(3)">Submit</button>
                    <div class="comment-list"></div>
                </div> -->
            </div>
        </div>
    </main>
    
    <div id="productModal" class="modal">
        <div class="modal-content">
            <span class="close-button" onclick="closeProductInfo()">&times;</span>
            <h2>This is your machine encyclopedia</h2>
            <p>U can press at any logo for info about car brand</p>
        </div>
    </div>
    <script>
        // Function to show product information modal for a specific product
        function showProductInfo(productId) {
            var modal = document.getElementById('productModal');
            modal.style.display = 'block';
    
            // Get the corresponding product information based on productId
            var productInfo = getProductInfo(productId);
    
            // Update the modal content with the product information
            var modalContent = document.querySelector('.modal-content');
            modalContent.innerHTML = `
                <span class="close-button" onclick="closeProductInfo()">&times;</span>
                <h2>Product Information</h2>
                <p>${productInfo}</p>
            `;
        }
    
        // Function to close product information modal
        function closeProductInfo() {
            var modal = document.getElementById('productModal');
            modal.style.display = 'none';
        }
    
        // Dummy function to retrieve product information based on productId
        function getProductInfo(productId) {
            // Replace this with your actual data or logic to fetch product information
            switch (productId) {
                case 1:
                    return "BMW, in full Bayerische Motoren Werke AG, German automaker noted for quality sports sedans and motorcycles and one of the most prominent brands in the world. Headquarters are in Munich It originated in 1916 as Bayerische Flugzeug-Werke, a builder of aircraft engines, but assumed the name Bayerische Motoren Werke in July 1917 and began producing motorcycles in the 1920s. BMW entered the automobile business in 1928. The company’s R32 motorcycle set a world speed record that was not broken until 1937. During World War II BMW built the world’s first jet airplane engines, used by the Luftwaffe, Germany’s air force. After the war the company tried to move into the small-car market but found that it could not compete effectively against Volkswagen’s compact, inexpensive autos. By 1959 the company was on the verge of bankruptcy, and its managers were planning to sell the firm to Daimler-Benz.";
                case 2:
                    return "Gottlieb Daimler is born on 17 March 1834 in Schorndorf. After training as a gunsmith and working in France, he attends the Polytechnic School in Stuttgart from 1857 to 1859. After completing various technical activities in France and England, he starts work as a draftsman in Geislingen in 1862. At the end of 1863, he is appointed workshop inspector in a machine tool factory in Reutlingen, where he meets Wilhelm Maybach in 1865. In 1872, he becomes Technical Director of the gas engine manufacturer Deutz Gasmotorenfabrik, where he becomes familiar with Otto’s four-stroke technology. After differences with the Managing Director, he leaves the company in 1882. Daimler sets up a development workshop in his greenhouse at his Cannstatt villa to concentrate on developing petrol-driven four-stroke engines. Working with Wilhelm Maybach in 1884, he develops an internal combustion engine known today as the 'Grandfather Clock'. With its compact, low-weight design, the machine forms the basis for installation in a vehicle. The costs of trial operations soon consume Daimler’s entire fortune, however, so he is obliged to find business partners. He founds 'Daimler-Motoren-Gesellschaft' on 28 November 1890 together with Max Duttenhofer and his business partner Wilhelm Lorenz. But while Duttenhofer wants to produce stationary engines, Daimler prefers to focus on vehicle production, and a dispute ensues.";
                case 3:
                    return "The history of the Volkswagen brand began with the “Käfer”; development work on this Nazi prestige project began in 1934. On May 28, 1937, the “Gesellschaft zur Vorbereitung des Deutschen Volkswagens mbH“ (Company for the Preparation of the German Volkswagen Ltd.) was formally established. The name was changed to “Volkswagenwerk GmbH” in 1938, and the company built its main plant in what has become Wolfsburg. However, the outbreak of war and integration in the arms industry prevented mass production of the Volkswagen “people’s car” instead, military vehicles and other armaments were produced using forced labor.After the war, the British instructed Volkswagen to build the Volkswagen saloon at the end of 1945. With the Type 1 (Käfer) model, and the Type 2 (Transporter) model added in 1950, Volkswagen became a symbol of Germany’s economic miracle, above all as a result of the strong export orientation on the part of the company converted into a joint stock corporation in 1960. Innovative and flexible manufacturing systems made an appearance in the 1970s and led to the birth of a new generation of Volkswagens with the Passat, Scirocco, Golf and Polo models. Growth was boosted in the 1980s through advances in vehicle technology, flexible production, and forward-looking international cooperation.As its globalization advances, Volkswagen is emerging as one of the world’s most successful volume car manufacturers, and today offers cutting-edge solutions for future issues such as e-mobility and digitalization.";
                default:
                    return "Product information not available.";
            }
        }

        // Function to add a comment to a product
        function addComment(productId) {
            var productElement = document.getElementById('product' + productId);
            var textarea = productElement.querySelector('textarea');
            var commentList = productElement.querySelector('.comment-list');

            var commentText = textarea.value.trim();
            if (commentText) {
                var comment = document.createElement('div');
                comment.className = 'comment';
                comment.textContent = commentText;

                commentList.appendChild(comment);
                textarea.value = ''; // Clear the textarea
            }
        }

        // Add event listener for the sign out button
        document.getElementById('signOut').addEventListener('click', function() {
            // Clear user information from localStorage
            localStorage.removeItem('username');

            // Redirect the user to index.html
            window.location.href = 'index.html';
        });

        // Get the username from localStorage
        var username = localStorage.getItem('username');
        var usernameElement = document.getElementById('username');

        // Check if the username is present
        if (username) {
            usernameElement.textContent = username;
        } else {
            // If the username is absent, hide the sign out button
            var signOutLink = document.getElementById('signOut');
            signOutLink.style.display = 'none';
        }
    </script>

<!-- cars -->
<h1>Users published cars:</h1>
<table id="tableofcar">
<?php
  require_once "db_connect.php";

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
          <img src="https://lizingsauto.lv/wp-content/themes/blank/img/icons/volume.png"> &nbsp <?php echo $row['engine']; ?> <br>
          <img src="https://lizingsauto.lv/wp-content/themes/blank/img/icons/fuel.png">&nbsp <?php echo $row['fueltype']; ?>
          <img src="https://lizingsauto.lv/wp-content/themes/blank/img/icons/gearbox.png"> &nbsp <?php echo $row['gearbox']; ?>
          <img src="https://lizingsauto.lv/wp-content/themes/blank/img/icons/hood.png"> &nbsp <?php echo $row['cartype']; ?>
         <br> &nbsp <?php echo $row['brand']; ?> <?php echo $row['model']; ?>
          <br> &nbsp Cena: <?php echo $row['price']; ?> €</p>
          <!-- </div> -->
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

<script>
  function toggleNav() {
    var navLinks = document.querySelector(".nav-links");
    navLinks.classList.toggle("show");
  }
</script>
<footer>
        &copy; 2023 Your Company Name. All rights reserved.
    </footer>
</body>
</html>


<!-- style="position:relative; width:300px; height: 300px;  border-radius: 50px;" -->