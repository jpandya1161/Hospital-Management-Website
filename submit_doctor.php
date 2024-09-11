<?php
    include 'connection.php';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $dept = $_POST['dept'];
        $qualification = $_POST['quali'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $phnno = $_POST['phone'];
        $new_case = $_POST['newcase'];
        $old_case = $_POST['oldcase'];
        $validity = $_POST['validity'];
        $emer = $_POST['emergency'];

        $sql = "INSERT into doctor (name,department,qualification,address,city,state,phone,new_case_fee,old_case_fee,emergency_fee,validity) VALUES ('$name','$dept','$qualification','$address','$city','$state','$phnno','$new_case','$old_case','$emer','$validity')";
        if (mysqli_query($conn, $sql)) {
            header('location:doctor_master.php');
         } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
         }
         mysqli_close($conn);
    }
?>