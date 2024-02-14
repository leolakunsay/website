<?php
session_start(); 
include_once 'db_config.php'; 

// Check if the user is logged in
if(isset($_SESSION['username'])) {
    $loggedInUser = $_SESSION['username'];
}

// Establish a connection to the database
$link = connectDB();

// Check if the form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // Check if the form is for login or register
    if(isset($_POST['login'])){
        // Process login form
        
        // Retrieve username and password from the form
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // Perform a query to check if the username and password exist in the database
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($link, $sql);
        
        // Check if query executed successfully
        if($result){
            // Check if user exists
            if(mysqli_num_rows($result) == 1){
                // Store username in session variable
                $_SESSION['username'] = $username;

                // Redirect to the homepage
                header("Location: Homepage.php");
                exit;
            } else{
                echo "Invalid username or password.";
            }
        } else{
            echo "ERROR: Could not execute $sql. " . mysqli_error($link);
        }
    } elseif(isset($_POST['register'])){
        // Process registration form
        
        // Retrieve username, email, and password from the form
        $username = $_POST['reg_username'];
        $email = $_POST['email'];
        $password = $_POST['reg_password'];
        
        // Perform a query to insert user details into the database
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        if(mysqli_query($link, $sql)){
            header("Location: acc.php");

        } else{
            echo "ERROR: Could not execute $sql. " . mysqli_error($link);
        }
    }
}

// Close connection
mysqli_close($link);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=1.0">
    <title> Account | INFOTECH CLOTHING</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  
<div class="container">
    <div class="navbar">
        <div class="logo">
            <a href="Homepage.php"><img src="C:\Users\selyo\OneDrive\Pictures\website\logo.png" width="75px"></a>
        </div>
        <nav>
            <ul id="MenuItems">
                <li><a href="Homepage.php">Home</a></li>
                <li><a href=""></a></li>
                <li><a href="Product.php">Product</a></li>
                <li><a href="contact-us.php">Contact Us</a></li>
                <li><a href="acc.php">Account</a></li>
                <?php if(isset($loggedInUser)): ?>
                <li><a href="logout.php">Logout</a></li>
                <li><span><?php echo $loggedInUser; ?></span></li>
                <?php endif; ?>
            </ul>
        </nav>
        <a href="cart.php"></a><img src="C:\Users\selyo\OneDrive\Pictures\website\cart.png" width="30px" height="30px">
        <img src="C:\Users\selyo\OneDrive\Pictures\website\menu.png" class="menu-icon"  onclick="menutoggle()">
    </div>
</div>
     
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img src="C:\Users\selyo\OneDrive\Pictures\website\image1.png" width="100%">
            </div>
           
            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>
                        <hr id="Indicator">
                    </div>
               
                    <form id="LoginForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <input type="text" name="username" placeholder="Username">
                        <input type="password" name="password" placeholder="Password">
                        <button type="submit" class="btn" name="login">Login</button>
                        <a href="">Forgot Password</a>
                    </form>
               
                    <form id="RegForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <input type="text" name="reg_username" placeholder="Username">
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="reg_password" placeholder="Password">
                        <button type="submit" class="btn" name="register">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer Section -->
<footer>
    <div class="footer-container">
        <div class="footer-social">
            <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
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
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");
      
    function register(){
        RegForm.style.transform = "translateX(0px)";
        LoginForm.style.transform = "translateX(0px)";
        Indicator.style.transform = "translateX(100px)";
    }
        
    function login(){
        RegForm.style.transform = "translateX(300px)";
        LoginForm.style.transform = "translateX(300px)";
        Indicator.style.transform = "translateX(0px)";
    }
</script>

</body>
</html>
