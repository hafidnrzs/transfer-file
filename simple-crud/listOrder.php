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
    <title>Daftar Order</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>
    <nav class="nav nav-pills flex-column flex-sm-row bg-primary text-center">
        <a class="flex-sm-fill text-sm-start nav-link text-light ms-sm-4" href="dashboard.php">Dashboard</a>
        <a class="flex-sm-fill text-sm-center nav-link text-warning disabled" aria-current="page" href="#">List Order</a>
        <a class="flex-sm-fill text-sm-center nav-link text-light disabled" href="#">User: <?= $user ;?></a>
        <a class="flex-sm-fill text-sm-end nav-link text-light me-sm-4" href="logout.php">Logout</a>
    </nav>
    <main class="container table-responsive">
        <a href="addOrder.php" class="btn btn-success mt-3">Tambah Order</a>
        <?php
            include "koneksi.php";
            $sql = "SELECT * FROM tborder";
            $hasil = $conn->query($sql);
            if ($hasil->num_rows > 0) {
                echo "
                <table class='table table-striped table-hover table-bordered mt-3'>
                    <thead>
                        <th scole='col'>ID</th>
                        <th scole='col'>ID Member</th>
                        <th scole='col'>Tanggal</th>
                        <th scole='col'>Jenis Bayar</th>
                        <th scole='col'>Bank</th>
                        <th scole='col'>No Rek</th>
                        <th scole='col'>Biaya Kirim</th>
                        <th scole='col'>Pembelian</th>
                        <th scole='col'>Total Bayar</th>
                        <th scole='col'>Ekspedisi</th>
                        <th scole='col'>Status</th>
                        <th scole='col'>Edit</th>
                        <th scole='col'>Hapus</th>
                    </thead>
                    <tbody>";
                while ($row = $hasil->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?= $row["id"] ?></td>
                            <td><?= $row["idmember"]; ?></td>
                            <td><?= $row["tgl"]; ?></td>
                            <td><?= $row["jenisByr"]; ?></td>
                            <td><?= $row["bank"]; ?></td>
                            <td><?= $row["norek"]; ?></td>
                            <td><?= $row["biayaKirim"]; ?></td>
                            <td><?= $row["pembelian"]; ?></td>
                            <td><?= $row["totalByr"]; ?></td>
                            <td><?= $row["ekspedisi"]; ?></td>
                            <td><?= $row["status"]; ?></td>
                            <td>
                                <a href="editMember.php?id=<?= $row["id"]; ?>" class="text-decoration-none">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                            </td>
                            <td>
                                <a href="editMember.php?id=<?= $row["id"]; ?>" class="text-decoration-none text-danger">
                                    <i class="bi bi-trash"></i> Hapus
                                </a>
                            </td>
                        </tr>
                    <?php   
                }
                echo "</tbody>
                    </table>";
            } else {
                echo "<p class='mt-3'>Jumlah record: 0</p>";
            }
        ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>