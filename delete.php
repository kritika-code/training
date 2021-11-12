<?php
    include "connection.php";
    $id=$_GET['id'];
    $sql = "Delete from register where id = '$id'";
    $result = $conn->query($sql);
    echo "
    <script>
    alert('Values deleted successfully');
    window.location.href = "show.php";
    </script>";
?>