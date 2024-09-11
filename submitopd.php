<?php
    include 'connection.php';

    if(isset($_POST['submit']))
    {
        $casetyp = $_POST['case_type'];
        $emerg = $_POST['emg'];
        $caseno = $_POST['caseno'];
        $doct = $_POST['doctor'];
        $casefees = $_POST['case_fees'];
        $dept = $_POST['dept'];
        $pname = $_POST['pname'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $zip = $_POST['zip'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        $paymode = $_POST['p_mode'];
        $occup = $_POST['occupation'];
        $religion = $_POST['religion'];
        $tknno = $_POST['token'];

        $sql = "INSERT into pdata(id, casetype, isemerg, casenum, doct, casefee, dept, name, age, gender, mob, address, city, pincode, state, country, paymode, occup, religion, tokenno) VALUES ('', '$casetyp', '$emerg', '$caseno', '$doct', '$casefees', '$dept', '$pname', '$age', '$gender', '$phone', '$address', '$city', '$zip', '$state', '$country', '$paymode', '$occup', '$religion', '$tknno')"; 
        if (mysqli_query($conn, $sql)) {
            // echo "New record has been added successfully ! Named: $pname" ;
            header('location:opdform.php');
            
         } else {
            echo "Error: " . $sql . ":-" . mysqli_error($conn);
         }
    }
?>