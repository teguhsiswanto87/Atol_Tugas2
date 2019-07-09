<?php
if (empty($_SESSION['username']) && empty($_SESSION['password'])) {
    echo "Anda Harus Login terlebih dahulu, <a href='index.php'>Login</a> ";
} else {

    include "../config/connect.php";

    if ($_GET['module'] == 'pegawai') {
        if ($_SESSION['jabatan'] === 'admin') {
            include "module/mod_pegawai/pegawai.php";
        }
    } elseif ($_GET['module'] == 'modul') {
        include "module/mod_modul/modul.php";
    } else {
        echo "Modul <b>$_GET[module]</b> sedang dibuat";
    }
}
