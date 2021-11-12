<?php
    include "connection.php";
    $id=$_GET['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pass = $_POST['pass'];
    $dob = $_POST['dob'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $gender=$_POST['gender'];
    $sql = "Update register set fname = '$fname', lname = '$lname', password = '$pass', dob = '$dob', city='$city', state = '$state', gender = '$gender' where id = '$id'";
    $result = $conn->query($sql);
    echo "
    <script>
    alert('Values updated successfully');
    </script>";
?>