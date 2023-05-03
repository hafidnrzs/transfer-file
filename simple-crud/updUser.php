<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <main class="container mt-3 w-50">
        <?php
            include "koneksi.php";
            include "uploadFoto.php";

            $id = $_POST["tid"];
            $user = $_POST["tuser"];
            $newPass = $_POST["tnewPass"];
            $passConfirm = $_POST["tpassConfirm"];
            $foto_lama = $_POST["foto_lama"];
            $foto = $foto_lama;
            $qry = true;
            $flagFoto = false;
            $flagPass = false;

            if (isset($_POST["tpassConfirm"])) {
                $sql = "SELECT password FROM user WHERE iduser = '$id'";
                $hasil = $conn->query($sql);
                while ($row = $hasil->fetch_assoc()) {
                    if ($passConfirm != $row["password"]) {
                        $qry = false;
                        echo "<p>Password salah.</p>";
                    }
                }
                if (!empty($_POST["tnewPass"])) {
                    $passConfirm = $newPass;
                }
                if (isset($_POST["ubah_foto"])) {
                    $flagFoto = true;
                    if (upload_foto($_FILES["foto"], "user")) {
                        $foto = $_FILES["foto"]["name"];
                    } else {
                        $qry = false;
                        echo "<p>Foto gagal diupload.</p>";
                    }
                }
            }

            if ($qry == true) {
                $sql = "UPDATE user SET username='$user', password='$passConfirm', foto='$foto' WHERE iduser='$id'";
                if ($conn->query($sql) === TRUE) {
                    if (is_file("imgUser/" . $foto_lama) && ($flagFoto == true)) // Jika gambar ada
                        unlink ("imgUser/" . $foto_lama);
                    $conn->close();
                    header("location: listUser.php");
                } 
            } else {
                $conn->close();
                echo "<a href='listUser.php'>Kembali ke List User</a>";
            }
        ?>
    </main>
</body>
</html>
    