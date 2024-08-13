<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "db_enchanteparfum");
$errors = array();

// REGISTRATION ACTIVITY
if (isset($_POST['reg_user'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $password1 = mysqli_real_escape_string($con, $_POST['password1']);
    $password2 = mysqli_real_escape_string($con, $_POST['password2']);

    $result = mysqli_query($con, "SELECT * FROM enchanteparfum_users WHERE email='$email' OR phonenumber='$phonenumber'");
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['email'] === $email) {
            array_push($errors, "Email already exists!");
        }
        if ($user['phone'] === $phone) {
            array_push($errors, "Phone number already exists!");
        }
    } else {
        if ($password1 != $password2) {
            array_push($errors, "Passwords do not match!");
        } else {
            $password = password_hash($password1, PASSWORD_DEFAULT);
            mysqli_query($con, "INSERT INTO enchanteparfum_users (email, phonenumber, name, password) VALUES ('$email', '$phonenumber', '$name', '$password')");
            ?>
            <script>
                alert("Registration Successful");
                window.location = "login.php";
            </script>
            <?php
            exit();
        }
    }
}

// LOGIN ACTIVITY
if (isset($_POST['login_user'])) {
    $identifier = mysqli_real_escape_string($con, $_POST['identifier']); // This can be either email or phone number
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $user = "";
    $row = "";

    $result = mysqli_query($con, "SELECT * FROM enchanteparfum_users WHERE email='$identifier' OR phonenumber='$identifier'");

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        if ($identifier === $row['email'] || $identifier === $row['phonenumber']) {
            if (password_verify($password, $row['password'])) {
                $_SESSION['user_id'] = $row['user_id'];
                ?>
                <script>
                    alert("Login Successful");
                    window.location = "figma.html";
                </script>
                <?php
                exit();
            } else {
                array_push($errors, "Wrong password");
            }
        } else {
            array_push($errors, "Account does not exist!");
        }
    } else {
        array_push($errors, "Account does not exist!");
    }
}
?>
