<?php
    include('./dbconn/dbconn.php');
    //check if the submit button is clicked or not
    if(isset($_POST['login-submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        //sql to check the user with username and password exists or not
        $sql = "SELECT * FROM tbl_super_admin WHERE super_admin_username = '$username' AND super_admin_password = '$password'";

        //execute the sql query
        $result = mysqli_query($conn,$sql);

        //count the rows 
        $count = mysqli_num_rows($result);

        if($count==1){
            session_start();
            $row = mysqli_fetch_assoc($result);
            $_SESSION['super_admin_id'] = $row['super_admin_id'];
            
            //user is exist
            echo '
            <script>
                Swal.fire({
                    icon: "success",
                    text: "Login Successful!",
                    timer: 2000,
                    showConfirmButton: false
                }).then(() => {
                    window.location.href = "Components/home.php";
                })
            </script>';
        exit;
        } else{
            //user not available
            echo '
            <script>
                Swal.fire({
                    icon: "error",
                    text: "Username or Password is incorrect.",
                    timer:1000,
                    showConfirmButton: false
                })
            </script>';
        exit;
        }
    }
?>