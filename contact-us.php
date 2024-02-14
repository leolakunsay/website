<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name= "viewport" content="width=device-width, initial scale=1.0">
       <title> Contact Form</title>
       <link rel="stylesheet" href="style2.css">
       <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital@1&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
    <body>
      <div class="header">
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

       
        <img src="C:\Users\selyo\OneDrive\Pictures\website\menu.png" class="menu-icon"  onclick="menutoggle()">
     
      </div>
    </head>
<body>
      <div class="contact-container">
    <form action="https://api.web3forms.com/submit" method="POST" class="contact-left">
        <div class="contact-left-title"> 
            <h2>Get in touch</h2>
            <hr>
          </div>
          <input type="hidden" name="access_key" value="6aa29adc-5245-4405-81ab-643ae3fa1c9e">
          <input type="text" name="name" placeholder="Your Name" class="contact-inputs" required>
          <input type="email" name="email" placeholder="Your Email" class="contact-inputs" required>
        <textarea name="message" placeholder="Your Message..." class="contact-inputs" required></textarea> 
        <button type="submit"> Submit<img src=""  alt=""></button>
        </form>
     <div class="contact-right">
           <img src="C:\Users\selyo\Downloads\owl.jpg" alt="">
          </div>
        </div>
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
    
          function addToCart(itemName, itemPrice, imageUrl) {
              cartCount++;
              updateCartCount();
    
              var cartItem = document.createElement("div");
              cartItem.classList.add("cart-item");
              cartItem.innerHTML = `<img src="${imageUrl}" alt="${itemName}"><span>${itemName} - $${itemPrice}</span>`;
              document.getElementById("cartItems").appendChild(cartItem);
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
    