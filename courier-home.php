<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Courier ONE</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary bm-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Courier ONE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="courier-home.php">Admin Login
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</head>

<body>
    <div class="container-fluid">
        <br>
        <div class="card mb-3 text-center">
            <h3 class="card-header">Admin Log in</h3>
            <div class="card-body">
                <h5 class="card-title">Enter Login details to get Admin previlages</h5>
            </div>
            <div class="">
                <img src="Images/courier1.jpg" class="img-responsive img-rounded" alt="Courier Image">
            </div>
            <div class="card-body">
                <form method="POST" action="">

                    <label for="username">User Name</label>
                    <input type="text" name="id" required><br><br>

                    <label for="password">Password</label>
                    <input type="password" name="password" required><br><br>

                    <button type="submit" class="btn btn-primary" name="submit">Login</button>
                    <br><br>
                </form>

            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Other Links</h4>
                <p class="card-text">Some Other Useful Links</p>
                <a href="branches-display.php" class="card-link">Branches</a>
                <a href="staff-display.php" class="card-link">Staff</a>
                <a href="prices.php" class="card-link">Prices</a>
                <a href="track-search.php" class="card-link">Track Order</a>
            </div>
        </div>
        <br><br><br><br><br>
        <div class="card text-white bg-info mb-3 mx-auto " style="max-width: 50rem;">
            <div class="card-header">Contact</div>
            <div class="card-body">
                <h4 class="card-title">In case of queries:</h4>
                <p class="card-text">Email : sample@email.com</p>
                <a href="mailto:yogesh.kadam19@vit.edu">Email me</a>
            </div>
        </div>



    </div>
</body>

</html>



<?php

$conn = mysqli_connect("localhost", "root", "1234", "courier");

if (isset($_POST["submit"])) {
    $uname = $_POST["id"];
    $pass = $_POST["password"];

    $sql = mysqli_query($conn, "SELECT COUNT(*) AS total FROM ids WHERE id ='" . $uname . "' AND password = '" . $pass . "'") or die(mysqli_error($conn));

    $rw = mysqli_fetch_array($sql);

    if ($rw['total'] > 0) {
        header('location:site.php');
    } else {
        echo "<script>alert('User Name or Password is Incorrect!</script>";
    }
}
