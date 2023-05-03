<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Member</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>

    </style>
</head>

<body>
    <nav class="container w-50 mt-3">
        <a href="listMember.php">Kembali ke List Member</a>
    </nav>
    <main class="container w-50">
        <h1>Form Tambah Member</h1>
        <form action="insMember.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="l1" class="form-label">Nama Member</label>
                <input type="text" class="form-control" id="l1" name="tname" placeholder="Nama Member" required>
            </div>
            <div class="mb-3">
                <label for="l2" class="form-label">Email</label>
                <input type="email" class="form-control" id="l2" name="temail" placeholder="Email" required>
            </div>
            <div class="mb-3">
                <label for="l3" class="form-label">Telepon</label>
                <input type="text" class="form-control" id="l3" name="ttelp" placeholder="Telepon" required>
            </div>
            <div class="mb-3">
                <label for="l4" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="l4" name="talamat" placeholder="Alamat" required>
            </div>
            <div class="mb-3">
                <label for="l5" class="form-label">Kota</label>
                <input type="text" class="form-control" id="l5" name="tkota" placeholder="Kota" required>
            </div>
            <div class="mb-3">
                <label for="l6" class="form-label">Provinsi</label>
                <input type="text" class="form-control" id="l6" name="tprovinsi" placeholder="Provinsi" required>
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
                <input type="text" class="form-control" id="l1" name="tuser" placeholder="Username" required>
            </div>
            <div class="mb-3">
                <label for="l9" class="form-label">Password</label>
                <input type="password" class="form-control" id="l9" name="tpass" placeholder="Password" required>
            </div>

            <div class="mb-3">
                <label for="l10" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="l10" name="foto" required>
            </div>

            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>