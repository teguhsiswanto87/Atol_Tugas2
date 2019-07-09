<?php
include "../config/connect.php";

$sql = "select * from modul where aktif='Y'";
$query = mysqli_query($conn, $sql);
while ($m = mysqli_fetch_array($query)) {
    //mengaktifkan menu yang sedang aktif sekarang
    $nama_modul_lower = strtolower($m['nama_modul']);
    $hapus_spasi_nama_modul = str_replace(' ','',$nama_modul_lower);

    ($_GET['module'] == $hapus_spasi_nama_modul ) ? $menu_aktif = "active" : $menu_aktif = "";
    echo "<a href='$m[link]' class='item $menu_aktif' style='text-transform:capitalize;'>
           <i class='$m[ikon] icon'></i> $m[nama_modul]
        </a>";
}
