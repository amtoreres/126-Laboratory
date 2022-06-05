<?php
include('dbconnection.php');
session_start();
$query = "SELECT * FROM admin";
?>
<!doctype html>
<html>

<head>
    <title> Food Gallery </title>
    <script type="text/javascript" src="hover.js"></script>
    <link rel="stylesheet" href="stylesheet.css">
</head>

<body>

    <div class="header">

        <div class="navigation">
            <ul class="nav">
                <?php
                if (isset($_SESSION['email'])) {
                ?>
                    <li>
                        <a href="logout.php">LOGOUT</a>
                    </li>
                <?php } else { ?>
                    <li><a href="register.php">LOGIN</a></li>
                <?php } ?>

                <?php if (isset($_SESSION['email'])) {
                    $run_query = mysqli_query($connection, $query);
                    while ($result = mysqli_fetch_assoc($run_query)) {
                        if ($result) {
                            if ($result['email'] == $_SESSION['email']) { ?>
                                <li><a href="admin_panel.php">ADMIN PANEL</a></li>
                            <?php } else { ?>
                                <li><a href="account.php">ACCOUNT</a></li>
                <?php }
                        }
                    }
                } ?>

                <?php if (isset($_SESSION['email'])) {
                    $flag = false;
                    $run_query = mysqli_query($connection, $query);
                    while ($result = mysqli_fetch_assoc($run_query)) {
                        if ($result)
                            if ($result['email'] == $_SESSION['email'])
                                $flag = true;
                    }
                } ?>

                <?php if (!isset($_SESSION['email'])) { ?>
                    <li><a href="menu.php">MENU</a></li>
                    <li><a href="contact.php">CONTACT</a></li><?php } ?>

            </ul>
        </div>
    </div>

    <div class="menu">
        <br>
        <div>
            <br><br>
            <h1> F O O D &nbsp &nbsp &nbsp G A L L E R Y </h1>
        </div>
        <div class="wrapper">
            <div class="gallery">
            <!-- <img src="home2.jpg" class="homeimage" alt="View of a beach"
                 id="1" onmouseover="imageEnlarge();" onmouseout="imageReset();" -->
                <br><br><br>
                <img src="Images/01.jpg" id = "1"  onmouseover="imageEnlarge(id);" onmouseout="imageReset(id);" width="200" height="150">
                &nbsp &nbsp &nbsp
                <img src="Images/02.jpg" id = "2"  onmouseover="imageEnlarge(id);" onmouseout="imageReset(id);" width="200" height="150">
                &nbsp &nbsp &nbsp
                <img src="Images/03.jpg" id = "3"  onmouseover="imageEnlarge(id);" onmouseout="imageReset(id);" width="200" height="150">
                &nbsp &nbsp &nbsp
            </div><br>

            <div class="gallery">
                <img src="Images/04.jpg" id = "4"  onmouseover="imageEnlarge(id);" onmouseout="imageReset(id);" width="200" height="150">
                &nbsp &nbsp &nbsp
                <img src="Images/05.jpg" id = "5"  onmouseover="imageEnlarge(id);" onmouseout="imageReset(id);" width="200" height="150">
                &nbsp &nbsp &nbsp
                <img src="Images/06.jpg" id = "6"  onmouseover="imageEnlarge(id);" onmouseout="imageReset(id);" width="200" height="150">
                &nbsp &nbsp &nbsp
            </div><br>

            <div class="gallery">
                <img src="Images/07.jpg" id = "7"  onmouseover="imageEnlarge(id);" onmouseout="imageReset(id);" width="200" height="150">
                &nbsp &nbsp &nbsp
                <img src="Images/08.jpg" id = "8"  onmouseover="imageEnlarge(id);" onmouseout="imageReset(id);" width="200" height="150">
                &nbsp &nbsp &nbsp
                <img src="Images/09.jpg" id = "9"  onmouseover="imageEnlarge(id);" onmouseout="imageReset(id);" width="200" height="150">
                &nbsp &nbsp &nbsp
            </div>
        </div>
    </div>

</body>

</html>

<?php
mysqli_close($connection);
?>