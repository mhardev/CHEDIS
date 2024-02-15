<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHED Inventory System</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="/Root/css/footer.css">
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css"></link>
</head>
<?php
    include('./Components/header.php');
    include('./Components/sidebar.php');
?>
<body>
    <?php
        include('./Components/body.php');
    ?>
    <p><a href="../Validations/logoutValidate.php">logout</a></p>
</body>
<?php
    include('../footer.php');
?>
<!-- JS Libraries -->
<script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="/node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
</html>