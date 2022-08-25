<?php
require("connection-courier.php");
error_reporting(0);

$q = "SELECT * FROM branches";

$query = mysqli_query($conn, $q);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtr=device-widtr, initial-scale=1.0">
    <title>Courier ONE</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="courier-home.php">Courier ONE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="courier-home.php">Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="branches-display.php">Branches</a>
                        <span class="visually-hidden">(current)</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="staff-display.php">Staff</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="prices.php">Prices</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="orders-display.php">Orders</a>
                    </li>
                    <li>
                        <a class="nav-link" href="contact-us.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</head>

<body>

    <div class="container-fluid">
        <h1>Our Branches</h1>
        <table class="table table-hover">
            <thead>
                <tr class="bg-dark text-white">
                    <th>Serial Number</th>
                    <th>Branch Name</th>
                    <th>Address</th>
                </tr>
                <?php
                require("connection-courier.php");
                error_reporting(0);

                $q = "SELECT * FROM branches";

                $query = mysqli_query($conn, $q);

                while ($res = mysqli_fetch_array($query)) {
                ?>
                    <tr class="table-secondary active">
                        <td><?php echo $res['srNo']; ?></td>
                        <td><?php echo $res['branch']; ?></td>
                        <td><?php echo $res['address']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </thead>
        </table>
    </div>
    </div>

</body>

</html>