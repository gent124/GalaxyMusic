<html>

<?php
// Initialize the session
ob_start();
session_start();

// Include config file
require_once "config.php";

if (isset($_POST['name'])) {

    $sql = "SELECT * FROM users WHERE name = '".$_POST['name']."' AND password = '".$_POST['password']."' LIMIT 1";

    $result = $conn->query($sql);
    $data = $result->fetch_assoc();
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['login'] = true;
        $_SESSION['user_id'] = $data['id'];
        $_SESSION['name'] = $data['name'];
        header('location: dashboard.php');
    } else {
        $error = 'Crenditals are wrong!';
    }
}

$conn->close();
?>



<head>
      <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Galaxy</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rajdhani:300,400,500,600,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
</head>

<body>
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="dashboard.php"><img src="images/logo.png" alt="logo" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-10 col-sm-10">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="index.php">Home</a> </li>
                                        <li> <a href="about.php">about</a> </li>
                                        <li> <a href="album.php"> Albums</a> </li>
                                        <li> <a href="blog.php">Blog</a> </li>
                                        <li> <a href="contact.php">Contact</a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                        <form class="search">
                            <input class="form-control" type="text" placeholder="Search">
                            <button><img src="images/search_icon.png"></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end header inner -->
    </header>

    <div class="login-form">
        <div class="box">
            <?php if($error): ?>
            <p style="color: red;font-weight:bold;"><?=$error?></p>
            <?php endif;?>
            <h2>Login</h2>
            <form method="POST" action="login.php">
                <div class="inputBox">
                    <input type="text" name="name" required>
                    <label>Username</label>
                    <!--<div class="input">
                     <div class="title"> USERNAME</div>
                     <input class="text" type="text" placeholder=""/>
                   </div>-->
                </div>
                <div class="inputBox">
                    <input type="password" name="password" required>
                    <label>Password</label>
                    <!--<div class="input">
                     <div class="title"> USERNAME</div>
                     <input class="text" type="text" placeholder=""/>
                   </div>-->
                </div>
                <button class="btn btn-primary" type="submit" name="sign-in" value="Sign In">Log In</button>
            </form>
        </div>

        <span class="text-center">If you don't have an account, <a class="text-center" href="registerform.php">Sign Up</a></span>
    </div>
</body>
</html>