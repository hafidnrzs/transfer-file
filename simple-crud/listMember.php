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
    <title>Daftar Member</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>
    <nav class="nav nav-pills flex-column flex-sm-row bg-primary text-center">
        <a class="flex-sm-fill text-sm-start nav-link text-light ms-sm-4" href="dashboard.php">Dashboard</a>
        <a class="flex-sm-fill text-sm-center nav-link text-warning disabled" aria-current="page" href="#">List Member</a>
        <a class="flex-sm-fill text-sm-center nav-link text-light disabled" href="#">User: <?= $user ;?></a>
        <a class="flex-sm-fill text-sm-end nav-link text-light me-sm-4" href="logout.php">Logout</a>
    </nav>
    <main class="container table-responsive">
        <a href="addMember.php" class="btn btn-success mt-3">Tambah Member</a>
        <?php
            include "koneksi.php";
            $sql = "SELECT id, nama_member, email, telp, alamat, kota, provinsi, gender, username, foto FROM member";
            $hasil = $conn->query($sql);
            if ($hasil->num_rows > 0) {
                echo "
                <table class='table table-striped table-hover table-bordered mt-3'>
                    <thead>
                        <th scole='col'>ID</th>
                        <th scole='col'>Nama Member</th>
                        <th scole='col'>Email</th>
                        <th scole='col'>Telp</th>
                        <th scole='col'>Alamat</th>
                        <th scole='col'>Kota</th>
                        <th scole='col'>Provinsi</th>
                        <th scole='col'>Gender</th>
                        <th scole='col'>Username</th>
                        <th scole='col'>Foto</th>
                        <th scole='col'>Edit</th>
                        <th scole='col'>Hapus</th>
                    </thead>
                    <tbody>";
                $gender = array("Perempuan", "Laki-Laki");
                while ($row = $hasil->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?= $row["id"]; ?></td>
                            <td><?= $row["nama_member"]; ?></td>
                            <td><?= $row["email"]; ?></td>
                            <td><?= $row["telp"]; ?></td>
                            <td><?= $row["alamat"]; ?></td>
                            <td><?= $row["kota"]; ?></td>
                            <td><?= $row["provinsi"]; ?></td>
                            <td>
                                <?php 
                                    if (isset($row["gender"]))
                                        echo $gender[$row["gender"]];
                                    else
                                        echo "";
                                ?>
                            </td>
                            <td><?= $row["username"]; ?></td>
                            <td><img src="imgMember/<?= $row["foto"]; ?>" width="100px" height="100px"></td>
                            <td>
                                <a href="editMember.php?id=<?= $row["id"]; ?>" class="text-decoration-none">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                            </td>
                            <td>
                                <a href="delMember.php?id=<?= $row["id"]; ?>" class="text-decoration-none text-danger">
                                    <i class="bi bi-trash"></i> Hapus
                                </a>
                            </td>
                        </tr>
                    <?php   
                }
                echo "</tbody>
                    </table>";
            } else {
                echo "<p class='mt-3>Jumlah record: 0</p>'";
            }
        ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>