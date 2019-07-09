<?php
include "../config/connect.php";

// fungsi untuk menghindari injeksi dari user yang jahil
function anti_injection($data){
  $filter  = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
  return $filter;
}

$username = anti_injection($_POST['username']);
$password = anti_injection(md5($_POST['password']));

// menghindari sql injection
$injeksi_username = mysqli_real_escape_string($conn, $username);
$injeksi_password = mysqli_real_escape_string($conn, $password);

// pastikan username dan password adalah berupa huruf atau angka.
if (!ctype_alnum($injeksi_username) OR !ctype_alnum($injeksi_password)){
  echo "Sekarang loginnya tidak bisa di injeksi lho.";
}
else{
  $query  = "SELECT * FROM pegawai WHERE username='$username' AND password='$password'";
  $login  = mysqli_query($conn, $query);
  $ketemu = mysqli_num_rows($login);
  $r      = mysqli_fetch_array($login);

  // Apabila username dan password ditemukan (benar)
  if ($ketemu > 0){
    session_start();

    // bikin variabel session
    $_SESSION['username']    = $r['username'];
    $_SESSION['password']    = $r['password'];
    $_SESSION['nama']        = $r['nama'];
    $_SESSION['jabatan']     = $r['jabatan'];
      
    header("location:media.php?module=modul");
  }
  else{
    echo "<link href=\"css/style_login.css\" rel=\"stylesheet\" type=\"text/css\" />";
    echo "<div id=\"login\"><h1 class=\"fail\">Login Gagal! Username & Password salah.</h1>";
    echo "<p class=\"fail\"><a href=\"index.php\">Ulangi Lagi</a></p></div>";  
  }
}
?>
