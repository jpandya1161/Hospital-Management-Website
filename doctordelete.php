<?php 

include "connection.php"; 

if (isset($_GET['name'])) {

    $name = $_GET['name'];

    $sql = "DELETE FROM `doctor` WHERE `name`='$name'";

     $result = $conn->query($sql);

     if ($result == TRUE) {
        header('location:doctor_master.php');

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>