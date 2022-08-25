<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courier One</title>
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
                        <a class="nav-link active" href="courier-home.php">Logout
                            <span class="visually-hidden">(current)</span>
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
        <form method="POST" action="">
            <fieldset>
                <legend>Fill in the details</legend>
                <div class="form-group">
                    <label for="exampleTextarea" class="form-label mt-4">Consignor Name</label>
                    <textarea class="form-control" name="consignorName" id="consignorName" rows="1"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea" class="form-label mt-4">Consignor Number</label>
                    <textarea class="form-control" id="consignorNumber" name="consignorNumber" rows="1"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea" class="form-label mt-4">Consignee Name</label>
                    <textarea class="form-control" id="consigneeName" name="consigneeName" rows="1"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea" class="form-label mt-4">Consignee Number</label>
                    <textarea class="form-control" id="consigneeNumber" name="consigneeNumber" rows="1"></textarea>
                </div>
                <legend class="mt-4">From</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="fromBranch" id="fromBranch" value="Branch 1">
                        Branch 1
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="fromBranch" id="from" value="Branch 2">
                        Branch 2
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="fromBranch" id="from" value="Branch 3">
                        Branch 3
                    </label>
                </div>
                <legend class="mt-4">To</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="toBranch" id="toBranch" value="Branch 1">
                        Branch 1
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="toBranch" id="toBranch" value="Branch 2">
                        Branch 2
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="toBranch" id="toBranch" value="Branch 3">
                        Branch 3
                    </label>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea" class="form-label mt-4">Number of Packages</label>
                    <textarea class="form-control" id="numberOfPack" name="numberOfPack" rows="1" placeholder="look for how to limit inputs"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea" class="form-label mt-4">Charges</label>
                    <textarea class="form-control" id="weight" name="weight" rows="1"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea" class="form-label mt-4">Dimensions</label>
                    <textarea class="form-control" id="dimensions" name="dimensions" rows="1" placeholder="LxWxB"></textarea>
                </div>
                <fieldset class="form-group">
                    <legend class="mt-4">Payment</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="paymentOption" id="paymentOption1" value="To Pay">
                            To Pay
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="paymentOption" id="paymentOption2" value="Paid">
                            Paid
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea" class="form-label mt-4">Date and Time</label>
                        <input type="datetime-local" name="dateTime" id="">
                    </div>
                    <legend class="mt-4">Status</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="status" value="Collected">
                            Collected
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="status" value="In Transit" disabled="">
                            In Transit
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="status" id="status" value="Delivered" disabled="">
                            Delivered
                        </label>
                    </div>
                </fieldset>
                <button type="submit" class="btn btn-success" name="submit">Submit</button>
            </fieldset>
        </form>
    </div>

</body>

</html>


<?php
require("connection-courier.php");
error_reporting(0);

if (isset($_POST["submit"])) {

    $consignorName = $_POST['consignorName'];
    $consignorNumber = $_POST['consignorNumber'];
    $consigneeName = $_POST['consigneeName'];
    $consigneeNumber = $_POST['consigneeNumber'];
    $fromBranch = $_POST['fromBranch'];
    $toBranch = $_POST['toBranch'];
    $numberOfPack = $_POST['numberOfPack'];
    $weight = $_POST['weight'];
    $dimensions = $_POST['dimensions'];
    $paymentOption = $_POST['paymentOption'];
    $dateTime = $_POST['dateTime'];
    $status = $_POST['status'];

    $query = "INSERT INTO orders (consignorName,consignorNumber,consigneeName,consigneeNumber,fromBranch,toBranch,numberOfPack,weight,dimensions,paymentOption,dateTime,status) VALUES ('$consignorName','$consignorNumber','$consigneeName','$consigneeNumber','$fromBranch','$toBranch','$numberOfPack','$weight','$dimensions','$paymentOption','$dateTime','$status')";

    if (mysqli_query($conn, $query)) {
        header('location:orders-display.php');
    } else {
        echo 'Error' . mysqli_error($conn);
    }
}

?>