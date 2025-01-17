<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOTPRINT - Step into Style</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header>
        <div class="logo">
            <a href="#">
                <img src="images/logo.jpg" alt="Footprint Logo">
            </a>
        </div>
        <div class="logo">
            <a href="#">FOOTPRINT</a>
        </div>
        <div class="search-container">
            <input type="text" placeholder="Search for shoes">
        </div>
        <div class="auth-buttons">
            <a href="login/login.php" class="btn-register">Login</a>
            <a href="login/register.php" class="btn-register">Register</a>
        </div>
    </header>

    <nav class="main-nav">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="mens.php">Men</a></li>
            <li><a href="womens.php">Women</a></li>
            <li><a href="kids.php">Kids</a></li>
            <li><a href="brands.php">Brands</a></li>
            <li><a href="offers.php">Offers</a></li>
            <li><a href="sizechart.php">Size Chart</a></li>
            <li><a href="cart.php" class="cart">Cart (<span id="cartCount">0</span>)</a></li>
        </ul>
    </nav>

    <section>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="images/BackGround2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                    <h1>Step into Style</h1>
                    <h4>Explore the latest trends in footwear and get the perfect pair delivered to your door.</h4>
                    <a href="#" class="shop-now-btn">Shop Now</a>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images/BackGround3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h1>COLOR YOUR STEPS</h1>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images/NewYear2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
</div>
    </section>

    <section class="collections">
        <div class="collection-card">
            <a href="mens.php">
                <img src="images/mens-collection.jpg" alt="Men's Collection" >
                <h2>Men's Collection</h2>
            </a>
        </div>
        <div class="collection-card">
            <a href="womens.php">
                <img src="images/womens-collection.jpg" alt="Women's Collection">
                <h2>Women's Collection</h2>
            </a>
        </div>
        <div class="collection-card">
            <a href="kids.php">
                <img src="images/kids-collection.jpg" alt="Kid's Collection">
                <h2>Kid's Collection</h2>
            </a>   
        </div>
    </section>

    <section class="featured">
        <h2>NEW ARRIVALS</h2>
        <div class="featured-grid">
            <div class="product-card" data-product-id="1">
                <img src="images//mens/emo9.jpg" alt="Classic Sneakers">
                <h4>Mens Leather Brown shoes</h4>
                <a href="mens.php">
                <button type="button" class="btn btn-success">Let's Go</button>
                </a>
            </div>
            <div class="product-card" data-product-id="2">
                <img src="images/womens/emo2.jpg" alt="Running Shoes">
                <h4>Strap Square Toe Slides</h4>
                <a href="womens.php">
                <button type="button" class="btn btn-danger">Let's Go</button>
                </a>
            </div>
            <div class="product-card" data-product-id="3">
                <img src="images/womens/emo1.jpg" alt="Formal Shoes">
                <h4>Sandal Belly Block Heel</h4>
                <a href="womens.php">
                <button type="button" class="btn btn-warning">Let's Go</button>
                </a>
            </div>
            <div class="product-card" data-product-id="3">
                <img src="images/kids/emo12.jpg" alt="Formal Shoes">
                <h4>Boys Blue Running Shoes</h4>
                <a href="kids.php">
                <button type="button" class="btn btn-info" >Let's Go</button>
                </a>
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