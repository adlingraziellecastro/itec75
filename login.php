<?php include('server.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <!--LINKS HERE-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Playfair Display SC' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>
    <style>
        .form-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .form-box {
            max-width: 500px;
            width: 400px;
            padding: 0px 13px 0px 13px;
        }

        .form-container label{
          font-family: 'Roboto Slab';
          font-size: 18px;
          margin-top: 15px;
        }

        .form-container input {
          border-radius: 20px;
          border: 1px solid #ccc;
        }

        .form-container input::placeholder {
          color: #000000;
          font-size: 15px;
          opacity: 50%;
        }

        .form-container button {
          align-items: center;
          width: 250px;
          background-color: #191528;
          font-family: 'Lato';
          font-size: 20px;
          border-radius: 20px;
          color: #ccc;
          margin: 30px 0px 8px 0px;
          box-shadow: 1px 3px 3px 0px #888888;
        }
        .form-container button:hover {
          background-color: #110E1B;
          color: #ccc;
        }
        .form-container button:active {
          background-color: #191528;
        }

        .form-container p {
          text-align: center;
        }

        .image-box img {
          width: 450px;
          height: 450px;
          object-fit: cover;
          border-radius: 0px 10px 10px 0px;
        }
    </style>
</head>
<body style="background-color: #5C162E;">
<div class="container form-container">
    <div class="row justify-content-center" style="background-color: #EADEDA; border-radius: 10px; box-shadow: 1px 1px 5px 0px #191528; height: 450px">
        <div class="col-md-6 d-flex justify-content-center" style="margin-top: 50px;">
            <div class="form-box">
                <form method="post" action="login.php">
                <?php include('errors.php'); ?>
                    <h3 class="text-center" style="font-family: 'Playfair Display'; font-size: 30px;">Login</h3>
                    <div class="form-group">
                        <label for="identifier">Email or Phone Number</label>
                        <input type="text" class="form-control" id="identifier" placeholder="Enter your email or phone number" name="identifier" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Email address</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required>
                    </div>
                    <center>
                    <button type="submit" class="btn" name="login_user">Submit</button>
                    </center>
                    <p>Don't have account yet? <a href="registration.php" style="color: #191528; font-weight: bolder;">Register</a> here.</p>
                </form>
            </div>
        </div>
        <div class="col-md-6 d-flex align-items-center justify-content-center">
            <div class="image-box">
                <img src="form.png" alt="Placeholder Image">
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>