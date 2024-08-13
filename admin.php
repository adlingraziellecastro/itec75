<?php include('adminServer.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <!--LINKS HERE-->
    <link rel="stylesheet" href="figma.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="bdy-bg">
    <!--NAVIGATION BAR-->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="/">Enchanté Parfum</a>
          <div class="nav-links">
            <a href="logout-success.php">Logout</a>
          </div>
        </div>
    </nav>
    <!--FORM-->
    <h3>Add New Product</h3>
    <div class="form-box">
    <form action="admin.php" enctype="multipart/form-data" method="post">
    <div class="form-group">
      <label for="prodName">Product Name</label>
      <input type="text" class="form-control" id="prodName" placeholder="" name="prodName" required>
    </div>
    <div class="form-group">
      <label for="prodPrice">Product Price</label>
      <input type="text" class="form-control" id="prodPrice" placeholder="" name="prodPrice" required>
    </div>
    <div class="form-group">
      <label for="prodDetails">Details</label>
      <input type="text" class="form-control" id="prodDetails" placeholder="" name="prodDetails" required>
    </div>
    <div class="form-group">
      <label for="prodQuan">Quantity Available</label>
      <input type="number" class="form-control" id="prodQuan" placeholder="" name="prodQuan" required>
    </div>
    <div class="form-group">
      <label for="file-upload" id="file-upload-label">
      <input type="file" class="form-control" id="file-upload" placeholder="" name="image">
      </label>
    </div>
    <center>
    <button type="submit" class="btn" name="new">Add New Product</button>
    </center>
    </form>
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
    
    <!--SCRIPT HERE-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
