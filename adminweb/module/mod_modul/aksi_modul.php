<?php

include "../../../config/connect.php";

$module = $_GET['module'];
$act = $_GET['act'];

// input modul
if ($module === 'modul' && $act == 'tambah') {
    $nama_modul = $_POST['nama_modul'];
    $link       = $_POST['link'];
    $ikon       = $_POST['ikon'];
    $aktif      = isset($_POST['aktif']) ? $_POST['aktif'] : 'N';

    $sql = "insert into modul(nama_modul,link,ikon,aktif) values ('$nama_modul','$link','$ikon','$aktif')";
    mysqli_query($conn, $sql);

    header("location: ../../media.php?module=" . $module);
} elseif ($module == 'modul' && $act == 'update') {
    $id         = $_POST['id'];
    $nama_modul = $_POST['nama_modul'];
    $link       = $_POST['link'];
    $ikon       = $_POST['ikon'];
    $aktif      = isset($_POST['aktif']) ? $_POST['aktif'] : 'N';

    $sql = "update modul set nama_modul='$nama_modul',
                                link='$link',
                                ikon='$ikon',
                                aktif='$aktif' where id_modul='$id'";
    mysqli_query($conn, $sql);

    header("location: ../../media.php?module=" . $module);
} elseif ($module == 'modul' && $act == 'hapus') {
    $sql = "delete from modul where id_modul=$_GET[id]";
    mysqli_query($conn, $sql);
    header("location: ../../media.php?module=" . $module);
} else {
    echo "gagal berak si";
}
