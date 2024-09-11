<?php
    include 'connection.php';

    $query="select * from pdata";  
 $connect=mysqli_query($conn,$query);  
 $num=mysqli_num_rows($connect); //check in database any data have or not  
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
    <title>OPD Regisration Form </title> 
</head>
<body>
    <div class="container">
        <header>Patient Registration</header>

        <form action="submitopd.php" method="POST">
            <div class="form first">
                        <div class="details address">
                            <span class="title">Patient Details</span>
        
                            <div class="fields">

                                <div class="input-field">
                                    <label>Case Type</label>
                                    <select name="case_type" required>
                                        <option disabled selected>Select  case  type</option>
                                        <option>Normal</option>
                                        <option>Emergency</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                                
                                <div class="input-field">
                                    <label>Emergency</label>
                                    <input type="checkbox"  name="emg">
                                </div>
                                
                                <div class="input-field">
                                    <label>Case Number</label>
                                    <input type="text" placeholder="Enter Case No." name="caseno" required>
                                </div>
                                <div class="input-field">
                                    <label>Consulting Dr.</label>
                                    <?php
                                        include 'connection.php';
                                        $query = "SELECT `name` from doctor";
                                        $result = $conn->query($query); 
                                    ?>
                                    <select name="doctor">
                                        <?php
                                            while($cat = mysqli_fetch_array($result, MYSQLI_ASSOC)):;
                                        ?>
                                        <option value="<?php echo $cat['name']; ?>">
                                            <?php echo $cat['name'] ?>
                                        </option>
                                        <?php endwhile; ?>
                                    </select>

                                </div>
                                <div class="input-field">
                                    <label>Case fees</label>
                                    <input type="number" placeholder="enter case fees" name="case_fees" required>    
                                </div>
                                <div class="input-field">
                                    <label>Department</label>
                                    <input type="text" placeholder="Department" name="dept" id="dept">
                                    <!-- <select name="dept" required>
                                        <option disabled selected>Select Department</option>
                                        <option>Orthopedic</option>
                                        <option>Neurology</option>
                                        <option>dental</option>
                                    </select> -->
                                </div>
                                <div class="input-field">
                                    <label>Full Name</label>
                                    <input type="text" placeholder="Enter your name" name="pname" required>
                                </div>
        
                                <div class="input-field">
                                    <label>Age</label>
                                    <input type="number" placeholder="Enter age" name="age" required>
                                </div>
                                <div class="input-field">
                                    <label>Gender</label>
                                    <select name="gender" required>
                                        <option disabled selected>Select your gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Others</option>
                                    </select>
                                </div>
        
                                <div class="input-field">
                                    <label>Mobile Number</label>
                                    <input type="number" placeholder="Enter mobile number" name="phone" required>
                                </div>
        
                                <div class="input-field">
                                    <label>Address</label>
                                    <input type="text" placeholder="Enter your Address" name="address" required>
                                </div>
        
                                <div class="input-field">
                                    <label>City</label>
                                    <input type="text" placeholder="Enter your city" name="city" required>
                                </div>
        
                                <div class="input-field">
                                    <label>Pincode</label>
                                    <input type="number" placeholder="Enter pincode" name="zip" required>
                                </div>
                                <div class="input-field">
                                    <label>State</label>
                                    <input type="text"  name="state" required>
                                </div>
                                <div class="input-field">
                                    <label>Country</label>
                                    <input type="text"  name="country" required>
                                </div>    
                            </div>
                        </div>    
                        <div class="details address">
                            <span class="title"></span>
        
                            <div class="fields">
                                <div class="input-field">
                                    <label>Payment mode</label>
                                    <select name="p_mode" required>
                                        <option disabled selected>Select mode</option>
                                        <option>Cash</option>
                                        <option>Debit card/credit card</option>
                                        <option>Net banking</option>
                                    </select>
                                </div>
                                <div class="input-field">
                                    <label>Occupation</label>
                                    <input type="text" placeholder="Enter your occupation" name="occupation" required>
                                </div>
        
                                <div class="input-field">
                                    <label>Religion</label>
                                    <select name="religion">
                                        <option>Hindu</option>
                                        <option>Muslim</option>
                                        <option>Christan</option>
                                        <option>Sikh</option>
                                        <option>Other</option>
                                    </select>
                                    <!-- <input type="text" placeholder="Enter your religion" name="religion" required> -->
                                </div>
        
                                <div class="input-field">
                                    <label>Token No.</label>
                                    <input type="number" placeholder="Enter token no" name="token" required>
                                </div>
                                
                            </div>
                        </div>

                    <div style="display : flex;">
                        <button type="submit" class="btn btn-primary" name="submit" value="Submit" style="margin: 5px;">Register</button>
                        <button type="button" class="btn btn-primary" name="prev1" value="Submit" style="margin: 5px;">Preview 1</button>
                        <button type="button" class="btn btn-primary" name="prev2" value="Submit" style="margin: 5px;">Preview 2</button>
                    </div>        
                    
              
            </div>


        </form>
    </div>
    <div class="container2">
        <h3>Next Patient details</h3>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Sr.</th>
                <th scope="col">Token No.</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            <?php   
                if ($num>0) {  
                     while($data=mysqli_fetch_assoc($connect)){  
                          echo "  
                               <tr>  
                               <td>".$data['id']."</td>  
                               <td>".$data['tokenno']."</td>  
                               <td>".$data['name']."</td>   
                               <td><a href='delete.php?id=".$data['id']."' id='btn'>Delete</a></td> 
                               </tr>  
                          ";  
                     }  
                }  
           ?>  
            </tbody>
          </table>
    </div>
    
    <script>
  
        // onkeyup event will occur when the user 
        // release the key and calls the function
        // assigned to this event
        function GetDetail(str) {
            if (str.length == 0) {
                document.getElementById("dept").value = "";
                // document.getElementById("last_name").value = "";
                return;
            }
            else {
  
                // Creates a new XMLHttpRequest object
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
  
                    // Defines a function to be called when
                    // the readyState property changes
                    if (this.readyState == 4 && 
                            this.status == 200) {
                          
                        // Typical action to be performed
                        // when the document is ready
                        var myObj = JSON.parse(this.responseText);
  
                        // Returns the response data as a
                        // string and store this array in
                        // a variable assign the value 
                        // received to first name input field
                          
                        document.getElementById
                            ("dept").value = myObj[0];
                          
                        // Assign the value received to
                        // last name input field
                        // document.getElementById(
                        //     "last_name").value = myObj[1];
                    }
                };
  
                // xhttp.open("GET", "filename", true);
                xmlhttp.open("GET", "auto.php?dept=" + str, true);
                  
                // Sends the request to the server
                xmlhttp.send();
            }
        }
    </script>
    <!--<script src="script.js"></script>-->
</body>
</html>
