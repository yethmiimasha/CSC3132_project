<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOTPRINT - Cart</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

    <section class="cart">
        <h2>Your Shopping Cart</h2>
        <div class="cart-items">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="images/mens/emo9.jpg" alt="Product 1" class="cart-img"> Mens Leather Brown Shoes</td>
                        <td><input type="number" value="1" class="form-control quantity-input"></td>
                        <td>$50.00</td>
                        <td>$50.00</td>
                        <td><button class="btn btn-danger">Remove</button></td>
                    </tr>
                    <tr>
                        <td><img src="images/womens/emo2.jpg" alt="Product 2" class="cart-img"> Strap Square Toe Slides</td>
                        <td><input type="number" value="1" class="form-control quantity-input"></td>
                        <td>$30.00</td>
                        <td>$30.00</td>
                        <td><button class="btn btn-danger">Remove</button></td>
                    </tr>
                    <!-- Add more cart items as needed -->
                </tbody>
            </table>
        </div>
        <div class="cart-summary">
            <h3>Summary</h3>
            <p>Subtotal: $80.00</p>
            <p>Shipping: Free</p>
            <h4>Total: $80.00</h4>
            <button class="btn btn-primary">Proceed to Checkout</button>
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
