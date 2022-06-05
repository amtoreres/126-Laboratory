<?php
    session_start();
    if(!isset($_SESSION['email']))
        header("Location: register.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link type="text/css" rel="stylesheet" href="admin_panel.css">
</head>
<body>
    <div class="header">
        <div class="nav">
            <ul>
                <li><a href="logout.php">LOGOUT</a></li>
                <li><a href="index.php">HOME</a></li>
            </ul>
        </div>
    </div>
    
    <div class="container">
    <left class="navigation">
        <ul>
            <li><a href="user_info.php" target="if1">User Info</a></li>
            <li><a href="admin_info.php" target="if1">Admin Info</a></li>
        </ul>
    </left>
    <right>
        <iframe name="if1"></iframe>
    </right>
    </div>
</body>
</html>