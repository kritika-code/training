<?php
    include_once 'connection.php';
    $id=$_GET['id'];
    $result = mysqli_query($conn,"select * from register where Id = $id");
    while($row = mysqli_fetch_array($result)) {
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Editted Data</title>
        <link rel="stylesheet" href="form-styles.css">
    </head>
    <body><center>
        <div class = "container">
        <table>
            <form action = "update.php?id=<?php echo $id;?>" method="POST">
            <tr>
                <td><label for= "First Name" >First Name</label></td>
                <td><input type = "text" id ='fname' name='fname' value = "<?php echo $row['fname'];?>"></td>
            </tr>
            <tr>
                <td><label for ="Last Name">Last Name</label></td>
                <td><input type = "text" id ='lname' name='lname' value = "<?php echo $row['lname'];?>"></td>
            </tr>
            <tr>
                <td>
                    <label for = "password">Password</label>
                    <td><input type = 'password' id ='pass' name='pass' value = "<?php echo $row['password'];?>"></td>
                </td>
            </tr>
            <tr>
                <td><label for = "DOB"> Enter Date of Birth</label></td>
                <td>
                    <input type = "date" id ='dob' name='dob' value = "<?php echo $row['dob'];?>">
                </td>
            </tr>
            <tr>
                <td><label for = "state">Enter City</label></td>
                <td><input type='text' id = 'city' name='city' value = "<?php echo $row['city'];?>"></td>
            </tr>
            <tr>
                <td><label for = "state">Enter State</label></td>
                <td><select id="state" name = 'state' class="form-select" value = "<?php echo $row['state'];?>">
                    <?php echo " ?><option value='<?php". $row['state'] ."?>'><?php " .$row['state'] ."? selected></option><?php"?>
                    <option>Choose...</option>    
                    
                    <option value="Punjab" >Punjab</option>
                    <option value="Haryana">Haryana</option>
                    <option value="HP">HP</option>
                    <option value="UP">UP</option>
                    <option value="...">...</option>
                  </select></td>
            </tr>
            <tr>
                <td><label for = "gender">Enter Gender</label></td>
                <td>
                    <div class="form-check">
                    <input type="radio" id="gender" name="gender" checked=<?php if($row['gender']=='Female') {echo 'true';} ?> value="Female" >
                    <label for="gender">
                        Female
                    </label>
                    <input type="radio" id="gender" name="gender" checked=<?php if($row['gender']=='Male') {echo 'true';} ?> value="Male">
                    <label for="gender">
                        Male
                    </label>
                  </div>
                </td>
            </tr>
            <tr>
                <td align = "center"><button type="Submit" name='action' id='Insert'>Update</button>
                </td>
            </tr>
            </form></table>
        </div></center>
    <?php
    }
    ?>
    </body>
</html>