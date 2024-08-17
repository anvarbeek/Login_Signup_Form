<?php session_start();

// Sessiya o'zgaruvchilarini tekshirish va mavjud bo'lmasa yaratish
if (empty($_SESSION['users'])) {
  $_SESSION['users'] = [];
}
?>


<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Neumorphism Profile Card | CodingNepal</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
  <div class="wrapper">
    <div class="img-area">
      <div class="inner-area">
        <img src="https://images.unsplash.com/photo-1492288991661-058aa541ff43?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
      </div>
    </div>
    <div class="icon arrow"><i class="fas fa-arrow-left"><a href="logout.php" style="text-decoration: none;"><=</a></i></div>
    <div class="icon dots"><i class="fas fa-ellipsis-v"></i></div>
    <?php if (isset($_SESSION['users'])){ ?>
      <?php foreach ($_SESSION['users'] as $user){ ?>
        <div class="name">Name: <?php echo htmlspecialchars($user['name_u']); ?></div>
        <div class="about">Email: <?php echo htmlspecialchars($user['email_u']); ?></div>
        <div class="about">Age: <?php echo htmlspecialchars($user['age_u']); ?></div>
        <div class="about">Tel: <?php echo htmlspecialchars($user['tel_u']); ?></div>
        <div class="social-icons">
          
        </div>
      <?php } ?>
    <?php }else{ ?>
      <div>Ma'lumot yo'q</div>
    <?php } ?>

    <div class="buttons">
      <button>Message</button>
      <button>Subscribe</button>
    </div>

  </div>

</body>

</html>