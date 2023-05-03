<?php
    session_start();
    include "koneksi.php";
    $id = $_GET["id"];
    $iduser = $_SESSION["iduser"];

    if ($id == $iduser) {
        header("location: listUser.php");
    } else {
        $sql = "SELECT foto FROM user WHERE iduser = '$id'";
        $hasil = $conn->query($sql);
        while ($row = $hasil->fetch_assoc()) {
            $foto = $row["foto"];
        }
        if ($foto != "")
            unlink("imgUser/" . $foto);
    
        $sql = "DELETE FROM user WHERE iduser='$id'";
        if ($conn->query($sql) === TRUE)
            header("location: listUser.php");
        $conn->close();
    }
?>