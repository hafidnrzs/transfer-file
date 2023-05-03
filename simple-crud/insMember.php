<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Member</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <main class="container mt-3 w-50">
        <?php
            include "koneksi.php";
            include "uploadFoto.php";
            $nama_member = $_POST["tname"];
            $email = $_POST["temail"];
            $telp = $_POST["ttelp"];
            $alamat = $_POST["talamat"];
            $kota = $_POST["tkota"];
            $provinsi = $_POST["tprovinsi"];
            $gender = $_POST["gender"];
            $username = $_POST["tuser"];
            $password = $_POST["tpass"];
            $foto = $_POST["foto"];
            
            if (upload_foto($_FILES["foto"], "member")) {
                $foto = $_FILES["foto"]["name"];
                $sql = "INSERT INTO member (nama_member, email, telp, alamat, kota, provinsi, gender, username, password, foto) VALUES ('$nama_member', '$email', '$telp', '$alamat', '$kota', '$provinsi', '$gender', '$username', '$password', '$foto')";
                if ($conn->query($sql) === TRUE) {
                    $conn->close();
                    header("location: listMember.php");
                }
            } else {
                // echo "<p>Terjadi error saat mengunggah file.</p>";
                echo "<a href='listMember.php'>Kembali ke List Member</a>";
            }
        ?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>