<?php
    session_start();
    if (isset($_SESSION["username"]))
        $user = $_SESSION["username"];
    else
        header("location: index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <style>
        .card-body a i {
            color: black;
            font-size: 9rem;
        }
    </style>
</head>
<body>
    <nav class="nav nav-pills flex-column flex-sm-row bg-primary text-center">
        <a class="flex-sm-fill text-sm-start nav-link text-warning disabled ms-sm-4" aria-current="page" href="#">Dashboard</a>
        <a class="flex-sm-fill text-sm-center nav-link text-light disabled" href="#">User: <?= $user ;?></a>
        <a class="flex-sm-fill text-sm-end nav-link text-light me-sm-4" href="logout.php">Logout</a>
    </nav>
    
    <div class="container">
        <div class="p-5 row g-3">
            <div class="col col-md-6">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="listUser.php">
                            <i class="bi bi-person-circle"></i>
                        </a>
                    </div>
                    <div class="card-footer text-secondary">
                        User
                    </div>
                </div>
            </div>
            <div class="col col-md-6">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="listBarang.php">
                            <i class="bi bi-box-seam-fill"></i>
                        </a>
                    </div>
                    <div class="card-footer text-secondary">
                        Barang
                    </div>
                </div>
            </div>
            <div class="col col-md-6">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="listOrder.php">
                            <i class="bi bi-cart-fill"></i>
                        </a>
                    </div>
                    <div class="card-footer text-secondary">
                        Order
                    </div>
                </div>
            </div>
            <div class="col col-md-6">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="listMember.php">
                            <i class="bi bi-people-fill"></i>
                        </a>
                    </div>
                    <div class="card-footer text-secondary">
                        Member
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>