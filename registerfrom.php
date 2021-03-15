<?php 
require_once 'config.php';


?>



<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>

    <div>
        <?php

            if(isset($_POST['submit'])){
            $firstname   = $_POST['firstname'];
            $lastname    = $_POST['lastname'];
            $email       = $_POST['email'];
            $phonenumber = $_POST['phonenumber'];
            $password    = $_POST['password'];

            
            
         

            $sql = "INSERT INTO users ( firstname, lastname, email, phonenumber, password ) VALUES(?,?,?,?,?)";
            $stminsert = $db->prepare($sql);
            $result = $stminsert->execute([$firstname, $lastname, $email, $phonenumber,$password]);   
            
            if($result){
                echo 'Succesfully saved.';  

            }
            else{
                echo 'There was errors while saving data';
            }
        }

        ?>


    </div>

    <form action="registerfrom.php" method ="post" >
    <div class="container">

<div class="row">
    <div class="col-sm-2">
        <h1>Registration</h1>
        <p>Fill the form with correct values.</p>
        <hr class="mb-3">
        <label for="firstname"><b>First Name</b></label>
        <input type="form-control" name="firstname" required>

        <label for="lastname"><b>Last Name </b></label>
        <input type="form-control" name="lastname" required>

        <label for="Email"><b>Email</b></label>
        <input type="form-control" name="email" required>

        <label for="phonenumber"><b>Phone Number</b></label>
        <input type="form-control" name="phonenumber" required>

        <label for="password"><b>Password</b></label>
        <input type="password" name="password" required>
        
        <hr class="mb-3">

        <input class="btn btn-primary" type="submit" name="submit" value="Sign Up">
                </div>
            </div>
        </div>
    </form>
</body>
</html>