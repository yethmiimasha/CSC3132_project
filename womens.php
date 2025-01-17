<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women's Collection - FOOTPRINT</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php">
                <img src="images/logo.jpg" alt="Footprint Logo">
            </a>
        </div>
        <div class="logo">
            <a href="index.php">FOOTPRINT</a>
        </div>
        <div class="search-container">
            <input type="text" placeholder="Search for shoes">
        </div>
        <div class="auth-buttons">
            <a href="login/login.php" class="btn-login">Login</a>
            <a href="login/register.php" class="btn-register">Register</a>
        </div>
    </header>

    <nav class="main-nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="mens.php">Men</a></li>
            <li><a href="womens.php">Women</a></li>
            <li><a href="kids.php">Kids</a></li>
            <li><a href="#">Brands</a></li>
            <li><a href="#">Offers</a></li>
            <li><a href="#">Size Chart</a></li>
            <li><a href="#" class="cart">Cart (<span id="cartCount">0</span>)</a></li>
        </ul>
    </nav>

    <section class="featured">
        <h2>WOMENS</h2>
        <div class="featured-grid" >
            <div class="product-card" data-product-id="10">
                <img src="images/womens/emo1.jpg" alt="Classic Sneakers">
                <h3>Sandal Belly Block Heels</h3>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="product-card" data-product-id="11">
                <img src="images/womens/emo2.jpg" alt="Running Shoes">
                <h3>Strap Square Toe Slides</h3>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="product-card" data-product-id="12">
                <img src="images/womens/emo3.jpg" alt="Formal Shoes">
                <h3>Extra Soft Summer Heels</h3>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="product-card" data-product-id="13">
                <img src="images/womens/emo4.jpg" alt="Classic Sneakers">
                <h3>Simple Sandals</h3>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="product-card" data-product-id="14">
                <img src="images/womens/emo5.jpg" alt="Running Shoes">
                <h3>Rasteira Zaxy Partner</h3>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="product-card" data-product-id="15">
                <img src="images/womens/emo6.jpg" alt="Formal Shoes">
                <h3>Heels and Pump Shoes</h3>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="product-card" data-product-id="16">
                <img src="images/womens/emo7.jpg" alt="Classic Sneakers">
                <h3>Red Velvet</h3>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="product-card" data-product-id="17">
                <img src="images/womens/emo8.jpg" alt="Running Shoes">
                <h3>Zaxy Partner Off-White</h3>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="product-card" data-product-id="18">
                <img src="images/womens/emo9.jpg" alt="Formal Shoes">
                <h3>Classic Sneakers</h3>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="product-card" data-product-id="19">
                <img src="images/womens/emo10.jpg" alt="Formal Shoes">
                <h3>Thin Strap Slide Sandals</h3>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="product-card" data-product-id="20">
                <img src="images/womens/emo11.jpg" alt="Formal Shoes">
                <h3>Leather Braided Slides</h3>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <div class="product-card" data-product-id="21">
                <img src="images/womens/emo12.jpg" alt="Formal Shoes">
                <h3>bias slip</h3>
                <button class="add-to-cart">Add to Cart</button>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Footprint. All rights reserved.</p>
        <div class="footer-links">
            <a href="#">Privacy Policy</a> |
            <a href="#">Terms of Service</a>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
