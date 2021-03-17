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
    session_start();

    require_once "config.php";

    if (isset($_POST['email'])) {

        $sql = "INSERT INTO users (name, password,  email, phone) VALUES ('" . $_POST['name'] . "', '" . $_POST['password'] . "', '" . $_POST['email'] . "', '" . $_POST['phone'] . "')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
    ?>
    </div>

    <form method ="post" >
    <div class="container">

<div class="row">
    <div class="col-sm-2">
        <h1>Registration</h1>
        <p>Fill the form with correct values.</p>
        <hr class="mb-3">
        <label for="name"><b>First Name</b></label>
        <input type="form-control" name="name" required>

        <label for="email"><b>Email</b></label>
        <input type="form-control" name="email" required>

        <label for="phone"><b>Phone Number</b></label>
        <input type="form-control" name="phone" required>

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