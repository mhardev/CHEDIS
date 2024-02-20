<?php 

    $sql = "SELECT * FROM tbl_admin";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>
                    <td>" . $row['admin_id'] . "</td>
                    <td>" . $row['admin_first_name'] . "</td>
                    <td>" . $row['admin_email'] . "</td>
                    <td>" . $row['admin_username'] . "</td>
                    <td>" . $row['admin_role'] . "</td>
                    <td>" . $row['admin_designation'] . "</td>
                    <td>
                        <button class='btn btn-primary' onclick='openUpdateModal(" . $row['admin_id'] . ", \"" . $row['admin_first_name'] . "\")'>Update</button>
                        <button class='btn btn-danger' onclick='deleteAccount(" . $row['admin_id'] . ")'>Delete</button>
                    </td>
                </tr>";
        }
    } else {
        //echo "0 results";
    }
?>
