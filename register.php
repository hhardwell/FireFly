<!--

  AUTHOR: Manvidas

 -->
<head>
  <link rel="stylesheet" type="text/css" href="css/accounts.css">
</head>
<body>
  <?php include "header.php"; ?>
  <form class="register-form" action="controllers/register.php" method="post">
    <p>Register</p>
    <input type="text" name="username" placeholder="Username" autocomplete="off"/>
    <input type="password" name="password" placeholder="Password" autocomplete="off"/>
    <input type="password" name="confirmPassword" placeholder="Confirm Password" autocomplete="off"/>
    <input type="text" name="email" placeholder="Email" autocomplete="off"/>
    <input type="text" name="name" placeholder="name" autocomplete="off"/>
    <input type="text" name="surname" placeholder="surname" autocomplete="off"/>
    <button class="background-orange" type="submit" name="Register">Register</button>
  </form>
  <?php include "footer.php"; ?>
</body>
