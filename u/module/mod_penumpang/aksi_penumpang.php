<?php

include "../../../config/functions.php";

$m = $_GET['m'];
$act = $_GET['act'];
$passanger = new Passanger();
$conn = dbConnect();
// input Pengguna
if ($m === 'penumpang' && $act == 'tambah') {
    $first_name = $conn->real_escape_string(my_inputformat(anti_injection($_POST['first_name']), 1));
    $last_name = $conn->real_escape_string(my_inputformat(anti_injection($_POST['last_name']), 1));
    $born = $conn->real_escape_string(my_inputformat(anti_injection($_POST['born']), 0));
    $address = $conn->real_escape_string(my_inputformat(anti_injection($_POST['address']), 1));
    $city = $conn->real_escape_string(my_inputformat(anti_injection($_POST['city']), 1));
    $zip = $conn->real_escape_string(my_inputformat(anti_injection($_POST['zip']), 0));
    $state = $conn->real_escape_string(my_inputformat(anti_injection($_POST['state']), 1));
    $phone = $conn->real_escape_string(my_inputformat(anti_injection($_POST['phone']), 0));
    $email = $conn->real_escape_string(my_inputformat(anti_injection($_POST['email']), 0));
    $password = $conn->real_escape_string(my_inputformat(anti_injection($_POST['password']), 0));

    $insert = $passanger->insertPassanger($first_name, $last_name, $born, $address, $city, $zip, $state, $phone, $email, sha1($password));

    if ($insert) {
        header("location: ../../media.php?m=" . $m);
    } else {
        echo "Gagal Memasukkan data $m ";
        echo "<br>
            nama depan : $first_name <br>
            nama belakang : $last_name <br>
            born : $born<br>
            Alamat : $address <br>
            cty : $city <br>
            zip : $zip <br>
            state : $state<br>
            phone : $phone<br>
            email : $email<br>
            passeord : $password<br>
            insert : !$insert
        ";
    }
} elseif ($m == 'penumpang' && $act == 'update') {
    $id = $conn->real_escape_string(my_inputformat(anti_injection($_POST['id']), 0));
    $first_name = $conn->real_escape_string(my_inputformat(anti_injection($_POST['first_name']), 1));
    $last_name = $conn->real_escape_string(my_inputformat(anti_injection($_POST['last_name']), 1));
    $born = $conn->real_escape_string(my_inputformat(anti_injection($_POST['born']), 0));
    $address = $conn->real_escape_string(my_inputformat(anti_injection($_POST['address']), 1));
    $city = $conn->real_escape_string(my_inputformat(anti_injection($_POST['city']), 1));
    $zip = $conn->real_escape_string(my_inputformat(anti_injection($_POST['zip']), 0));
    $state = $conn->real_escape_string(my_inputformat(anti_injection($_POST['state']), 1));
    $phone = $conn->real_escape_string(my_inputformat(anti_injection($_POST['phone']), 0));
    $email = $conn->real_escape_string(my_inputformat(anti_injection($_POST['email']), 0));

    $update = $passanger->updatePassanger($id, $first_name, $last_name, $born, $address, $city, $zip, $state, $phone, $email);
    if ($update) {
        header("location: ../../media.php?m=" . $m);
    } else {
        echo "Gagal memperbarui data $m";
    }
} elseif ($m == 'penumpang' && $act == 'hapus') {
    $delete = $passanger->deletePassanger($_GET['id']);
    if ($delete) {
        header("location: ../../media.php?m=" . $m);
    } else {
        echo "Gagal menghapus data $m ID=$_GET[id]";
    }
} else {
    echo "gagal berak_si";
}
