<?php
session_start();

// Check if the user is logged in
if(isset($_SESSION['username'])) {
    $dropdown_text = "Logout";
    $dropdown_link = "logout.php"; // Change this to your actual logout script
} else {
    $dropdown_text = "Login";
    $dropdown_link = "login.php"; // Change this to your actual login page
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Login</title>
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>
    <?php include('errors.php'); ?>
    <form method="post" action="server.php">
        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login_user">Login</button>
        </div>
        <p>
            Not yet a member? <a href="register.php">Sign up</a>
        </p>
    </form>
</body>
</html>
