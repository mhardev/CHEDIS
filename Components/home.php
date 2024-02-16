<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHED Inventory System</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined">
    <link rel="stylesheet" href="../Root/css/style.css">
    <link rel="stylesheet" href="../Root/css/sidebar.css">
    <link rel="stylesheet" href="../Root/css/footer.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css"></link>
    </head>
<body>
    <div class="grid-container">
        <?php
            include('../dbconn/dbconn.php');
            include('./header.php');
            include('./sidebar.php');
        ?>
        <div class="main-container">
            <?php
                include('./body.php');
            ?>
        </div>
    </div>
    <p><a href="#" id="logoutLink">logout</a></p>
</body>
<?php
    include('../footer.php');
?>
<script src="../Root/js/logout.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
</html>