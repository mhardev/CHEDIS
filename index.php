<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHED-NCR Inventory System</title>
    <!-- Icon Libraries -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="Root/css/login.css">
    <link rel="stylesheet" href="Root/css/footer.css">
    <!-- CSS Libraries-->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"></link>
</head>
<body>
    <?php
        include('./login.php');
    ?>
</body>
<?php
    include('./footer.php');
?>
<!-- JavaScript Libraries -->
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
<!-- Custom JavaScript-->
<script src="Root/js/login.js"></script>
</html>
<?php
    include('./Validations/loginValidate.php');
?>