<?php

if(isset($_POST['delete'])){
    $id = $_POST['id'];

    // Correct table name in the SQL query
    $sql = "DELETE FROM tbl_admin WHERE admin_id = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Account deleted successfully";
        header("Location: ".$_SERVER['HTTP_REFERER']);
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
