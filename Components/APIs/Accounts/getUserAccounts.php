<?php 

    $sql = "SELECT * FROM tbl_user";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>
                    <td>" . $row['user_id'] . "</td>
                    <td>" . $row['user_first_name'] . "</td>
                    <td>" . $row['user_email'] . "</td>
                    <td>" . $row['user_username'] . "</td>
                    <td>" . $row['user_role'] . "</td>
                    <td>" . $row['user_designation'] . "</td>
                    <td>
                        <button class='btn btn-primary' onclick='openUpdateModal(" . $row['user_id'] . ", \"" . $row['user_first_name'] . "\")'>Update</button>
                        <button class='btn btn-danger' onclick='deleteAccount(" . $row['user_id'] . ")'>Delete</button>
                    </td>
                </tr>";
        }
    } else {
        //echo "0 results";
    }
?>
