<?php
session_start();

if (isset($_POST["logout"])) {
    // Unset all session variables
    $_SESSION = [];
    
    // Destroy the session
    session_destroy();
?>
    <script>
    // JavaScript alert to display logout success message
    alert("You have been logged out successfully.");
    // Redirect to login page after showing alert
    window.location.href = "./login.php";
    </script>
    <?php
    exit();
}
?>  
