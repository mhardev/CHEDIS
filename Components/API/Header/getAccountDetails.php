<?php
    // Checking if admin_id is not set in the session
    if (!isset($_SESSION['super_admin_id'])) {
        // Redirecting to admin-login.php if session is not set
        echo '<script>
                Swal.fire({
                    icon: "error",
                    text: "You must login first before you proceed!",
                    timer:1500,
                    showConfirmButton: false
                }).then(() => {
                    window.location = "admin-login.php";
                })
            </script>';
    } else {
        $super_admin_id = $_SESSION['super_admin_id'];
        $sql = "SELECT * FROM `tbl_super_admin` WHERE super_admin_id = $super_admin_id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $super_admin_username = $row['super_admin_username'];
        }
    }
?>
