<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <title>Doctor Master</title>
    <style>
        
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        .split{
            height: 100%;
            width: 50%;
            position: fixed;
            z-index: 1;
            top: 0;
            overflow-x: hidden;
            padding-top: 20px;
        }

        .left{
            left: 0;
            /*background-color: rgb(254, 109, 109);*/
            background-color: #4070f4;
            
        }

        .right{
            right: 0;

            /*background-color: rgb(248, 120, 120);*/
            background-color: #4070f4;
        }

        .form-box{
            width: auto;
            height: auto;
            padding: 3%;
            margin-top: 70px;
            margin-left: 2%;
            margin-right: 2%;
            border-radius: 2%;
            box-shadow: 1px 2px 3px;
            background-color: white;
            
        }
        .container-tb{
            width: auto;
            height: auto;
            padding: 3%;
            margin-top: 70px;
            margin-left: 2%;
            margin-right: 2%;
            border-radius: 2%;
            box-shadow: 1px 2px 3px;
            background-color: white;
            max-height: 85%;
            max-width: 100%;
            overflow-y: scroll;
            overflow-x: scroll;
        }
        .table thead th {
             position: sticky; 
             top: 0; 
             z-index: 1;
             background-color: rgb(170, 167, 167); 
        }

        .form-box-inner{
            width: auto;
            height: auto;
            padding: 2%;
            align-items: center;
            border-radius: 2%;
            box-shadow: 1px 2px 5px;
            background-color: #4070f4;
        }
        .inputForm
        {
            -moz-border-radius:5px; /* Firefox */
            -webkit-border-radius: 5px; /* Safari, Chrome */
            -khtml-border-radius: 5px; /* KHTML */
            border-radius: 5px; /* CSS3 */
            /*behavior:url("border-radius.htc");*/
        }
    </style>
</head>
<body>
    <div class="split left">
        <div class="form-box">
            <form action="submit_doctor.php" method="POST">
                Doctor Name: <input class="inputForm" type="text" name="name" size="50%"/><br><br>

                <?php
                    include 'connection.php';
                    $query = "SELECT dep_name from department";
                    $results = $conn->query($query);
                ?>

                Department: 
                <select name="dept">
                    <?php
                        while($cat = mysqli_fetch_array($results, MYSQLI_ASSOC)):;
                    ?> 
                    <option value="<?php echo $cat['dep_name']; ?>">
                        <?php echo $cat['dep_name']; ?>
                    </option>
                    <?php endwhile; ?>
                </select>
                <!-- <input class="inputForm" type="text" name="dept" size="53%"/> -->
                <br><br>  
                
                Qualification: <input class="inputForm" type="text" name="quali"><br><br>
                Address: <input class="inputForm" type="text" name="address" size="60"><br><br>
                City: <input class="inputForm" type="text" name="city"/> State: <input class="inputForm" type="text" name="state"/><br><br>
                Phone no: <input class="inputForm" type="number" name="phone"/><br><br>
                <div class="form-box-inner">
                    <h3>Case Fees</h3>
                    New case: <input class="inputForm" type="number" name="newcase"/> Old case: <input class="inputForm" type="number" name="oldcase"/> <br><br>
                    Validity of Old Case: <input class="inputForm" type="number" name="validity"/> Days<br><br>
                    Emergency fees: <input class="inputForm" type="number" name="emergency"/>
                </div><br>
                <button class="btn btn-primary" type="submit" name="submit" value="submit">Save</button>
                <button class="btn btn-primary" type="reset" value="reset">Reset</button>
            </form>
        </div>
    </div>
    
    <div class="split right">
        <div class="container-tb">
        <table class="table table-striped" style="width:50%;">
            <thead>
                <tr>
                    <th scope="row">Name</th>
                    <th scope="row">Department</th>
                    <th scope="row">Qualification</th>
                    <th scope="row">Address</th>
                    <th scope="row">City</th>
                    <th scope="row">State</th>
                    <th scope="row">Phone</th>
                    <th scope="row">New Case</th>
                    <th scope="row">Old Case</th>
                    <th scope="row">Emergency</th>
                    <th scope="row">Case Validity</th>
                    <th scope="row" colspan="2">Action</th>
                </tr>
            </thead>
            
            <?php 
            include 'connection.php';
            $sql = "SELECT * from doctor";
            $result = $conn->query($sql);
            
            while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['department']; ?></td>
                    <td><?php echo $row['qualification']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['state']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['new_case_fee']; ?></td>
                    <td><?php echo $row['old_case_fee']; ?></td>
                    <td><?php echo $row['emergency_fee']; ?></td>
                    <td><?php echo $row['validity']; ?></td>
                    <td><a class="btn btn-danger" href="doctordelete.php?name=<?php echo $row['name']; ?>">Delete</a></td>
                </tr>
            <?php } ?>
        </table>
        
        </div><br><br>
        <button class="btn btn-primary" onClick="window.location.reload();" style="background-color: grey ; ">Refresh Page</button>
    </div>
</body>
</html>