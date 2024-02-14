<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title> All Product | INFOTECH CLOTHING</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital@1&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
  
  .category-container {
      text-align: center;
      padding: 10px;
      background-color: #e74c3c; /* Light red background */
      box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.1);
      width: 100%;
      transition: height 0.3s ease-in-out;
  }

  .minimized {
      height: 50px;
      overflow: hidden;
  }

  .category-btn {
      display: inline-block;
      padding: 10px 20px;
      margin: 1px;
      font-size: 16px;
      text-decoration: none;
      color: #fff;
      background-color: #c0392b; /* Darker red */
      border-radius: 2px;
      cursor: pointer;
      transition: transform 0.3s ease-in-out, background-color 0.3s ease-in-out;
  }

  .category-btn:hover {
      transform: scale(1.05);
      background-color: #992d22; /* Darker background on hover */
  }
 
</style>
</head>
    <body>
  
      <div class="container">
        <div class="navbar">
        <div class="logo">
          <img src="C:\Users\selyo\OneDrive\Pictures\website\logo.png" width="75px">
        </div>
        <nav>
          <ul id="MenuItems">
            <li><a href="Homepage.php">Home</a></li>
            <li><a href=""></a></li>
            <li><a href="Product.php">Product</a></li>
            <li><a href="contact-us.php">Contact Us</a></li>
            <li><a href="acc.php">Account</a></li>
            <?php
                    // Check if a user is logged in
                    session_start();
                    if (isset($_SESSION['username'])) {
                        // Display the logged-in username
                        echo '<li><span>' . $_SESSION['username'] . '</span></li>';
                        // Logout
                        echo '<li><a href="logout.php">Logout</a></li>';
                    }
            ?>
          </ul>
        </nav>

        <!-- cart -->
        <div class="cart-icon" onclick="toggleCart()">
          <i class="fas fa-shopping-cart"></i>
          <span class="cart-count" id="cartCount">0</span>
        </div>

        <div class="cart-container" id="cartContainer">
          <div class="cart-header">
            <h3 class="cart-title" id="cartTitle">My Cart</h3>
              <button class="close-btn" onclick="toggleCart()">&times;</button>
              <span class="cart-count" id="cartCountHeader">0</span>
          </div>
          <div class="cart-items" id="cartItems">
          </div>
          <div class="checkout-button-container">
            <button class="checkout-button" onclick="checkout()">Checkout</button>
          </div>
          
        </div>

        <img src=C:\Users\selyo\OneDrive\Pictures\website\menu.png" class="menu-icon"  onclick="menutoggle()">
     
      </div>
      </div>
     
      <div class="category-container minimized">
        <a href="Product.php" class="category-btn" onclick="selectCategory('All Products')">All Products</a>
        <a href="Clothes.php" class="category-btn" onclick="selectCategory('T-Shirt')">T-Shirt</a>
        <a href="Sando.php" class="category-btn" onclick="selectCategory('Sando')">Sando</a>
        <a href="Hoodies.php" class="category-btn" onclick="selectCategory('Hoodies')">Hoodies</a>
        <a href="Shorts.php" class="category-btn" onclick="selectCategory('Shorts')">Shorts</a>
        <a href="Hat.php" class="category-btn" onclick="selectCategory('Hat')">Hat</a>
        <a href="Pillow.php" class="category-btn" onclick="selectCategory('Pillow')">Pillow</a>
        <a href="Mug.php" class="category-btn" onclick="selectCategory('Mug')">Mug</a>
        <!-- Add more categories as needed -->
    </div>
    
    <!-- Content of your website goes here -->
    
    <script>
        function selectCategory(category) {
            alert('You selected ' + category);
            // You can replace the alert with your desired functionality, such as navigating to a new page or updating content.
        }
    </script>
       
       <div class="row">
        <div class="col-4">
          <img src="C:\Users\selyo\OneDrive\Pictures\website\5.png">
          <h4> Atomic 01</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <p>100</p>
        <button class="addToCart" onclick="addToCart('Atomic 01', 100, 'C:\\Users\\selyo\\OneDrive\\Pictures\\website\\5.png', 'plus')">Add to Cart</button>
      </div>
      <div class="row">
        <div class="col-4">
          <img src="C:\Users\selyo\Downloads\Pacnonymous.jpg">
          <h4> Pacnonymous</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
          </div>
          <p>130</p>
        <button class="addToCart" onclick="addToCart('Pacnonymous', 130, 'C:\\Users\\selyo\\Downloads\\Pacnonymous.jpg', 'plus')">Add to Cart</button>
      </div>
    </div>

    <!-- Footer Section -->
    <footer>
      <div class="footer-container">
          <div class="footer-social">
            <a href="https://www.facebook.com/JMBaniqued132220?mibextid=ZbWKwL" class="social-icon"><i class="fab fa-facebook"></i></a>
            <a href="https://x.com/JayJay107167?t=lEj-N98HlXjKHOfVPV4ozg&s=09" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/aight_josh1once" class="social-icon"><i class="fab fa-instagram"></i></a>
          </div>
          <p>&copy; 2024 Infotech Clothing. All rights reserved.</p> 
      </div>
    </footer>
    <script>
      var MenuItems = document.getElementById("MenuItems");
   
      MenuItems.style.maxHeight = "0px";
      
      function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
        {
          MenuItems.style.maxHeight = "200px";
        }
        else
        {
          MenuItems.style.maxHeight = "0px";
        }
      }
    </script>

<script>
  var cartContainer = document.getElementById("cartContainer");
  var cartCount = 0;

  function toggleCart() {
    var cartContainer = document.getElementById("cartContainer");
    cartContainer.style.display = (window.getComputedStyle(cartContainer).display === "block") ? "none" : "block";

    var cartCountHeader = document.getElementById("cartCountHeader");
    cartCountHeader.style.display = (cartContainer.style.display === "block") ? "none" : "inline";
  }

    function addToCart(itemName, itemPrice, imageUrl, action) {
        if (action === 'plus') {
            cartCount++;
        } else {
            cartCount--;
        }
        updateCartCount();

        var cartItem = document.createElement("div");
        cartItem.classList.add("cart-item");
        cartItem.innerHTML = `
            <img src="${imageUrl}" alt="${itemName}">
            <span>${itemName} - $${itemPrice}</span>
            <button class="remove-btn" onclick="removeFromCart(this)"><i class="fas fa-trash-alt"></i></button>
        `;
        document.getElementById("cartItems").appendChild(cartItem);
    }

    function removeFromCart(item) {
        item.parentElement.remove();
        cartCount--;
        updateCartCount();
    }

  function updateCartCount() {
      var countElement = document.getElementById("cartCount");
      var cartCountHeader = document.getElementById("cartCountHeader");

      countElement.textContent = cartCount;
      cartCountHeader.textContent = cartCount;
  }
</script>

<script>
  function submitForm() {
      alert("Message sent!");
  }

  function checkout() {
      alert("Done Checkout");
  }

</script>


    </body>
</html>