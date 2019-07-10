<?php

include "../../../config/connect.php";

$module = $_GET['module'];
$act = $_GET['act'];

// input pegawai
if ($module == 'pegawai' && $act == 'tambah') {
    $username      = $_POST['username'];
    $nama          = $_POST['nama'];
    $jabatan       = $_POST['jabatan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $password      = md5($_POST['password']);

    $sql = "insert into pegawai(username,nama,jabatan,jenis_kelamin,password) values ('$username','$nama','$jabatan','$jenis_kelamin','$password')";
    mysqli_query($conn, $sql);

    header("location: ../../media.php?module=" . $module);
} elseif ($module == 'pegawai' && $act == 'update') {
    $id         = $_POST['id'];
    $nama       = $_POST['nama'];
    $jabatan    = $_POST['jabatan'];

    $sql = "update pegawai set nama='$nama',
                                jabatan='$jabatan'
                                where id_pegawai='$id'";
    $query = mysqli_query($conn, $sql);

    header("location: ../../media.php?module=" . $module);
} elseif ($module == 'pegawai' && $act == 'hapus') {
    $sql = "delete from pegawai where id_pegawai=$_GET[id]";
    mysqli_query($conn, $sql);
    header("location: ../../media.php?module=" . $module);
} else {
    echo "gagal berak si";
}
