<?php include('server.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <!--LINKS HERE-->
    <link rel="stylesheet" href="figma2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="bdy-bg">
    <!--NAVIGATION BAR-->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="#">Enchanté Parfum</a>
          <div class="nav-links">
            <a href="collection.html">Collections</a>
            <a href="shop.php">Shop</a>
            <a href="cart.php">
            <button type="button" class="btn btn-custom">
              <i class="bi bi-basket2-fill"></i>
            </button>
            </a>
            <a href="logout-success.php">Logout</a>
          </div>
        </div>
    </nav>
    <!--User's Cart-->
    <?php
                $user_id = $_SESSION['user_id'];
                $result_user = mysqli_query($con, "SELECT * FROM enchanteparfum_users WHERE user_id='$user_id'");
                $row_user = mysqli_fetch_array($result_user);
                ?>
        <h3><?php echo $row_user['name']; ?>'s Cart</h3>
        <?php
            $result = mysqli_query($con, "SELECT * FROM enchanteparfum_cart WHERE user_id='$user_id'");
            if(mysqli_num_rows($result) > 0){
                while ($row = mysqli_fetch_array($result)) {
                  $prod_id = $_GET['prod_id'];
                $result_user = mysqli_query($con, "SELECT * FROM enchanteparfum_products WHERE prod_id='$prod_id'");
                $row_user = mysqli_fetch_array($result_user);
                  ?>
        <div class="card w-75">
          <div class="card-body">
          <img src="uploads/<?php echo $row['image']; ?>" class="card-img-top" alt="...">
          <h5 class="card-title"><?php echo $row_user['prodName']; ?></h5>
          <p class="card-text"><?php echo $row_user['prodDetails']; ?></p>
          <p class="card-text"><?php echo $row_user['prodPrice']; ?></p>
          <p class="card-text"><?php echo $row_user['quantity']; ?></p>
          <form method="post" action="cart.php">
          <button class="btn btn-primary" name="remove">Remove from Cart</a>
          </form>
  </div>
</div>

        <?php
      }
    }
    ?>
    <!--FOOTER-->
    <div class="container-fluid footer">
      <div class="row">
        <div class="col-sm">
          <p class="navbar-brand">Enchanté Parfum</p>
          <div class="company">
            <a href="figma.html">Home  </a>|
            <a href="collection.html">  Collections  </a>|
            <a href="#">  About Us</a>
          </div>
          <p style="font-family: 'Lato'; font-size: 15px;">Enchanté Parfum © 2024. All Right Reserved.</p>
        </div>
        <div class="col-sm">
          <i class="bi bi-telephone-fill">  1017-887-3940</i><br>
          <i class="bi bi-envelope-open-fill">  enchanteparfum@company.com</i>
        </div>
        <div class="col-sm">
          <p style="font-family: 'Roboto Slab'; font-size: 20px;">About the Company</p>
          <p style="font-family: 'Lato'; font-size: 15px;">Enchanté Fragrances is a premier luxury perfume house dedicated to crafting enchanting and unforgettable scents. Founded on the principles of elegance, sophistication, and innovation, Enchanté Fragrances blends the art of traditional perfumery with modern techniques to create unique and captivating fragrances.</p>
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-instagram"></i></a>
          <a href="#"><i class="bi bi-twitter-x"></i></a>
        </div>
      </div>
  </div>
  </div>
    
    <!--SCRIPT HERE-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>

<?php include('errors.php'); ?>