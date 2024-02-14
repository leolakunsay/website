<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title>INFOTECH CLOTHING</title>
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
      <div class="row">
        <div class="col-2">
          <h1> Give Yourself a<br> Nice Shirt!</h1>
          <p>Introducing our durable and affordable shirt <br>– crafted with quality materials to ensure long-lasting<br> wear without breaking the bank. Embrace comfort and<br> style with a piece that stands the test of time, perfect <br>for your everyday adventures> Discover the perfect blend<br> of resilience and affordability in our collection.</p>
          <a href="" class="btn">Explore Now &#8594;</a>
        </div>
        <div class="col-2">
          <img src="C:\Users\selyo\OneDrive\Pictures\website\image1.png">
        </div>
      </div>
      </div>
      </div>
      
      
        <div class="categories">
          <div class="small-container">
            <div class="row">
               <div class="col-3">
                 <img src="C:\Users\selyo\OneDrive\Pictures\website\images(1).png">
               </div>
               <div class="col-3">
                 <img src="C:\Users\selyo\OneDrive\Pictures\website\images(2).png">
               </div>
               <div class="col-3">
                 <img src="C:\Users\selyo\OneDrive\Pictures\website\images(3).png">
               </div>
               </div>
            </div>
        </div>
       
       <!-------- Featured Product ------->
       <div class="small-container">
         <h2 class="title">Featured Products</h2>
         <div class="row">
           <div class="col-4">
             <img src="C:\Users\selyo\OneDrive\Pictures\website\featured 1.jpeg">
             <h4> White Couple Coders </h4>
             <div class="rating">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               </div>
             <p>100</p>
            
           </div>
           
           <div class="col-4">
             <img src="C:\Users\selyo\OneDrive\Pictures\website\featured 2.jpeg">
             <h4> Black Couple Coders</h4>
             <div class="rating">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star-o"></i>
               </div>
             <p>100</p>
            
           </div>
           
            <div class="col-4">
             <img src="C:\Users\selyo\OneDrive\Pictures\website\featured 3.jpeg">
             <h4> Black Couple Coders (With Name Brand)</h4>
             <div class="rating">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               </div>
             <p>150</p>
             
           </div>
           
            <div class="col-4">
              <img src="C:\Users\selyo\OneDrive\Pictures\website\featured 4.jpeg">
              <h4>  White Couple Coders (With Name Brand)</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
              </div>
              <p>150</p>
             
            </div>
          </div>
          
          <h2 class="title">Latest Products</h2>
           <div class="row">
           <div class="col-4">
             <img src="C:\Users\selyo\OneDrive\Pictures\website\1.png">
             <h4> Cheezy Fire Wall </h4>
             <div class="rating">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               </div>
             <p>100</p>
            
           </div>
           
           <div class="col-4">
             <img src="C:\Users\selyo\OneDrive\Pictures\website\2.png">
             <h4> Worm Keller </h4>
             <div class="rating">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star-o"></i>
               </div>
             <p>100</p>
            
           </div>
           
            <div class="col-4">
             <img src="C:\Users\selyo\OneDrive\Pictures\website\3.png">
             <h4> Elite Phishing</h4>
             <div class="rating">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               </div>
             <p>150</p>
            
           </div>
           
            <div class="col-4">
              <img src="C:\Users\selyo\OneDrive\Pictures\website\4.png">
              <h4> Alpha Trojan </h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
              </div>
              <p>150</p>
              
            </div>
          </div>
           <div class="row">
             <div class="col-4">
               <img src="C:\Users\selyo\OneDrive\Pictures\website\5.png">
               <h4> Atomic 01 </h4>
               <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
               </div>
               <p>100</p>
              
             </div>
          
             <div class="col-4">
               <img src="C:\Users\selyo\OneDrive\Pictures\website\6.png">
               <h4> Teamplay Coders </h4>
               <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star-o"></i>
               </div>
               <p>100</p>
              
             </div>
          
             <div class="col-4">
               <img src="C:\Users\selyo\OneDrive\Pictures\website\7.png">
               <h4> Final Robocap Boss</h4>
               <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
               </div>
               <p>150</p>
               
             </div>
          
             <div class="col-4">
               <img src="C:\Users\selyo\OneDrive\Pictures\website\8.png">
               <h4> Ninja Thiefaklong</h4>
               <div class="rating">
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star"></i>
                 <i class="fa fa-star-half"></i>
               </div>
               <p>150</p>
              
             </div>
           </div>
            <div class="row">
              <div class="col-4">
                <img src="C:\Users\selyo\OneDrive\Pictures\website\9.png">
                <h4> Darling at home </h4>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p>100</p>
                
              </div>
           
              <div class="col-4">
                <img src="C:\Users\selyo\OneDrive\Pictures\website\10.png">
                <h4> Professor X-Code </h4>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-o"></i>
                </div>
                <p>100</p>
                
              </div>
           
              <div class="col-4">
                <img src="C:\Users\selyo\OneDrive\Pictures\website\11.png">
                <h4> Happy Skatertask </h4>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
                <p>150</p>
                
              </div>
           
              <div class="col-4">
                <img src="C:\Users\selyo\OneDrive\Pictures\website\12.png">
                <h4> Pythonatics</h4>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half"></i>
                </div>
                <p>150</p>
                
              </div>
              <div class="col-4">
                <img src="C:\Users\selyo\Downloads\Pacnonymous.jpg">
                <h4> Pacnonymous</h4>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star-half"></i>
                </div>
                <p>130</p>
            </div>
            <div class="col-4">
              <img src="C:\Users\selyo\Downloads\Sure No Error.jpg">
              <h4> Sure No Error</h4>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
              </div>
              <p>130</p>
          </div>
          <div class="col-4">
            <img src="C:\Users\selyo\Downloads\Html loves u.jpg">
            <h4> Html loves u</h4>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half"></i>
            </div>
            <p>130</p>
        </div>
        <div class="col-4">
          <img src="C:\Users\selyo\Downloads\Javaparel.jpg">
          <h4> Javaparel</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half"></i>
          </div>
          <p>130</p>
      </div>
      <div class="col-4">
        <img src="C:\Users\selyo\Downloads\Watdahil.jpg">
        <h4> Watdahil </h4>
        <div class="rating">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half"></i>
        </div>
        <p>130</p>
    </div>
        </div>
      
    <div class="offer">
      <div class="small-container">
        <div class="row">
         <div class="col-2">
          <img src="C:\Users\selyo\OneDrive\Pictures\website\ex.png" class="ex-img">
          </div>
          <div class="col-2">
            <p>Bundle Pack</p>
            <h1>Couple T-Shirt</h1>
            <small>Indulge in the essence of togetherness with our Couple T-shirts, a perfect blend of comfort and style designed for the dynamic duo. Crafted from high-quality, breathable fabric, these shirts provide a cozy fit that complements any adventure you embark on together.</small><br>
            <a href="Product.php" class="btn">Buy Now &#8594;</a>
            
          </div>
        </div>
      </div>
    </div>
          <!-- Testimonials Section -->
      <div class="testimonials">
        <div class="testimonial-container">
            <h2 class="title">Customer Testimonials</h2>
            <p class="subtitle">Read what our customers are saying about Infotech Clothing.</p>
            <div class="testimonial-wrapper">
                <div class="testimonial">
                    <img src="C:\Users\selyo\OneDrive\Pictures\website\Customer1.jpeg" alt="Customer 1">
                    <h3>Jan Jan Magay</h3>
                    <p>"Infotech Clothing's workout gear is amazing! The quality and durability make my gym sessions more enjoyable."</p>
                </div>
                <div class="testimonial">
                    <img src="C:\Users\selyo\OneDrive\Pictures\website\Customer2.jpeg" alt="Customer 2">
                    <h3>Niño Ecawat</h3>
                    <p>"Infotech Clothing has transformed my wardrobe with stylish and comfortable men's clothing. Their attention to detail and commitment to quality is unmatched."</p>
                </div>
                <div class="testimonial">
                    <img src="C:\Users\selyo\OneDrive\Pictures\website\Customer3.jpeg" alt="Customer 3">
                    <h3>Joshua Gonzalez</h3>
                    <p>"I recently purchased workout equipment from Infotech Clothing, and I'm beyond satisfied. The products are top-notch, and they've enhanced my home workouts. Kudos to the Infotech Clothing team!"</p>
                </div>
            </div>
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
