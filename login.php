<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
        <h2>Login</h2>
  </div>
         
  <form method="post" action="login.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" placeholder="Username" id="placeholder" autocomplete="off">
        </div>
        <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Password" id="placeholder">
        </div>
        <div class="input-group">
                <button type="submit" class="btn" name="login_user">Login</button>
        </div>
        <p>
                Don't have an account? <a href="register.php">Sign up</a>
        </p>
  </form>
</body>
</html>