<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHED Inventory System | Admin Accounts</title>
    <!-- Icon Libraries -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../Root/css/style.css">
    <link rel="stylesheet" href="../Root/css/header.css">
    <link rel="stylesheet" href="../Root/css/sidebar.css">
    <link rel="stylesheet" href="../Root/css/footer.css">
    <link rel="stylesheet" href="../Root/css/main.css">
    <link rel="stylesheet" href="../Root/css/tables.css">
    <!-- CSS Libraries-->
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css"></link>
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css"></link>
    <!-- JavaScript Libraries-->
    <script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="grid-container">
        <?php
            include('../dbconn/dbconn.php');
            session_start();
            include('../Validations/sessionChecker.php');
            include('./header.php');
            include('./sidebar.php');
        ?>
        <div class="main-container">
            <?php
                include('../Components/Tables/Accounts/user_accounts.php');
            ?>
        </div>
        <?php
            include("./Sections/Modals/Accounts/userModal.php");
            include('../footer.php');
        ?>
    </div>
</body>
<!-- JavaScript Libraries-->
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="../node_modules/jquery/dist/jquery.js"></script>
<script src="../node_modules/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="../node_modules/datatables.net-dt/js/dataTables.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<!-- Custom JavaScript -->
<script src="../Root/js/logout.js"></script>
<script src="../Root/js/sidebar.js"></script>
</html>