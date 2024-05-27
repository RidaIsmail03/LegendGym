<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <script src="https://kit.fontawesome.com/8f27d68390.js" crossorigin="anonymous"></script>


  <link rel="stylesheet" href="public/css/Product.css" />
  <title>Document</title>
  <style>
    .whole-cart-window,
    .subtotal,
    .checkout,
    .view-cart,
    .whole-cart-window h2,
    .whole-cart-window .cart-wrapper {
      color: black !important;
    }

    nav {
      background-color: red;
      color: black;
    }

    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }

    nav ul li {
      display: inline-block;
    }

    nav ul li a {
      display: block;
      padding: 15px;
      color: #fff;
      text-decoration: none;
    }

    nav ul li a:hover {
      background-color: black;
    }
  </style>
</head>

<body>
  <header>
    <h1 style="color: #fff;">Shop Online</h1>

  </header>

  <nav>
    <ul>
      <li><a href="#pro">Proteins</a></li>
      <li><a href="#equi">Gym Equipments</a></li>
      <li><a href="#bott">Gym Bottles</a></li>
      <li><a href="Home.html">Back</a></li>
    </ul>
  </nav>
  <div class="cart-box">
    <div class="cart-icon">
      <i class="fas fa-cart-arrow-down fa-2x"></i>
    </div>
    <div class="whole-cart-window hide">
      <h2>Shopping Bag</h2>
      <div class="cart-wrapper">

      </div>
      <div class="subtotal">Subtotal: $0.00</div>
      <div class="checkout">Checkout</div>
      <div class="view-cart">View Cart</div>
    </div>
  </div>

  <br>


  <section class="shop-section">
    <h1 id="pro">Proteins</h1>

    <!--  -->
    <div class="card-wrapper">

   

      <div class="card-wrapper">
        <div class="products" data-id="products">
          <?php
    
          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              ?>
          <div>
            <label>
              <?php echo $row["name"] ?>
            </label>
            <label>
              <?php echo $row["price"] ?>
            </label>
            <img src="public/images/<?php echo $row["image"] ?>">
          </div>
          <?php
            }
          } else {
            echo "0 results";
          }
          ?>
        </div>
      </div>
      </div>

<!--  -->
<!-- item 1 -->
<!-- <br>
    <div class="card-wrapper">
      <div data-id="1" class="card-item">
        <img
          src="public/images/powerlift-muscle-mass-gainers-protein-powder-3kg-rich-chocolate-high-protein-mass-and-weight-gainer-raw-whey-from-usa-for-muscles-gain-with-digezyme-blend-added-multivitamins-minerals-product-images-orvio6.jpg" />
        <div class="details">
          <h3>Mass Gainer</h3>
          <p>
            <span></span>

            <span class="price">Price: $60</span>
            <span class="add-to-cart-btn">Add To Cart</span>
          </p>
        </div>
      </div> -->
<!-- item 2 -->
<div data-id="2" class="card-item">
  <img src="public/images/DY_SHAD_BLOODANDGUTS_STRAWBERRY_01_600x.webp" />
  <div class="details">
    <h3>Blood & Guts</h3>
    <p>
      <span>

      </span>

      <span class="price">Price: $20</span>
      <span class="add-to-cart-btn">Add To Cart</span>
    </p>
  </div>
</div>

<!-- product 3 -->
<div data-id="3" class="card-item">
  <img src="public/images/InspiredWhey69ServeCaramel-FudgeFront_637642921682589225.png" />
  <div class="details">
    <h3>WHEY</h3>
    <p>
      <span></span>

      <span class="price">Price: $45</span>
      <span class="add-to-cart-btn">Add To Cart</span>
    </p>
  </div>
</div>

<!-- product 4 -->
<div data-id="4" class="card-item">
  <img src="public/images/OlimpNutritionBCAAXplodeEnergy_75Servings_600x.webp" />
  <div class="details">
    <h3>BCAA</h3>
    <p>
      <span>

      </span>

      <span class="price">Price: $15</span>
      <span class="add-to-cart-btn">Add To Cart</span>
    </p>
  </div>
</div>
<!-- product 5 -->
<div data-id="5" class="card-item">
  <img src="public/images/copyright-www.trufit.eu-1100-bpi-sports-whey-hd-1900g.webp" />
  <div class="details">
    <h3>WHEY bpi</h3>
    <p>
      <span></span>
      <span class="price">Price: $18</span>
      <span class="add-to-cart-btn">Add To Cart</span>
    </p>
  </div>
</div>

<!-- product 6 -->
<div data-id="6" class="card-item">
  <img src="public/images/MuscleTech-Platinum-100-Creatine-Powder-Front-1-scaled-600x600.webp" />
  <div class="details">
    <h3>Creatine</h3>
    <p>
      <span>

      </span>

      <span class="price">Price: $30</span>
      <span class="add-to-cart-btn">Add To Cart</span>
    </p>
  </div>
</div>

<!-- product 7 -->
<div data-id="7" class="card-item">
  <img src="public/images/download.jpg" />
  <div class="details">
    <h3>NIRTO TECH</h3>
    <p>
      <span>

      </span>

      <span class="price">Price: $50</span>
      <span class="add-to-cart-btn">Add To Cart</span>
    </p>
  </div>
</div>

<!-- product 8 -->
<div data-id="8" class="card-item">
  <img src="public/images/WHEY-HD-50SERVS-STRAWBERRYCAKE_600x.webp" />
  <div class="details">
    <h3>WHEY HD</h3>
    <p>
      <span></span>

      <span class="price">Price: $55</span>
      <span class="add-to-cart-btn">Add To Cart</span>
    </p>
  </div>
</div>
</div>
</section>
<br>

<section class="shop-section">
  <h1 id="equi">Gym Equipments</h1>
  <!-- item 1 -->
  <br>
  <div class="card-wrapper">
    <div data-id="1" class="card-item">
      <img src="public/images/images.jpg" />
      <div class="details">
        <h3>Bag 1</h3>
        <p>
          <span></span>

          <span class="price">Price: $10</span>
          <span class="add-to-cart-btn">Add To Cart</span>
        </p>
      </div>
    </div>
    <!-- item 2 -->
    <div data-id="2" class="card-item">
      <img src="public/images/bb35_v1.jpg" />
      <div class="details">
        <h3>Bag 2</h3>
        <p>
          <span>

          </span>

          <span class="price">Price: $9</span>
          <span class="add-to-cart-btn">Add To Cart</span>
        </p>
      </div>
    </div>

    <!-- product 3 -->
    <div data-id="3" class="card-item">
      <img src="public/images/gel-fitness-glove.jpg" />
      <div class="details">
        <h3>Gloves 1</h3>
        <p>
          <span></span>

          <span class="price">Price: $6</span>
          <span class="add-to-cart-btn">Add To Cart</span>
        </p>
      </div>
    </div>

    <!-- product 4 -->
    <div data-id="4" class="card-item">
      <img src="public/images/weightlifting-gloves-458728_grande.webp" />
      <div class="details">
        <h3>Gloves 2</h3>
        <p>
          <span>

          </span>

          <span class="price">Price: $7</span>
          <span class="add-to-cart-btn">Add To Cart</span>
        </p>
      </div>
    </div>
    <!-- product 5 -->
    <div data-id="5" class="card-item">
      <img src="public/images/710kcZEOZZL._AC_UL600_SR600,600_.jpg" />
      <div class="details">
        <h3>Back Corset</h3>
        <p>
          <span></span>
          <span class="price">Price: $15</span>
          <span class="add-to-cart-btn">Add To Cart</span>
        </p>
      </div>
    </div>

    <!-- product 6 -->
    <div data-id="6" class="card-item">
      <img src="public/images/hand_grips_51639a40-1046-4b27-8fdd-8e7a504aaf21_600x600.webp" />
      <div class="details">
        <h3>Serious Steel</h3>
        <p>
          <span>

          </span>

          <span class="price">Price: $10</span>
          <span class="add-to-cart-btn">Add To Cart</span>
        </p>
      </div>
    </div>

    <!-- product 7 -->
    <div data-id="7" class="card-item">
      <img
        src="public/images/sx-fitness-pack-of-2-one-pair-hand-gripper-wrist-exerciser-fitness-foam-hand-grip-for-gym-stretching-hand-strengtheners-for-men-women-product-images-orvuvtxz7qp-p596042290-0-202212032232.jpg" />
      <div class="details">
        <h3>Hand Grippers</h3>
        <p>
          <span>

          </span>

          <span class="price">Price: $11</span>
          <span class="add-to-cart-btn">Add To Cart</span>
        </p>
      </div>
    </div>

    <!-- product 8 -->
    <div data-id="8" class="card-item">
      <img src="public/images/xmartial-powerlifting-hand-grips-34826435526820_grande.webp" />
      <div class="details">
        <h3> Wrist Wraps</h3>
        <p>
          <span></span>

          <span class="price">Price: $13</span>
          <span class="add-to-cart-btn">Add To Cart</span>
        </p>
      </div>
    </div>
  </div>
</section>

<br>

<section class="shop-section">
  <h1 id="bott">Gym Bottles</h1>
  <br>
  <div class="card-wrapper">
    <!-- item 1 -->
    <div data-id="1" class="card-item">
      <img src="public/images/b1.webp" />
      <div class="details">
        <h3>Bottle 1</h3>
        <p>
          <span></span>

          <span class="price">Price: $15</span>
          <span class="add-to-cart-btn">Add To Cart</span>
        </p>
      </div>
    </div>
    <!-- item 2 -->
    <div data-id="2" class="card-item">
      <img src="public/images/b2.jpg" />
      <div class="details">
        <h3>Bottle 2</h3>
        <p>
          <span>

          </span>

          <span class="price">Price: $15</span>
          <span class="add-to-cart-btn">Add To Cart</span>
        </p>
      </div>
    </div>

    <!-- product 3 -->
    <div data-id="3" class="card-item">
      <img src="public/images/b3.jpg" />
      <div class="details">
        <h3>Bottle 3</h3>
        <p>
          <span></span>

          <span class="price">Price: $18</span>
          <span class="add-to-cart-btn">Add To Cart</span>
        </p>
      </div>
    </div>

    <!-- product 4 -->
    <div data-id="4" class="card-item">
      <img src="public/images/b4.webp" />
      <div class="details">
        <h3>Bottle 4</h3>
        <p>
          <span>

          </span>

          <span class="price">Price: $17</span>
          <span class="add-to-cart-btn">Add To Cart</span>
        </p>
      </div>
    </div>
    <!-- product 5 -->
    <div data-id="5" class="card-item">
      <img src="public/images/a2.jpg" />
      <div class="details">
        <h3>Protein BOMB</h3>
        <p>
          <span></span>
          <span class="price">Price: $3</span>
          <span class="add-to-cart-btn">Add To Cart</span>
        </p>
      </div>
    </div>

    <!-- product 6 -->
    <div data-id="6" class="card-item">
      <img src="public/images/a3.jpg" />
      <div class="details">
        <h3>Cookies & Cream</h3>
        <p>
          <span>

          </span>

          <span class="price">Price: $3</span>
          <span class="add-to-cart-btn">Add To Cart</span>
        </p>
      </div>
    </div>

    <!-- product 7 -->
    <div data-id="7" class="card-item">
      <img src="public/images/a4.jpg" />
      <div class="details">
        <h3>Vanilla Ice Cream</h3>
        <p>
          <span>

          </span>

          <span class="price">Price: $3</span>
          <span class="add-to-cart-btn">Add To Cart</span>
        </p>
      </div>
    </div>

    <!-- product 8 -->
    <div data-id="8" class="card-item">
      <img src="public/images/a5.jpg" />
      <div class="details">
        <h3>Coffe Dream</h3>
        <p>
          <span></span>

          <span class="price">Price: $3</span>
          <span class="add-to-cart-btn">Add To Cart</span>
        </p>
      </div>
    </div>
  </div>
</section>



<footer>
  <div class="waves">
    <div class="wave" id="wave1"></div>
  </div>
  <p>Get Fit, Stay Strong</p>
  <p>Visit Our Gym Today</p>

  <div class="zoom">
    <ul class="social_icon">
      <li><a href="#"><ion-icon name="logo-facebook"></ion-icon>
        </a></li>

      <li><a href="#"><ion-icon name="logo-twitter"></ion-icon>
        </a></li>

      <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon>
        </a></li>

      <li><a href="#"><ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>

  </div>

  <!-- <ul class="menu">
      <li><a href="#pro">Proteins</a></li>
      <li><a href="#equi">Gym Equipments</a></li>
      <li><a href="#bott">Gym Bottles</a></li>
      <li><a href="Home.html">Back</a></li>
    </ul> -->


  <p>© Ali & Rida</p>


</footer>


</div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


<script src="public/js/Product.js"></script>
</body>

</html>