<!--

  AUTHOR: Manvidas

 -->

<head>
  <link rel="stylesheet" type="text/css" href="css/accounts.css">
</head>
<body>
  <?php include "header.php"; ?>
  <form class="login-form" action="controllers/login.php" method="post">
    <p>Login</p>
    <input type="text" name="username" placeholder="Username" autocomplete="off"/>
    <input type="password" name="password" placeholder="Password" autocomplete="off"/>
    <button class="background-orange" type="submit" name="Login">login</button>
  </form>
  <?php include "footer.php"; ?>
</body>
