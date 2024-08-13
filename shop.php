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
    <!--Cards-->
    <div class="container-fluid crds" style="padding: 10px 50px 50px 50px;">
      <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php
      $result = mysqli_query($con, "SELECT * FROM enchanteparfum_products");
      if(mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_array($result)) {
          ?>
        <div class="col">
          <div class="card h-100">
            <img src="uploads/<?php echo $row['image']; ?>" class="card-img-top" alt="...">
            <div class="card-body" style="background-color: #EADEDA;">
              <h5 class="card-title" style="font-family: 'Yesteryear'; font-size: 35px; text-align: center;"><?php echo $row['prodName']?></h5>
              <p class="card-text" style="font-family: 'Lato'; font-size: 15px; text-align: center;">$<?php echo $row['prodPrice']?></p>
              <p class="card-text" style="font-family: 'Lato'; font-size: 15px; text-align: center;"><?php echo $row['prodDetails']?></p>
              <p class="card-text" style="font-family: 'Lato'; font-size: 15px; text-align: center;"><?php echo $row['prodQuan']?></p>
              <form method="post" action="shop.php">
              <input type="hidden" name="post_id" value="<?php echo $row['post_id']; ?>">
              <button type="submit" name="add-to-cart" class="btn btn-primary"> 
                Add to Cart
              </button>
          </form>
            </div>
          </div>
        </div>
        <?php 
        }
      }
      ?>
      </div>
      </div>
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
</div>
    
    <!--SCRIPT HERE-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>