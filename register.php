<?php include('server.php') ?>


<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <div class="header">
        <h2>Register</h2>
  </div>
        
  <form method="post" action="register.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
          <label>Username</label>
          <input type="text" name="username" placeholder="Username" id="placeholder" value="<?php echo $username; ?>" autocomplete="off">
        </div>
        <div class="input-group">
          <label>Email</label>
          <input type="email" name="email" placeholder="Email" id="placeholder" value="<?php echo $email; ?>" autocomplete="off">
        </div>
        <div class="input-group">
          <label>Password</label>
          <input type="password" name="password_1" placeholder="Password" id="placeholder">
        </div>
        <div class="input-group">
          <label>Confirm password</label>
          <input type="password" name="password_2" placeholder="Confirm Password" id="placeholder">
        </div>
        <div class="input-group">
          <button type="submit" class="btn" name="reg_user">Register</button>
        </div>
        <p>
                Already have an account? <a href="login.php">Sign in</a>
        </p>
  </form>
</body>
</html>