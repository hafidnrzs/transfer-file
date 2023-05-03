<?php
    include "koneksi.php";
    $id = $_GET["id"];
    $sql = "SELECT * FROM member WHERE id = '$id'";
    $hasil = $conn->query($sql);
    while ($row = $hasil->fetch_assoc()) {
        $nama_member = $row["nama_member"];
        $email = $row["email"];
        $telp = $row["telp"];
        $alamat = $row["alamat"];
        $kota = $row["kota"];
        $provinsi = $row["provinsi"];
        $gender = $row["gender"];
        $username = $row["username"];
        $password = $row["password"];
        $foto = $row["foto"];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Member</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <nav class="container w-50 mt-3">
        <a href="listMember.php">Kembali ke List Member</a>
    </nav>
    <main class="container mt-3 w-50">
        <h1>Form Edit Member</h1>
        <form action="updMember.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="l1" class="form-label">ID</label>
                <input type="text" class="form-control" id="l1" name="tid" value="<?= $id; ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="l2" class="form-label">Nama Member</label>
                <input type="text" class="form-control" id="l2" name="tname" value="<?= $nama_member; ?>" required>
            </div>
            <div class="mb-3">
                <label for="l2" class="form-label">Email</label>
                <input type="text" class="form-control" id="l2" name="temail" value="<?= $email; ?>" required>
            </div>
            <div class="mb-3">
                <label for="l3" class="form-label">Telp</label>
                <input type="text" class="form-control" id="l3" name="ttelp" value="<?= $telp; ?>" required>
            </div>
            <div class="mb-3">
                <label for="l4" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="l4" name="talamat" value="<?= $alamat; ?>" required>
            </div>
            <div class="mb-3">
                <label for="l5" class="form-label">Kota</label>
                <input type="text" class="form-control" id="l5" name="tkota" value="<?= $nama_member; ?>" required>
            </div>
            <div class="mb-3">
                <label for="l6" class="form-label">Provinsi</label>
                <input type="text" class="form-control" id="l6" name="tprovinsi" value="<?= $provinsi; ?>" required>
            </div>
            <div class="mb-3">
                Gender
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender1" value="1" checked>
                    <label class="form-check-label" for="gender1">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender2" value="0">
                    <label class="form-check-label" for="gender2">Perempuan</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="l8" class="form-label">Username</label>
                <input type="text" class="form-control" id="l8" name="tuser" value="<?= $username; ?>" required>
            </div>
            <div class="mb-3">
                <label for="l9" class="form-label">Password</label>
                <input type="password" class="form-control" id="l9" name="tpass" value="<?= $password; ?>" required>
            </div>
            <div class="mb-3">
                <label for="l10" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="l10" name="foto">
                <input type="hidden" name="foto_lama" value="<?= $foto; ?>">
                <img src="imgMember/<?php echo $foto; ?>" width="150px" height="120px">
                <input type="checkbox" id="ubah_foto" name="ubah_foto">
                <label for="ubah_foto">Checklist jika ingin mengubah foto</label>
            </div>

            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>