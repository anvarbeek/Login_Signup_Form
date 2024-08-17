<?php include 'header.php';
session_start();
if (empty($_SESSION['xotira'])) {
    $_SESSION['xotira'] = [];
}
?>
<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $age = $_POST['age'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $check = $_POST['check'];
    if ($name != '') {
        if ($email != '' && $tel != '' && $age !='') {
            if ($password != '' && $cpassword != '') {
                if ($password == $cpassword) {
                    if ($check != '' ) {
                        $isset = false;
                        foreach ($_SESSION['xotira'] as $xotira) {
                            if ($email == $xotira['email']) {
                                $isset = true;
                            }
                        }
                        if ($isset == true) {
                            header('location:index.php?error=bor');
                        } else {
                            array_push($_SESSION['xotira'], [
                                'name' => $name,
                                'email' => $email,
                                'tel' => $tel,
                                'age' => $age,
                                'password' => $password,
                                'check' => $check
                            ]);
                            header('location:index.php');
                        }
                    } else {
                        header('location:index.php?error=check');
                    }
                } else {
                    header('location:index.php?error=paspas');
                }
            } else {
                header('location:index.php?error=pas');
            }
        } else {
            header('location:index.php?error=email');
        }
    } else {
        header('location:index.php?error=name');
    }
}

if (isset($_POST['submit1'])) {
    $email1 = $_POST['email'];
    $password1 = $_POST['password'];
    if ($email1 != '') {
        if ($password1 != '') {
            foreach ($_SESSION['xotira'] as $xotira) {
                if ($email1 == $xotira['email']) {
                    if ($password1 == $xotira['password']) {
                        if($xotira['check'] == 'admin'){
                            header('location:user/index.php');
                        }else{

                            if (empty($_SESSION['users'])) {
                                $_SESSION['users'] = [];
                            }
                            array_push($_SESSION['users'], [
                                'name_u' => $xotira['name'],
                                'email_u' => $xotira['email'],
                                'age_u' => $xotira['age'],
                                'tel_u' => $xotira['tel']
                            ]);
                            header('location:admin/index.php');
                        }
                    }
                }
            }
        } else {
            header('location:index.php?error=passs');
        }
    } else {
        header('location:index.php?error=email1');
    }
}

?>
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