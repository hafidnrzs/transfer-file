<?php
    session_start();
    include "koneksi.php";
    $id = $_GET["id"];
    $sql = "SELECT foto FROM member WHERE id = '$id'";
    $hasil = $conn->query($sql);
    while ($row = $hasil->fetch_assoc()) {
        $foto = $row["foto"];
    }
    if ($foto != "")
        unlink("imgMember/" . $foto);

    $sql = "DELETE FROM member WHERE id='$id'";
    if ($conn->query($sql) === TRUE)
        header("location: listMember.php");
    $conn->close();
?>