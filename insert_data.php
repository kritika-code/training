<?php
    include("connection.php");
    if(isset($_POST['Insert']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $pass = $_POST['pass'];
        $dob = $_POST['dob'];
        $state=$_POST['state'];
        $city=$_POST['city'];
        $gender=$_POST['gender'];
        $sql = "Insert into register (fname, lname, password, dob, city, state, gender) VALUES ('$fname','$lname','$pass','$dob','$state','$city','$gender')";
        print $sql;
        $result = $conn->query($sql);
        echo "
        <script>
        alert('Values inserted successfully');
        </script>";
    }
?>