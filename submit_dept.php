<?php
    include 'connection.php';

    if(isset($_POST['submit'])){
        $dept = $_POST['dept'];

        $sql = "INSERT into department (dep_name) VALUES ('$dept')";
        if (mysqli_query($conn, $sql)) {
            header('location: dept_master.php');
         } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
         }
         mysqli_close($conn);
    }
?>