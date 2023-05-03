<?php
    include "koneksi.php";
    $id = $_GET["id"];
    $sql = "SELECT * FROM barang WHERE id = '$id'";
    $hasil = $conn->query($sql);
    while ($row = $hasil->fetch_assoc()) {
        $nama = $row['nama'];
        $hrg = $row['hrg'];
        $jml = $row['jml'];
        $keterangan = $row['keterangan'];
        $foto = $row['foto'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <nav class="container w-50 mt-3">
        <a href="listBarang.php">Kembali ke List Barang</a>
    </nav>
    <main class="container mt-3 w-50">
        <h1>Form Edit Barang</h1>
        <form action="updBrg.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="l1" class="form-label">ID</label>
                <input type="text" class="form-control" id="l1" name="tid" value="<?= $id; ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="l2" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="l2" name="tnama" value="<?= $nama; ?>" required>
            </div>
            <div class="mb-3">
                <label for="l3" class="form-label">Harga</label>
                <input type="text" class="form-control" id="l3" name="thrg" value="<?= $hrg; ?>" required>
            </div>
            <div class="mb-3">
                <label for="l4" class="form-label">Jumlah Stok</label>
                <input type="text" class="form-control" id="l4" name="tjml" value="<?= $jml; ?>" required>
            </div>
            <div class="mb-3">
                <label for="l5" class="form-label">Keterangan</label>
                <input type="text" class="form-control" id="l5" name="tket" value="<?= $keterangan; ?>">
            </div>
            <div class="mb-3">
                <label for="l6" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="l6" name="foto">
                <input type="hidden" name="foto_lama" value="<?= $foto; ?>">
                <img src="img/<?php echo $foto; ?>" width="150px" height="120px">
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