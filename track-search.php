<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courier ONE</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary bm-3">
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
                        <a class="nav-link active" href="courier-home.php">Track Order
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
        <br><br><br><br><br>
        <div class="card text-white bg-primary mb-3 mx-auto" style="max-width: 50rem;">
            <div class="card-header">Track</div>
            <div class="card-body">
                <h4 class="card-title">Enter Invoice Number</h4>
                <form class="d-flex" method="GET">
                    <input class="form-control me-sm-2" type="number" name="invoiceNumber" value="<?php if (isset($_GET['invoiceNumber'])) {
                                                                                                        echo $_GET['invoiceNumber'];
                                                                                                    } ?>" placeholder="Invoice Number">
                    <td><button class="btn-success btn">Search</button></td>
                </form>
                <p class="card-text">You can find invoice number on your receipt.</p>
            </div>
        </div>
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
                </tr>

                <?php
                require("connection-courier.php");
                error_reporting(0);

                if (isset($_GET['invoiceNumber'])) {
                    $invoiceNumber = $_GET['invoiceNumber'];
                    $q = "SELECT * FROM orders WHERE invoiceNumber='$invoiceNumber'";

                    $query = mysqli_query($conn, $q);

                    if (mysqli_num_rows($query) > 0) {
                        foreach ($query as $row) {
                ?>
                            <tr class="table-secondary active">
                                <td><?php echo $row['invoiceNumber']; ?></td>
                                <td><?php echo $row['consignorName']; ?></td>
                                <td><?php echo $row['consignorNumber']; ?></td>
                                <td><?php echo $row['consigneeName']; ?></td>
                                <td><?php echo $row['consigneeNumber']; ?></td>
                                <td><?php echo $row['fromBranch']; ?></td>
                                <td><?php echo $row['toBranch']; ?></td>
                                <td><?php echo $row['numberOfPack']; ?></td>
                                <td><?php echo $row['weight']; ?></td>
                                <td><?php echo $row['dimensions']; ?></td>
                                <td><?php echo $row['paymentOption']; ?></td>
                                <td><?php echo $row['dateTime']; ?></td>
                                <td><?php echo $row['status']; ?></td>
                            </tr>
                <?php

                        }
                    }
                }


                ?>
            </thead>
    </div>
</body>

</html>