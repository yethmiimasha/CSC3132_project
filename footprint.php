<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footprint: Online Shoe Shopping</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Basic styling for the homepage */
    body {
      font-family: 'Arial', sans-serif;
      color: #333;
    }

    /* Header Bar */
    header {
      background-color: white;
      padding: 15px 0;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 30px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    }

    header h1 {
      font-size: 2rem;
      font-weight: bold;
      font-family: 'Georgia', sans-serif;
      text-transform: uppercase;
      color: darkblue;
      margin: 0;
    }

    .header-icons {
      display: flex;
      align-items: center;
    }

    .search-bar {
    display: flex;
    align-items: center;
    background: linear-gradient(45deg, #F39C12, #8E44AD);
    border: none;
    border-radius: 25px;
    padding: 10px;
    width: 100%;
    max-width: 400px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
  }

  .search-bar input {
    border: none;
    outline: none;
    background: transparent;
    color: #FFF;
    padding: 10px;
    font-size: 1.2rem;
    flex: 1;
  }

  .search-bar input::placeholder {
    color: #FFF;
  }

  .search-bar button {
    background-color: #34495E;
    color: #FFF;
    border: none;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

    .search-bar button:hover {
      background-color: #2C3E50;
    }

    .search-bar button i {
      font-size: 1.2rem;
    }

    .horizontal-bars {
      display: flex;
      height: 50vh;
    }
    
    .bar {
      flex: 1;
      position: relative;
      color: white;
      text-align: center;
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .bar h2 {
      font-size: 2.5rem;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    }

    .bar a {
      margin-top: 20px;
      display: inline-block;
      background-color: #34495E;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      font-size: 1.2rem;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    .bar {
      flex: 1;
      position: relative;
      color: white;
      text-align: center;
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden; /* Prevents overflow during zoom */
      transition: transform 0.3s ease-in-out; /* Smooth zoom effect */
    }

    .bar:hover {
      transform: scale(1.1); /* Zooms in */
    }

    .bar a:hover {
      background-color: #2C3E50;
    }

    /* Navigation bar */
    .navbar {
      background-color: #1b1a1c;
    }
    
    .navbar-brand {
      font-weight: bold;
      color: #ECF0F1 !important;
    }

    .navbar-nav .nav-link {
      color: #ECF0F1 !important;
    }

    .navbar-nav .nav-link:hover {
      color: #F39C12 !important;
    }

    .collection-section {
      position: relative;
      color: white;
      text-align: center;
      padding: 100px 0;
      background-size: cover;
      background-position: center;
    }
    .collection-section h2 {
      font-size: 3rem;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
    }
    .collection-section a {
      margin-top: 20px;
      display: inline-block;
      background-color: #34495E;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      font-size: 1.2rem;
      border-radius: 5px;
    }
    .collection-section a:hover {
      background-color: #2C3E50;
    }

    /* Hero Section */
    .hero {
      background-color: #F39C12;
      color: #FFF;
      padding: 160px 0;
      text-align: center;
    }

    .hero h1 {
      font-size: 3.5rem;
      margin-bottom: 20px;
    }

    .hero p {
      font-size: 1.2rem;
      margin-bottom: 40px;
    }

    .btn-shop {
      background-color: #34495E;
      color: #FFF;
      padding: 10px 20px;
      border-radius: 5px;
      font-size: 1.2rem;
      text-transform: uppercase;
    }

    .btn-shop:hover {
      background-color: #2C3E50;
    }

    /* Product Section */
    .product-title {
      font-weight: bold;
      text-align: center;
      color: #34495E;
      margin-top: 40px;
    }

    .card {
      border: none;
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: scale(1.05);
    }

    .card-title {
      color: #34495E;
    }

    .card-text {
      font-size: 1rem;
      font-weight: bold;
      color: #F39C12;
    }

    /* Footer */
    .footer {
      background-color: #2C3E50;
      color: #ECF0F1;
      padding: 40px 0;
      text-align: center;
    }

    .footer a {
      color: #F39C12;
    }

    .footer a:hover {
      color: #ECF0F1;
      text-decoration: none;
    }

  </style>
</head>
<body>

<!-- Header Bar -->
<header>
  <h1>Footprint</h1>
  <div class="header-icons">
    <div class="search-bar">
      <input type="text" placeholder="Search for shoes">
      <button><i class="fas fa-search"></i></button>
    </div>
    <div class="ml-3">
      <a href="login.php" class="btn btn-outline-primary mr-2">Login</a>
      <a href="register.php" class="btn btn-primary">Register</a>
      
    </div>
  </div>
</header>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Men</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Women</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Children</a></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="brandsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Brands
        </a>
        <div class="dropdown-menu" aria-labelledby="brandsDropdown">
          <a class="dropdown-item" href="#">Bata Industrial Shoes</a>
        </div>
      </li>
      <li class="nav-item"><a class="nav-link" href="#">Offers</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Size Chart</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Cart (<span id="cart-count">0</span>)</a></li>
    </ul>
  </div>
</nav>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <!-- Hero Section -->
  <section 
    class="hero" 
    style="
      background: url('pictures/background.jpg') no-repeat center center/cover; 
      color: white; 
      padding: 100px 0; 
      text-align: center;">

    <div class="container">
      <h1>Step into Style</h1>
      <p>Explore the latest trends in footwear and get the perfect pair delivered to your door.</p>
      <a href="#" class="btn btn-dark">Shop Now</a>
    </div>
  </section>



    <div class="horizontal-bars">
      <div class="horizontal-bars">
        <!-- Men's Collection -->
        <a href="men.html" class="bar" style="background-image: url('https://i.pinimg.com/736x/4c/bf/f4/4cbff414f222df31da782e0b41071738.jpg');">
          <div>
            <h2>Men's Collection</h2>
          </div>
        </a>
      
        <!-- Women's Collection -->
        <a href="women.html" class="bar" style="background-image: url('https://i.pinimg.com/736x/10/ca/a5/10caa5df9b15595d9d530269137766b0.jpg');">
          <div>
            <h2>Women's Collection</h2>
          </div>
        </a>
      
        <!-- Kid's Collection -->
        <a href="kids.html" class="bar" style="background-image: url('https://i.pinimg.com/736x/46/56/9c/46569c17876de027e784948b8c8ba425.jpg');">
          <div>
            <h2>Kid's Collection</h2>
          </div>
        </a>
      </div>      
</div>



  <!-- Add the rest of your page content here -->

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

  <!-- Product Listing Section -->
  <section class="products container">
    <h2 class="product-title">Featured Footwear</h2>
    <div class="row my-5">
      <!-- Product Card 1 -->
      <div class="col-md-4">
        <div class="card">
          <img src="https://thumbs.dreamstime.com/b/sport-shoes-sneakers-studio-white-background-316836307.jpg" class="card-img-top img-fluid" alt="Classic Sneakers">
          <div class="card-body text-center">
            <h5 class="card-title">Classic Sneakers</h5>
            <a href="#" class="btn btn-primary" onclick="addToCart()">Add to Cart</a>
          </div>
        </div>
      </div>
      <!-- Product Card 2 -->
      <div class="col-md-4">
        <div class="card">
          <img src="https://fuelshoes.com/cdn/shop/files/8_1e1df76b-b544-44fc-8c2f-e31dba4b1eb3.jpg?v=1720001401&width=3000" class="card-img-top img-fluid" alt="Sports Shoes">
          <div class="card-body text-center">
            <h5 class="card-title">Running Shoes</h5>
            <a href="#" class="btn btn-primary" onclick="addToCart()">Add to Cart</a>
          </div>
        </div>
      </div>
      <!-- Product Card 3 -->
      <div class="col-md-4">
        <div class="card">
          <img src="https://www.pierrecardinindia.com/wp-content/uploads/2022/12/cognac-leather-formal-shoes.jpg" class="card-img-top img-fluid" alt="Formal Shoes">
          <div class="card-body text-center">
            <h5 class="card-title">Formal Shoes</h5>
            <a href="#" class="btn btn-primary" onclick="addToCart()">Add to Cart</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  

  <!-- Footer Section -->
  <footer class="footer">
    <div class="container">
      <p>&copy; 2024 Footprint. All rights reserved.</p>
      <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <script>
    let cartCount = 0;

    function addToCart() {
      cartCount++;
      document.getElementById('cart-count').innerText = cartCount;
      alert('Item added to cart!');
    }
  </script>
</body>
</html>