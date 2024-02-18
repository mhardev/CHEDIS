<?php 
    include('../../Config/dbcon.php');
    session_start();
    $userId = $_SESSION['super_admin_id'];
    $inputPassword = md5($_POST['super_admin_id']);

    $sql = "SELECT password FROM `tbl_suer_admin` WHERE super_admin_id = $userId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $storedPassword = $row['super_admin_password'];
            if ($inputPassword == $storedPassword) {
                echo json_encode('1'); // Passwords match
            } else {
                echo json_encode('0'); // Passwords don't match
            }
        }
    } else {
        echo json_encode('0'); // User not found
    }
?>