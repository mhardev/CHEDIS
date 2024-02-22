<?php
include ('../../../dbconn/dbconn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming you have a form submission and using POST method

    $adminFirstName = $_POST['admin_fname'];
    $adminMiddleName = $_POST['admin_mname'];
    $adminLastName = $_POST['admin_lname'];
    $adminEmail = $_POST['email'];
    $adminRole = $_POST['role'];
    $adminDesignation = $_POST['designation'];
    $adminUsername = $_POST['uname'];
    $adminPassword = $_POST['pass'];

    // Add validation for input data if needed

    // Perform the SQL query to insert data into tbl_admin
    $sql = "INSERT INTO tbl_admin (admin_first_name, admin_middle_name, admin_last_name, admin_email, admin_role, admin_designation, admin_username, admin_password)
            VALUES ('$adminFirstName', '$adminMiddleName', '$adminLastName', '$adminEmail', '$adminRole', '$adminDesignation', '$adminUsername', '$adminPassword')";

    if (mysqli_query($conn, $sql)) {
        // Success
        $response = array('status' => 'success', 'message' => 'Admin account added successfully!');
    } else {
        // Error
        $response = array('status' => 'error', 'message' => 'Error adding admin account: ' . mysqli_error($conn));
    }

    // Convert the response to JSON and echo it
    echo json_encode($response);
    exit;
}
?>
