<?php

$conn = mysqli_connect('localhost', 'root', '1234', 'courier');
if (mysqli_connect_errno()) {
    echo 'Failed!!!' . mysqli_connect_errno();
}
