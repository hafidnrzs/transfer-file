<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entry Barang</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>

    </style>
</head>
<body>
    <nav class="container w-50 mt-3">
        <a href="listBarang.php">Kembali ke List Barang</a>
    </nav>
    <main class="container w-50">
        <h1>Form Entry Barang</h1>
        <form action="insBrg.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="l1" class="form-label">ID</label>
                <input type="text" class="form-control" id="l1" name="tid" placeholder="ID" required>
            </div>
            <div class="mb-3">
                <label for="l2" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="l2" name="tnama" placeholder="Nama Barang" required>
            </div>
            <div class="mb-3">
                <label for="l3" class="form-label">Harga</label>
                <input type="text" class="form-control" id="l3" name="thrg" placeholder="Harga" required>
            </div>
            <div class="mb-3">
                <label for="l4" class="form-label">Jumlah Stok</label>
                <input type="text" class="form-control" id="l4" name="tjml" placeholder="Stok" required>
            </div>
            <div class="mb-3">
                <label for="l5" class="form-label">Keterangan</label>
                <input type="text" class="form-control" id="l5" name="tket" placeholder="Keterangan">
            </div>
            <div class="mb-3">
                <label for="l6" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="l6" name="foto" required>
            </div>

            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>