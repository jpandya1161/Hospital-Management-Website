<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    
    <title>Department Master</title>

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
            background-color: #4070f4;
        }

        .left-form-box{
            width: auto;
            height: auto;
            padding: 3%;
            margin-top: 70px;
            margin-left: 15%;
            margin-right: 4%;
            border-radius: 2%;
            box-shadow: 1px 2px 3px;
            background-color: white;
            
        }
        .right-form-box{
            width: auto;
            height: auto;
            padding: 3%;
            margin-top: 70px;
            margin-left: 4%;
            margin-right: 15%;
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
        <div class="left-form-box">
            <legend>DEPARTMENT MASTER ENTRY</legend>
            <form action="submit_dept.php" method="POST">
                Department: <input class="inputForm" type="text" name="dept" size="53%"/><br><br>  
                <button class="btn btn-primary" type="submit" name="submit" value="submit">Save</button>
                <button class="btn btn-primary" type="reset" name="reset" value="reset">Reset</button>
            </form>
        </div>
    </div>
    
    <div class="split right">
        <div class="right-form-box">
        <table class="table table-striped" id="myfrm" style="width:100%">
            <thead>
                <legend>EXISTING DEPARTMENT LIST</legend>
                <tr>
                    <th scope="row">Number</th>
                    <th scope="row" style="width:70%">Department</th>
                    
                </tr>
            </thead>

            <?php 
            include 'connection.php';
            $sql = "SELECT * from department";
            $result = $conn->query($sql);
            
            while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $row['dep_id']; ?></td>
                    <td><?php echo $row['dep_name']; ?></td>
                </tr>
            <?php } ?>
        </table>
        </div>
    </div>
</body>
</html>