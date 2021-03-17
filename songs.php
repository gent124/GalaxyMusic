<?php
session_start();
require_once "config.php";

include "inc/header.php";

$query = $conn->query('SELECT *
FROM users
INNER JOIN songs ON users.id=songs.user_id;');
if (isset($_POST['song'])) {
    $sql = "INSERT INTO songs (user_id, song, cover, artist, songTitle, album) VALUES ('" . $_SESSION['user_id'] . "', '" . $_POST['song'] . "', '" . $_POST['cover'] . "', '" . $_POST['artist'] . "', '" . $_POST['songTitle'] . "', '" . $_POST['album'] . "')";

    if ($conn->query($sql) === TRUE) {
        header('Location: songs.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();

?>

<!doctype html>
<html lang="en">
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
    <div class="container">
        <form action="songs.php" method="POST">
            <div class="form align-items-center">
                <div class="my-1">
                    <label class="sr-only"></label>
                    <input type="file" class="form-control" name="cover" placeholder="Song">
                </div>
                <div class="my-1">
                    <label class="sr-only">Song Link</label>
                    <input type="text" class="form-control" placeholder="Song Link" name="song">
                </div>
                <div class="my-1">
                    <label class="sr-only">Artist</label>
                    <input type="text" class="form-control" placeholder="Artist Name" name="artist">
                </div>
                <div class="my-1">
                    <label class="sr-only">Song Title</label>
                    <input type="text" class="form-control" placeholder="Song Title" name="songTitle">
                </div>
                <div class="my-1">
                    <label class="sr-only">Album</label>
                    <input type="text" class="form-control" placeholder="Album Title" name="album">
                </div>
                <div class="col-auto my-1">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

        <table class="table table-dark mt-3">
            <thead>
            <tr>
                <th scope="col">Cover</th>
                <th scope="col">Artist</th>
                <th scope="col">Song</th>
                <th scope="col">Album</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php while($songs = $query->fetch_array()): ?>
                    <th scope="row"><img src="#" alt=""><?= $songs['cover'] ?></th>
                    <td><?= $songs['artist'] ?></td>
                    <td><?= $songs['song'] ?></td>
                    <td><?= $songs['album'] ?></td>
                <?php endwhile; ?>
            </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
