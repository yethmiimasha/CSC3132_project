<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kid's Collection</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Arial', sans-serif;
    }
    .card {
      border: none;
      transition: transform 0.3s ease;
    }
    .card:hover {
      transform: scale(1.05);
    }
    .card img {
      max-height: 250px;
      object-fit: cover;
    }
    .btn-add-to-cart {
      background-color: #F39C12;
      color: #FFF;
    }
    .btn-add-to-cart:hover {
      background-color: #D35400;
    }
  </style>
</head>
<body>
  <header class="bg-dark text-white text-center py-3">
    <h1>Kid's Collection</h1>
    <p>Fun and comfortable footwear for your little ones!</p>
  </header>
  
  <div class="container mt-4">
    <div class="row">
      <!-- Shoe Card 1 -->
      <div class="col-md-4">
        <div class="card">
          <img src="https://example.com/kshoe1.jpg" class="card-img-top" alt="Shoe 1">
          <div class="card-body text-center">
            <h5 class="card-title">Colorful Sneakers</h5>
            
            <button class="btn btn-add-to-cart" onclick="addToCart()">Add to Cart</button>
          </div>
        </div>
      </div>
      <!-- Shoe Card 2 -->
      <div class="col-md-4">
        <div class="card">
          <img src="https://example.com/kshoe2.jpg" class="card-img-top" alt="Shoe 2">
          <div class="card-body text-center">
            <h5 class="card-title">Playful Sandals</h5>
            
            <button class="btn btn-add-to-cart" onclick="addToCart()">Add to Cart</button>
          </div>
        </div>
      </div>
      <!-- Shoe Card 3 -->
      <div class="col-md-4">
        <div class="card">
          <img src="https://example.com/kshoe3.jpg" class="card-img-top" alt="Shoe 3">
          <div class="card-body text-center">
            <h5 class="card-title">Adventure Boots</h5>
            
            <button class="btn btn-add-to-cart" onclick="addToCart()">Add to Cart</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <footer class="bg-dark text-white text-center py-3 mt-4">
    <p>&copy; 2024 Kid's Collection. All rights reserved.</p>
  </footer>
  
  <script>
    let cartCount = 0;
    function addToCart() {
      cartCount++;
      alert('Item added to cart! Total items: ' + cartCount);
    }
  </script>
</body>
</html>
            