<?php
    include_once 'connection.php';
    $result = mysqli_query($conn,"SELECT * FROM register");
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Retrive data</title>
        <style>
            table{
                border-style:solid;
            }
        </style>
    </head>
    <body>
        <?php
            if (mysqli_num_rows($result) > 0) {
        ?>
            <table border="1">
                <tr>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Password</td>
                    <td>Date of Birth</td>
                    <td> City </td>
                    <td> State </td>
                    <td> Gender </td>
                    <td> </td>
                    <td> </td>
                </tr>
            <?php
                $i=0;
                while($row = mysqli_fetch_array($result)) {
                    $id=$row['Id'];
            ?>
                <tr>
                    <td><?php echo $row["fname"]; ?></td>
                    <td><?php echo $row["lname"]; ?></td>
                    <td><?php echo $row["password"]; ?></td>
                    <td><?php echo $row["dob"]; ?></td>
                    <td><?php echo $row["city"]; ?></td>
                    <td><?php echo $row["state"]; ?></td>
                    <td><?php echo $row["gender"]; ?></td>
                    <td><a href = 'update-file.php?id=<?php echo $id;?>'> Update </td>
                    <td><a href = 'delete.php?id=<?php echo $id;?>'> Delete </td>
                </tr>
            <?php
                $i++;
                }
            ?>
            </table>
            <?php
                }
                else{
                    echo "No result found";
                }
        ?>
    </body>
</html>