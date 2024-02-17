<?php   
    if (!isset($_SESSION['super_admin_id'])) {
        echo    '<script>
            Swal.fire({
                icon: "error",
                text: "You must login first before you proceed!",
                timer: 2000,
                showConfirmButton: false
            }).then(() => {
                window.location.href = "../index.php";
            })
        </script>';
        exit;
    }
?>