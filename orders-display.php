<?php
require("connection-courier.php");
error_reporting(0);

$q = "SELECT * FROM orders";

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
                        <a class="nav-link" href="branches-display.php">Branches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="staff-display.php">Staff</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="prices.php">Prices</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="orders-display.php">Orders</a>
                        <span class="visually-hidden">(current)</span>
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
        <h1>Order Book</h1>
        <table class="table table-hover">
            <thead>
                <tr class="bg-dark text-white">
                    <th>Invoice Number</th>
                    <th>Consignor Name</th>
                    <th>Consignor Number</th>
                    <th>Consignee Name</th>
                    <th>Consignee Number</th>
                    <th>From</th>
                    <th>To</th>
                    <th>No. of Packs</th>
                    <th>Charges</th>
                    <th>Dimensions</th>
                    <th>Payment</th>
                    <th>Date and Time</th>
                    <th>Status</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <?php
                require("connection-courier.php");
                error_reporting(0);

                $q = "SELECT * FROM orders";

                $query = mysqli_query($conn, $q);

                while ($res = mysqli_fetch_array($query)) {
                ?>
                    <tr class="table-secondary active">
                        <td><?php echo $res['invoiceNumber']; ?></td>
                        <td><?php echo $res['consignorName']; ?></td>
                        <td><?php echo $res['consignorNumber']; ?></td>
                        <td><?php echo $res['consigneeName']; ?></td>
                        <td><?php echo $res['consigneeNumber']; ?></td>
                        <td><?php echo $res['fromBranch']; ?></td>
                        <td><?php echo $res['toBranch']; ?></td>
                        <td><?php echo $res['numberOfPack']; ?></td>
                        <td><?php echo $res['weight']; ?></td>
                        <td><?php echo $res['dimensions']; ?></td>
                        <td><?php echo $res['paymentOption']; ?></td>
                        <td><?php echo $res['dateTime']; ?></td>
                        <td><?php echo $res['status']; ?></td>
                        <td><button class="btn-warning btn">
                                <a href="orders-update.php?invoiceNumber=<?php echo $res['invoiceNumber']; ?>">Update
                                </a>
                            </button>
                        </td>
                        <td><button class="btn-danger btn"><a href="orders-delete.php?invoiceNumber=<?php echo $res['invoiceNumber']; ?>">Delete</a></button></td>
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