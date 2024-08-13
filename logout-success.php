<?php
session_start();
session_unset();
session_destroy();
?>
<script>
	alert("Logout Succesful!");
	window.location="login.php";
</script>
<?php
exit();
?>