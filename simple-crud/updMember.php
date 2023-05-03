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
    <main class="container mt-3 w-50">
        <?php
            include "koneksi.php";
            include "uploadFoto.php";

            $id = $_POST["tid"];
            $nama_member = $_POST["tname"];
            $email = $_POST["temail"];
            $telp = $_POST["ttelp"];
            $alamat = $_POST["talamat"];
            $kota = $_POST["tkota"];
            $provinsi = $_POST["tprovinsi"];
            $gender = $_POST["gender"];
            $username = $_POST["tuser"];
            $password = $_POST["tpass"];
            $foto_lama = $_POST["foto_lama"];
            $foto = $foto_lama;
            $qry = true;
            $flagFoto = true;

            if (isset($_POST["ubah_foto"])) {
                $flagFoto = true;
                if (upload_foto($_FILES["foto"], "member")) {
                    $foto = $_FILES["foto"]["name"];
                } else {
                    $qry = false;
                    echo "<p>Foto gagal diupload.</p>";
                }
            }

            if ($qry == true) {
                $sql = "UPDATE member SET nama_member='$nama_member', email='$email', telp='$telp', alamat='$alamat', kota='$kota', provinsi='$provinsi', gender='$gender', username='$username', password='$password', foto='$foto' WHERE id='$id'";
                if ($conn->query($sql) === TRUE) {
                    if (is_file("imgMember/" . $foto_lama) && ($flagFoto == true)) // Jika gambar ada
                        unlink ("imgMember/" . $foto_lama);
                    $conn->close();
                    header("location: listMember.php");
                } 
            } else {
                $conn->close();
                echo "<a href='listMember.php'>Kembali ke List Member</a>";
            }
        ?>
    </main>
</body>
</html>
    