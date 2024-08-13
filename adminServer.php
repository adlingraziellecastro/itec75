<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "db_enchanteparfum");
$errors = array();


//ADDING PRODUCT
if (isset($_POST['new'])) {
        $prodName = mysqli_real_escape_string($con, $_POST['prodName']);
        $prodPrice = mysqli_real_escape_string($con, $_POST['prodPrice']);
        $prodDetails = mysqli_real_escape_string($con, $_POST['prodDetails']);
        $prodQuan = mysqli_real_escape_string($con, $_POST['prodQuan']);
        $filename = mysqli_real_escape_string($con, $_FILES['image']['name']);
        $tempname = $_FILES['image']['tmp_name'];
        $folder = 'uploads/' . $filename;
        if(empty($filename)){
        	?>
        	<script>
            	alert("You need to upload an image.");
            	window.location = "admin.php";
        	</script>
        <?php
        }
        else {
        	$query = "INSERT INTO enchanteparfum_products (prodName, prodPrice, prodDetails, prodQuan, image) VALUES ('$prodName', '$prodPrice', '$prodDetails', '$prodQuan', '$filename')";
            ?>
            <script>
                alert("You succesfully added a new product!");
            	window.location = "admin.php";
            </script>
            <?php

        	if (mysqli_query($con, $query)) {
            	move_uploaded_file($tempname, $folder);
        	} 	else {
            	?>
            	<script>
                	alert("Error: <?php echo mysqli_error($con); ?>");
            	</script>
            	<?php
        	}
    	}
}

?>