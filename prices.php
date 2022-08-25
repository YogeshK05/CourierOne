<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        <a class="nav-link active" href="prices.php">Prices
                            <span class="visually-hidden">(current)</span>
                        </a>
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
</head>

<body>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">From\To</th>
                <th scope="col">Branch 1</th>
                <th scope="col">Branch 2</th>
                <th scope="col">Branch 3</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-primary active">
                <th scope="row">Branch 1</th>
                <td>0</td>
                <td>1</td>
                <td>2</td>
            </tr>
            <tr class="table-primary active">
                <th scope="row">Branch 2</th>
                <td>1</td>
                <td>0</td>
                <td>2</td>
            </tr>
            <tr class="table-primary active">
                <th scope="row">Branch 3</th>
                <td>1</td>
                <td>2</td>
                <td>0</td>
            </tr>

        </tbody>
    </table>

</body>

</html>