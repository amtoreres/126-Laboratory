<?php

include('dbconnection.php');

$query      =   "SELECT * FROM admin ORDER BY id ASC";
$run_query  =   mysqli_query($connection, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 6px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: inherit;
        }

        input[type=submit]:hover,
        input[type=file]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>ACTIVE ADMINS</h2><br>
        <table class="table table-bordered table table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>

                <?php
                while ($result = mysqli_fetch_assoc($run_query)) {
                    if ($result)
                        for ($i = 0; $i < count($result); $i++)
                ?>

                    <tr>
                        <td><?php echo $result['fullName'] ?></td>
                        <td><?php echo $result['email'] ?></td>
                        <td><?php echo $result['phone'] ?></td>
                    </tr> <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>


<?php


mysqli_close($connection);
?>