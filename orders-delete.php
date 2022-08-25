<?php

require("connection-courier.php");
error_reporting(0);

$invoiceNumber = $_GET['invoiceNumber'];

$q = "DELETE FROM `orders` WHERE invoiceNumber = $invoiceNumber";

mysqli_query($conn, $q);

header('location:orders-display.php');

?>