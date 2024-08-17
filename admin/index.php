<? session_start(); ?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website with Login & Signup Form | CodingNepal</title>
    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="../style.css">
    <script src="script.js" defer></script>
</head>

<body>
    <header>
        <nav class="navbar">
            <span class="hamburger-btn material-symbols-rounded">menu</span>
            <a href="#" class="logo">
                <img src="../images/logo.jpg" alt="logo">
                <h2>CodingNepal</h2>
            </a>
            <ul class="links">
                <span class="close-btn material-symbols-rounded">close</span>
                <li><a href="#">Home</a></li>
                <li><a href="../portfolio/index.php">Portfolio</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
            
            <a class="login-btn" href="../index.php">LOGOUT</a>
        </nav>
    </header>
    <div class="blur-bg-overlay"></div>
<div class="form-popup">
    <span class="close-btn material-symbols-rounded">close</span>
    <div class="form-box login">
        <div class="form-details">
            <h2>Welcome Back</h2>
            <p>Please log in using your personal information to stay connected with us.</p>
        </div>
        <div class="form-content">
            <h2>LOGIN</h2>
            <form action="index.php" method="post">
                <div class="input-field">
                    <input type="text" name="email">
                    <label>Email</label>
                </div>
                <div class="input-field">
                    <input type="password" name="password">
                    <label>Password</label>
                </div>
                <a href="#" class="forgot-pass-link">Forgot password?</a>
                <button type="submit" name="submit1">Log In</button>
            </form>
            <div class="bottom-link">
                Don't have an account?
                <a href="#" id="signup-link">Signup</a>
            </div>
        </div>
    </div>
    <div class="form-box signup">
        <div class="form-details">
            <h2>Create Account</h2>
            <p>To become a part of our community, please sign up using your personal information.</p>
        </div>
        <div class="form-content">
            <h2>SIGNUP</h2>
            <form action="index.php" method="post">
                <div class="input-field">
                    <input type="text" name="name">
                    <label>Name</label>
                </div>
                <div class="input-field">
                    <input type="text" name="email">
                    <label>Email</label>
                </div>
                <div class="input-yy">
                    <input type="text" name="tel" placeholder="Tel">
                    <input type="text" name="age" placeholder="Age">
                </div>
                <div class="input-yy">
                    <input type="password" name="password" placeholder="New password">
                    <input type="password" name="cpassword" placeholder="password">
                </div>
                <div class="policy-text">
                    <label for="policy">User</label>
                    <input type="radio" value="user" name="check">
                    <label for="policy">Admin</label>
                    <input type="radio" value="admin" name="check">
                </div>
                <button type="submit" name="submit">Sign Up</button>
            </form>
            <div class="bottom-link">
                Already have an account?
                <a href="#" id="login-link">Login</a>
            </div>
        </div>
    </div>
</div>
</body>

</html>