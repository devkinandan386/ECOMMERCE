<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Product Showcase with Cart and Sidebar</title>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <style>
    /* Reset and Global Styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Fira Sans', sans-serif;
      background-color: #F0F8E1;
      color: #1F1D42;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    /* Navbar Styles */
    .navbar {
      width: 100%;
      background-color: #333;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: fixed;
      top: 0;
      z-index: 1000;
    }

    .navbar .logo {
      color: #fff;
      font-size: 1.5rem;
      font-weight: 600;
    }

    .navbar .nav-links a {
      color: #fff;
      margin-left: 20px;
      padding: 8px 12px;
      border-radius: 4px;
      transition: background 0.3s;
    }

    .navbar .nav-links a:hover {
      background-color: #575757;
    }

    .navbar .nav-right {
      display: flex;
      align-items: center;
    }

    .filter-button {
      padding: 8px 16px;
      background-color: #2d7f0b;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-right: 20px;
      transition: background 0.3s;
    }

    .filter-button:hover {
      background-color: #1a5c06;
    }

    .cart-icon {
      position: relative;
      cursor: pointer;
    }

    .cart-icon img {
      width: 30px;
      height: 30px;
    }

    .cart-badge {
      position: absolute;
      top: -5px;
      right: -10px;
      background-color: red;
      color: #fff;
      border-radius: 50%;
      padding: 2px 6px;
      font-size: 0.75rem;
    }

    /* Cart Dropdown */
    #cartDropdown {
      display: none;
      position: absolute;
      top: 60px;
      right: 30px;
      background-color: #333;
      color: #fff;
      padding: 20px;
      border-radius: 8px;
      width: 300px;
      z-index: 1000;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

    #cartDropdown h4 {
      margin-bottom: 10px;
      border-bottom: 1px solid #575757;
      padding-bottom: 5px;
    }

    .cart-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-top: 10px;
    }

    .cart-item .item-info {
      display: flex;
      flex-direction: column;
    }

    .cart-item .item-info span {
      font-size: 0.9rem;
    }

    .cart-item button {
      background-color: red;
      border: none;
      color: #fff;
      padding: 4px 8px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 0.75rem;
    }

    .cart-item .quantity-controls {
      display: flex;
      align-items: center;
      gap: 5px;
      margin-top: 5px;
    }

    .cart-item .quantity-controls button {
      background-color: #555;
      border: none;
      color: #fff;
      padding: 2px 6px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 0.75rem;
    }

    /* Main Content */
    .main {
      flex: 1;
      padding: 50px 30px 30px; /* Top padding to account for fixed navbar and image gallery */
    }

    /* Slideshow-Style Horizontal Image Gallery */
    .image-gallery-wrapper {
      width: 100%;
      overflow: hidden;
      background-color: #F0F8E1;
      padding-top: 60px; /* To account for fixed navbar */
      position: relative;
      z-index: 500;
      height: 150px; /* Fixed height to prevent layout shifts */
    }

    .image-gallery {
      display: flex;
      width: 100%;
      height: 150px; /* Match the wrapper's height */
      position: relative;
    }

    .slide {
      min-width: 100%;
      transition: opacity 1s ease-in-out;
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0;
    }

    .slide.active {
      opacity: 1;
      position: relative;
    }

    .slide img {
      width: 100%;
      height: 150px;
      object-fit: cover;
    }

    /* Cards Container */
    .cards-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    /* Card Styles */
    .card {
      background-color: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      transition: transform 0.3s, box-shadow 0.3s;
      position: relative;
      display: flex;
      flex-direction: column;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 8px 12px rgba(0,0,0,0.2);
    }

    .card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      transition: transform 0.3s;
    }

    .card:hover img {
      transform: scale(1.05);
    }

    .card-content {
      padding: 15px;
      flex: 1;
      display: flex;
      flex-direction: column;
    }

    .card-title {
      font-size: 1.25rem;
      margin-bottom: 10px;
      font-weight: 600;
    }

    .card-description {
      flex: 1;
      font-size: 0.9rem;
      margin-bottom: 15px;
      color: #555;
    }

    .quantity-selector {
      display: flex;
      align-items: center;
      gap: 5px;
      margin-bottom: 10px;
    }

    .quantity-selector button {
      background-color: #2d7f0b;
      border: none;
      color: #fff;
      padding: 4px 8px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 0.9rem;
      transition: background 0.3s;
    }

    .quantity-selector button:hover {
      background-color: #1a5c06;
    }

    .quantity-selector input {
      width: 40px;
      text-align: center;
      border: 1px solid #ccc;
      border-radius: 4px;
      padding: 4px;
      font-size: 0.9rem;
    }

    .card-buttons {
      display: flex;
      justify-content: space-between;
      margin-top: 10px;
    }

    .card-buttons button {
      padding: 8px 12px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background 0.3s;
      font-size: 0.9rem;
    }

    .add-to-cart {
      background-color: #2d7f0b;
      color: #fff;
    }

    .add-to-cart:hover {
      background-color: #1a5c06;
    }

    .buy-now {
      background-color: #f39c12;
      color: #fff;
    }

    .buy-now:hover {
      background-color: #d35400;
    }

    .detail-link {
      margin-top: 10px;
      text-align: center;
      color: #2d7f0b;
      font-weight: 600;
      cursor: pointer;
      transition: color 0.3s;
    }

    .detail-link:hover {
      color: #1a5c06;
    }

    /* Sidebar Styles */
    .sidebar {
      height: 100%;
      width: 0;
      position: fixed;
      top: 0;
      right: 0;
      background-color: #333;
      color: #fff;
      overflow-x: hidden;
      transition: width 0.5s;
      padding-top: 60px;
      z-index: 1001;
    }

    .sidebar .closebtn {
      position: absolute;
      top: 20px;
      right: 25px;
      font-size: 36px;
      cursor: pointer;
    }

    .sidebar-content {
      padding: 20px;
    }

    .sidebar-content h2 {
      margin-bottom: 20px;
    }

    .sidebar-content img {
      width: 100%;
      height: auto;
      border-radius: 8px;
      margin-bottom: 15px;
    }

    /* Responsive Adjustments */
    @media (max-width: 600px) {
      .navbar {
        flex-direction: column;
        align-items: flex-start;
      }

      .navbar .nav-links {
        margin-top: 10px;
      }

      #cartDropdown {
        right: 10px;
      }

      .image-gallery-wrapper {
        padding: 60px 10px 20px;
        height: 100px; /* Reduced height for smaller screens */
      }

      .slide img {
        height: 100px; /* Adjust image height for smaller screens */
      }

      .main {
        padding: 160px 20px 20px; /* Adjusted padding-top for smaller screens */
      }

      .quantity-selector input {
        width: 30px;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <div class="navbar">
    <div class="logo"><p style="font-size: 32px; font-weight: bold; color: #4CAF50; border: 2px solid #4CAF50; padding: 5px; display: inline;">
                    AGRI--CURE
                </p></div>
    <div class="nav-links">
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Contact</a>
    </div>
    <div class="nav-right">
      <button class="filter-button">Filter</button>
      <div class="cart-icon" onclick="toggleCartDropdown()">
        <img src="https://img.icons8.com/ios-filled/50/ffffff/shopping-cart.png" alt="Cart">
        <span id="cartBadge" class="cart-badge">0</span>
      </div>
      <div id="cartDropdown">
        <h4>Your Cart</h4>
        <div id="cartItems">
          <p>Your cart is empty.</p>
        </div>
      </div>
    </div>
  </div>

<!-- Slideshow-Style Horizontal Image Gallery -->
<div class="image-gallery-wrapper" style="overflow: hidden; width: 100%; height: auto;">
    <div class="image-gallery" style="display: flex; transition: transform 0.5s ease;">
        <!-- Slide 1 -->
        <div class="slide active">
            <img src="images/about4.jpg" alt="Featured Product 1" style="width: 100%; height: auto; max-height: 400px; object-fit: cover;">
        </div>
        <!-- Slide 2 -->
        <div class="slide">
            <img src="images/about8.avif" alt="Featured Product 2" style="width: 100%; height: auto; max-height: 400px; object-fit: cover;">
        </div>
        <!-- Slide 3 -->
        <div class="slide">
            <img src="images/about9.jpg" alt="Featured Product 3" style="width: 100%; height: auto; max-height: 400px; object-fit: cover;">
        </div>
        <!-- Slide 3 -->
        <div class="slide">
            <img src="images/about1.jpg" alt="Featured Product 3" style="width: 100%; height: auto; max-height: 400px; object-fit: cover;">
        </div>
        <!-- Optional: Add more slides below as needed -->
        <!-- Example:
        <div class="slide">
            <img src="images/your-image4.jpg" alt="Featured Product 4" style="width: 100%; height: auto; max-height: 400px; object-fit: cover;">
        </div>
        -->
    </div>
</div>


  <!-- Main Content -->
  <div class="main">
    <div class="cards-container">
      <!-- Card 1 -->
      <div class="card">
        <img src="images/ferti.jpg" alt="Product 1">
        <div class="card-content">
          <div class="card-title">N.P.K Fertilizer</div>
          <div class="card-description">
          N.P.K fertilizer boosts plant growth with nitrogen, phosphorus, and potassium, essential for healthy plants. Ideal for gardening.
          </div>
          <div class="quantity-selector">
            <button onclick="decreaseQuantity('Stylish Backpack')">-</button>
            <input type="number" id="qty-Stylish Backpack" value="1" min="1">
            <button onclick="increaseQuantity('Stylish Backpack')">+</button>
          </div>
          <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Stylish Backpack')">Add to Cart</button>
            <button class="buy-now">Buy Now</button>
          </div>
          <div class="detail-link" onclick="openSidebar('Stylish Backpack')">View Details</div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="card">
        <img src="images/opulent.jpg" alt="Product 2">
        <div class="card-content">
          <div class="card-title">Elegant Watch</div>
          <div class="card-description">
            Timeless design with modern features. Perfect for any occasion.
          </div>
          <div class="quantity-selector">
            <button onclick="decreaseQuantity('Elegant Watch')">-</button>
            <input type="number" id="qty-Elegant Watch" value="1" min="1">
            <button onclick="increaseQuantity('Elegant Watch')">+</button>
          </div>
          <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Elegant Watch')">Add to Cart</button>
            <button class="buy-now">Buy Now</button>
          </div>
          <div class="detail-link" onclick="openSidebar('Elegant Watch')">View Details</div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="card">
        <img src="" alt="Product 3">
        <div class="card-content">
          <div class="card-title">Comfortable Sneakers</div>
          <div class="card-description">
            Lightweight and comfortable sneakers designed for everyday wear.
          </div>
          <div class="quantity-selector">
            <button onclick="decreaseQuantity('Comfortable Sneakers')">-</button>
            <input type="number" id="qty-Comfortable Sneakers" value="1" min="1">
            <button onclick="increaseQuantity('Comfortable Sneakers')">+</button>
          </div>
          <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Comfortable Sneakers')">Add to Cart</button>
            <button class="buy-now">Buy Now</button>
          </div>
          <div class="detail-link" onclick="openSidebar('Comfortable Sneakers')">View Details</div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="card">
        <img src="https://images.unsplash.com/photo-1611095564989-1e7d1f15a047?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=60" alt="Product 4">
        <div class="card-content">
          <div class="card-title">Modern Lamp</div>
          <div class="card-description">
            Illuminate your space with this sleek and energy-efficient lamp.
          </div>
          <div class="quantity-selector">
            <button onclick="decreaseQuantity('Modern Lamp')">-</button>
            <input type="number" id="qty-Modern Lamp" value="1" min="1">
            <button onclick="increaseQuantity('Modern Lamp')">+</button>
          </div>
          <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Modern Lamp')">Add to Cart</button>
            <button class="buy-now">Buy Now</button>
          </div>
          <div class="detail-link" onclick="openSidebar('Modern Lamp')">View Details</div>
        </div>
      </div>

      <!-- Add more cards as needed -->
    </div>
  </div>


  <!--multiple cards 2-->

  <div class="main">
    <div class="cards-container">
      <!-- Card 1 -->
      <div class="card">
        <img src="https://images.unsplash.com/photo-1586511925558-a4c6376fe65f?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=60" alt="Product 1">
        <div class="card-content">
          <div class="card-title">Stylish Backpack</div>
          <div class="card-description">
            A spacious and durable backpack perfect for all your travel needs.
          </div>
          <div class="quantity-selector">
            <button onclick="decreaseQuantity('Stylish Backpack')">-</button>
            <input type="number" id="qty-Stylish Backpack" value="1" min="1">
            <button onclick="increaseQuantity('Stylish Backpack')">+</button>
          </div>
          <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Stylish Backpack')">Add to Cart</button>
            <button class="buy-now">Buy Now</button>
          </div>
          <div class="detail-link" onclick="openSidebar('Stylish Backpack')">View Details</div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="card">
        <img src="https://images.unsplash.com/photo-1606813902594-8b5a9a3f2f8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=60" alt="Product 2">
        <div class="card-content">
          <div class="card-title">Elegant Watch</div>
          <div class="card-description">
            Timeless design with modern features. Perfect for any occasion.
          </div>
          <div class="quantity-selector">
            <button onclick="decreaseQuantity('Elegant Watch')">-</button>
            <input type="number" id="qty-Elegant Watch" value="1" min="1">
            <button onclick="increaseQuantity('Elegant Watch')">+</button>
          </div>
          <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Elegant Watch')">Add to Cart</button>
            <button class="buy-now">Buy Now</button>
          </div>
          <div class="detail-link" onclick="openSidebar('Elegant Watch')">View Details</div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="card">
        <img src="https://images.unsplash.com/photo-1560185127-6ca5baff7e04?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=60" alt="Product 3">
        <div class="card-content">
          <div class="card-title">Comfortable Sneakers</div>
          <div class="card-description">
            Lightweight and comfortable sneakers designed for everyday wear.
          </div>
          <div class="quantity-selector">
            <button onclick="decreaseQuantity('Comfortable Sneakers')">-</button>
            <input type="number" id="qty-Comfortable Sneakers" value="1" min="1">
            <button onclick="increaseQuantity('Comfortable Sneakers')">+</button>
          </div>
          <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Comfortable Sneakers')">Add to Cart</button>
            <button class="buy-now">Buy Now</button>
          </div>
          <div class="detail-link" onclick="openSidebar('Comfortable Sneakers')">View Details</div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="card">
        <img src="https://images.unsplash.com/photo-1611095564989-1e7d1f15a047?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=60" alt="Product 4">
        <div class="card-content">
          <div class="card-title">Modern Lamp</div>
          <div class="card-description">
            Illuminate your space with this sleek and energy-efficient lamp.
          </div>
          <div class="quantity-selector">
            <button onclick="decreaseQuantity('Modern Lamp')">-</button>
            <input type="number" id="qty-Modern Lamp" value="1" min="1">
            <button onclick="increaseQuantity('Modern Lamp')">+</button>
          </div>
          <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Modern Lamp')">Add to Cart</button>
            <button class="buy-now">Buy Now</button>
          </div>
          <div class="detail-link" onclick="openSidebar('Modern Lamp')">View Details</div>
        </div>
      </div>

      <!-- Add more cards as needed -->
    </div>
  </div>
  <!--multiple cards 3-->

  <div class="main">
    <div class="cards-container">
      <!-- Card 1 -->
      <div class="card">
        <img src="https://images.unsplash.com/photo-1586511925558-a4c6376fe65f?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=60" alt="Product 1">
        <div class="card-content">
          <div class="card-title">Stylish Backpack</div>
          <div class="card-description">
            A spacious and durable backpack perfect for all your travel needs.
          </div>
          <div class="quantity-selector">
            <button onclick="decreaseQuantity('Stylish Backpack')">-</button>
            <input type="number" id="qty-Stylish Backpack" value="1" min="1">
            <button onclick="increaseQuantity('Stylish Backpack')">+</button>
          </div>
          <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Stylish Backpack')">Add to Cart</button>
            <button class="buy-now">Buy Now</button>
          </div>
          <div class="detail-link" onclick="openSidebar('Stylish Backpack')">View Details</div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="card">
        <img src="https://images.unsplash.com/photo-1606813902594-8b5a9a3f2f8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=60" alt="Product 2">
        <div class="card-content">
          <div class="card-title">Elegant Watch</div>
          <div class="card-description">
            Timeless design with modern features. Perfect for any occasion.
          </div>
          <div class="quantity-selector">
            <button onclick="decreaseQuantity('Elegant Watch')">-</button>
            <input type="number" id="qty-Elegant Watch" value="1" min="1">
            <button onclick="increaseQuantity('Elegant Watch')">+</button>
          </div>
          <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Elegant Watch')">Add to Cart</button>
            <button class="buy-now">Buy Now</button>
          </div>
          <div class="detail-link" onclick="openSidebar('Elegant Watch')">View Details</div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="card">
        <img src="https://images.unsplash.com/photo-1560185127-6ca5baff7e04?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=60" alt="Product 3">
        <div class="card-content">
          <div class="card-title">Comfortable Sneakers</div>
          <div class="card-description">
            Lightweight and comfortable sneakers designed for everyday wear.
          </div>
          <div class="quantity-selector">
            <button onclick="decreaseQuantity('Comfortable Sneakers')">-</button>
            <input type="number" id="qty-Comfortable Sneakers" value="1" min="1">
            <button onclick="increaseQuantity('Comfortable Sneakers')">+</button>
          </div>
          <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Comfortable Sneakers')">Add to Cart</button>
            <button class="buy-now">Buy Now</button>
          </div>
          <div class="detail-link" onclick="openSidebar('Comfortable Sneakers')">View Details</div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="card">
        <img src="https://images.unsplash.com/photo-1611095564989-1e7d1f15a047?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=60" alt="Product 4">
        <div class="card-content">
          <div class="card-title">Modern Lamp</div>
          <div class="card-description">
            Illuminate your space with this sleek and energy-efficient lamp.
          </div>
          <div class="quantity-selector">
            <button onclick="decreaseQuantity('Modern Lamp')">-</button>
            <input type="number" id="qty-Modern Lamp" value="1" min="1">
            <button onclick="increaseQuantity('Modern Lamp')">+</button>
          </div>
          <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Modern Lamp')">Add to Cart</button>
            <button class="buy-now">Buy Now</button>
          </div>
          <div class="detail-link" onclick="openSidebar('Modern Lamp')">View Details</div>
        </div>
      </div>

      <!-- Add more cards as needed -->
    </div>
  </div>
  <!--multiple cards 4-->

  <div class="main">
    <div class="cards-container">
      <!-- Card 1 -->
      <div class="card">
        <img src="https://images.unsplash.com/photo-1586511925558-a4c6376fe65f?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=60" alt="Product 1">
        <div class="card-content">
          <div class="card-title">Stylish Backpack</div>
          <div class="card-description">
            A spacious and durable backpack perfect for all your travel needs.
          </div>
          <div class="quantity-selector">
            <button onclick="decreaseQuantity('Stylish Backpack')">-</button>
            <input type="number" id="qty-Stylish Backpack" value="1" min="1">
            <button onclick="increaseQuantity('Stylish Backpack')">+</button>
          </div>
          <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Stylish Backpack')">Add to Cart</button>
            <button class="buy-now">Buy Now</button>
          </div>
          <div class="detail-link" onclick="openSidebar('Stylish Backpack')">View Details</div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="card">
        <img src="https://images.unsplash.com/photo-1606813902594-8b5a9a3f2f8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=60" alt="Product 2">
        <div class="card-content">
          <div class="card-title">Elegant Watch</div>
          <div class="card-description">
            Timeless design with modern features. Perfect for any occasion.
          </div>
          <div class="quantity-selector">
            <button onclick="decreaseQuantity('Elegant Watch')">-</button>
            <input type="number" id="qty-Elegant Watch" value="1" min="1">
            <button onclick="increaseQuantity('Elegant Watch')">+</button>
          </div>
          <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Elegant Watch')">Add to Cart</button>
            <button class="buy-now">Buy Now</button>
          </div>
          <div class="detail-link" onclick="openSidebar('Elegant Watch')">View Details</div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="card">
        <img src="https://images.unsplash.com/photo-1560185127-6ca5baff7e04?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=60" alt="Product 3">
        <div class="card-content">
          <div class="card-title">Comfortable Sneakers</div>
          <div class="card-description">
            Lightweight and comfortable sneakers designed for everyday wear.
          </div>
          <div class="quantity-selector">
            <button onclick="decreaseQuantity('Comfortable Sneakers')">-</button>
            <input type="number" id="qty-Comfortable Sneakers" value="1" min="1">
            <button onclick="increaseQuantity('Comfortable Sneakers')">+</button>
          </div>
          <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Comfortable Sneakers')">Add to Cart</button>
            <button class="buy-now">Buy Now</button>
          </div>
          <div class="detail-link" onclick="openSidebar('Comfortable Sneakers')">View Details</div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="card">
        <img src="https://images.unsplash.com/photo-1611095564989-1e7d1f15a047?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=60" alt="Product 4">
        <div class="card-content">
          <div class="card-title">Modern Lamp</div>
          <div class="card-description">
            Illuminate your space with this sleek and energy-efficient lamp.
          </div>
          <div class="quantity-selector">
            <button onclick="decreaseQuantity('Modern Lamp')">-</button>
            <input type="number" id="qty-Modern Lamp" value="1" min="1">
            <button onclick="increaseQuantity('Modern Lamp')">+</button>
          </div>
          <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Modern Lamp')">Add to Cart</button>
            <button class="buy-now">Buy Now</button>
          </div>
          <div class="detail-link" onclick="openSidebar('Modern Lamp')">View Details</div>
        </div>
      </div>

      <!-- Add more cards as needed -->
    </div>
  </div>
  <!--multiple cards 2-->

  <div class="main">
    <div class="cards-container">
      <!-- Card 1 -->
      <div class="card">
        <img src="https://images.unsplash.com/photo-1586511925558-a4c6376fe65f?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=60" alt="Product 1">
        <div class="card-content">
          <div class="card-title">Stylish Backpack</div>
          <div class="card-description">
            A spacious and durable backpack perfect for all your travel needs.
          </div>
          <div class="quantity-selector">
            <button onclick="decreaseQuantity('Stylish Backpack')">-</button>
            <input type="number" id="qty-Stylish Backpack" value="1" min="1">
            <button onclick="increaseQuantity('Stylish Backpack')">+</button>
          </div>
          <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Stylish Backpack')">Add to Cart</button>
            <button class="buy-now">Buy Now</button>
          </div>
          <div class="detail-link" onclick="openSidebar('Stylish Backpack')">View Details</div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="card">
        <img src="https://images.unsplash.com/photo-1606813902594-8b5a9a3f2f8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=60" alt="Product 2">
        <div class="card-content">
          <div class="card-title">Elegant Watch</div>
          <div class="card-description">
            Timeless design with modern features. Perfect for any occasion.
          </div>
          <div class="quantity-selector">
            <button onclick="decreaseQuantity('Elegant Watch')">-</button>
            <input type="number" id="qty-Elegant Watch" value="1" min="1">
            <button onclick="increaseQuantity('Elegant Watch')">+</button>
          </div>
          <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Elegant Watch')">Add to Cart</button>
            <button class="buy-now">Buy Now</button>
          </div>
          <div class="detail-link" onclick="openSidebar('Elegant Watch')">View Details</div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="card">
        <img src="https://images.unsplash.com/photo-1560185127-6ca5baff7e04?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=60" alt="Product 3">
        <div class="card-content">
          <div class="card-title">Comfortable Sneakers</div>
          <div class="card-description">
            Lightweight and comfortable sneakers designed for everyday wear.
          </div>
          <div class="quantity-selector">
            <button onclick="decreaseQuantity('Comfortable Sneakers')">-</button>
            <input type="number" id="qty-Comfortable Sneakers" value="1" min="1">
            <button onclick="increaseQuantity('Comfortable Sneakers')">+</button>
          </div>
          <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Comfortable Sneakers')">Add to Cart</button>
            <button class="buy-now">Buy Now</button>
          </div>
          <div class="detail-link" onclick="openSidebar('Comfortable Sneakers')">View Details</div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="card">
        <img src="https://images.unsplash.com/photo-1611095564989-1e7d1f15a047?ixlib=rb-4.0.3&auto=format&fit=crop&w=687&q=60" alt="Product 4">
        <div class="card-content">
          <div class="card-title">Modern Lamp</div>
          <div class="card-description">
            Illuminate your space with this sleek and energy-efficient lamp.
          </div>
          <div class="quantity-selector">
            <button onclick="decreaseQuantity('Modern Lamp')">-</button>
            <input type="number" id="qty-Modern Lamp" value="1" min="1">
            <button onclick="increaseQuantity('Modern Lamp')">+</button>
          </div>
          <div class="card-buttons">
            <button class="add-to-cart" onclick="addToCart('Modern Lamp')">Add to Cart</button>
            <button class="buy-now">Buy Now</button>
          </div>
          <div class="detail-link" onclick="openSidebar('Modern Lamp')">View Details</div>
        </div>
      </div>

      <!-- Add more cards as needed -->
    </div>
  </div>

  <!--HR Animation-->
  <div style="position: relative; width: 80%; margin: 20px auto;">
    <hr style="
        border: none; 
        height: 5px; 
        background: #ff7e5f; 
        width: 0; 
        animation: progress 3s ease-in-out infinite; 
    " />
</div>

<style>
    @keyframes progress {
        0% { width: 0%; }
        25% { width: 100%; }
        100% { width: 0%; }
    }
</style>


  <!-- Sidebar -->
  <div id="productSidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeSidebar()">&times;</a>
    <div class="sidebar-content" id="sidebarContent">
      <h2>Product Details</h2>
      <p>Select a product to see its details here.</p>
    </div>
  </div>

  <!-- JavaScript -->
  <script>
    let cart = {};

    // Initialize cart display and slideshow
    document.addEventListener('DOMContentLoaded', () => {
      displayCartItems();
      startSlideshow();
    });

    /* Slideshow Functionality */
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;
    let slideInterval;

    function showSlide(index) {
      slides.forEach((slide, i) => {
        slide.classList.remove('active');
        if (i === index) {
          slide.classList.add('active');
        }
      });
    }

    function nextSlide() {
      currentSlide = (currentSlide + 1) % totalSlides;
      showSlide(currentSlide);
    }

    function startSlideshow() {
      slideInterval = setInterval(nextSlide, 3000); // Change image every 3 seconds
    }

    function pauseSlideshow() {
      clearInterval(slideInterval);
    }

    // Optional: Pause slideshow on hover and resume on mouse leave
    const imageGalleryWrapper = document.querySelector('.image-gallery-wrapper');
    imageGalleryWrapper.addEventListener('mouseenter', pauseSlideshow);
    imageGalleryWrapper.addEventListener('mouseleave', startSlideshow);

    /* Cart Functionality */
    function addToCart(productName) {
      const quantityInput = document.getElementById(`qty-${productName}`);
      let quantity = parseInt(quantityInput.value);

      if (quantity < 1 || isNaN(quantity)) {
        alert("Quantity must be at least 1.");
        return;
      }

      if (cart[productName]) {
        cart[productName] += quantity;
      } else {
        cart[productName] = quantity;
      }

      updateCartBadge();
      displayCartItems();
      alert(`${quantity} x ${productName} added to cart.`);
    }

    function updateCartBadge() {
      const cartBadge = document.getElementById('cartBadge');
      let totalItems = 0;
      for (let product in cart) {
        totalItems += cart[product];
      }
      cartBadge.textContent = totalItems;
    }

    function displayCartItems() {
      const cartItemsContainer = document.getElementById('cartItems');
      cartItemsContainer.innerHTML = '';

      if (Object.keys(cart).length === 0) {
        cartItemsContainer.innerHTML = '<p>Your cart is empty.</p>';
        return;
      }

      for (let product in cart) {
        const cartItem = document.createElement('div');
        cartItem.className = 'cart-item';
        cartItem.innerHTML = `
          <div class="item-info">
            <span>${product}</span>
            <div class="quantity-controls">
              <button onclick="decreaseCartItem('${product}')">-</button>
              <span>${cart[product]}</span>
              <button onclick="increaseCartItem('${product}')">+</button>
            </div>
          </div>
          <button onclick="removeCartItem('${product}')">Remove</button>
        `;
        cartItemsContainer.appendChild(cartItem);
      }
    }

    function removeCartItem(productName) {
      delete cart[productName];
      updateCartBadge();
      displayCartItems();
    }

    function decreaseCartItem(productName) {
      if (cart[productName] > 1) {
        cart[productName] -= 1;
        updateCartBadge();
        displayCartItems();
      } else {
        removeCartItem(productName);
      }
    }

    function increaseCartItem(productName) {
      cart[productName] += 1;
      updateCartBadge();
      displayCartItems();
    }

    function toggleCartDropdown() {
      const dropdown = document.getElementById('cartDropdown');
      dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
    }

    /* Sidebar Functionality */
    function openSidebar(productName) {
      const sidebar = document.getElementById('productSidebar');
      const sidebarContent = document.getElementById('sidebarContent');

      // Define product details based on productName
      const productDetails = {
        'Stylish Backpack': {
          description: 'A spacious and durable backpack perfect for all your travel needs.',
          image: 'images/npk.jpg',
          price: '$49.99'
        },
        'Elegant Watch': {
          description: 'Timeless design with modern features. Perfect for any occasion.',
          image: 'images/ferti1.webp',
          price: '$199.99'
        },
        'Comfortable Sneakers': {
          description: 'Lightweight and comfortable sneakers designed for everyday wear.',
          image: 'images/ferti2.jpg',
          price: '$89.99'
        },
        'Modern Lamp': {
          description: 'Illuminate your space with this sleek and energy-efficient lamp.',
          image: 'images/ferti3.jpg',
          price: '$59.99'
        }
        // Add more products as needed
      };

      const details = productDetails[productName] || {
        description: 'Product details not found.',
        image: '',
        price: ''
      };

      sidebarContent.innerHTML = `
        <h2>${productName}</h2>
        <img src="${details.image}" alt="${productName}">
        <p>${details.description}</p>
        <p><strong>Price:</strong> ${details.price}</p>
      `;

      sidebar.style.width = '350px';
    }

    function closeSidebar() {
      const sidebar = document.getElementById('productSidebar');
      sidebar.style.width = '0';
    }

    // Close cart dropdown when clicking outside
    window.onclick = function(event) {
      const dropdown = document.getElementById('cartDropdown');
      const cartIcon = document.querySelector('.cart-icon');
      if (!cartIcon.contains(event.target) && !dropdown.contains(event.target)) {
        dropdown.style.display = 'none';
      }
    }

    /* Quantity Selector Buttons */
    function decreaseQuantity(productName) {
      const quantityInput = document.getElementById(`qty-${productName}`);
      let currentValue = parseInt(quantityInput.value);
      if (currentValue > 1) {
        quantityInput.value = currentValue - 1;
      }
    }

    function increaseQuantity(productName) {
      const quantityInput = document.getElementById(`qty-${productName}`);
      let currentValue = parseInt(quantityInput.value);
      quantityInput.value = currentValue + 1;
    }
  </script>

<style>
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .back-to-top:hover {
        transform: scale(1.2);
        color: #e67e22; /* Change color on hover */
    }
    a:hover {
        color: #e67e22; /* Change color on hover for links */
    }
    .social-icons a {
        color: #ecf0f1; /* Default color for social icons */
        font-size: 24px;
        margin: 0 10px;
        transition: color 0.3s;
    }
    .social-icons a:hover {
        color: red; /* Change color to red on hover */
    }
</style>

    <!-- Footer Section -->
    <footer style="background: linear-gradient(135deg, #2c3e50, #34495e); color: #ecf0f1; position: relative; overflow: hidden; padding: 20px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <p class="logo" style="font-size: 28px; font-weight: bold; margin: 0; animation: fadeIn 1s; color: #4CAF50;">
                        AGRI--CURE
                    </p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="social-icons" style="text-align: center;">
                        <a href="https://www.facebook.com" target="_blank">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://www.twitter.com" target="_blank">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="https://www.instagram.com" target="_blank">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com" target="_blank">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="https://www.youtube.com" target="_blank">
                            <i class="bi bi-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12">
                    <p style="text-align: center; margin: 0; animation: fadeIn 1s;">&copy; 2024 AGRI--CURE</p>
                </div>
                <div class="col-lg-1 col-md-12 col-sm-12">
                    <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style="color: #ecf0f1; font-size: 24px; transition: transform 0.3s;">
                        <i class="bi bi-arrow-up-short"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Add JS libraries -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</body>
</html>
