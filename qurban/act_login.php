<?php
session_start();
include "koneksi.php";
$user = $_POST['username'];
$psw = md5($_POST['psw']);
$level = $_POST['level'];

$query_l = "SELECT * from register WHERE username='$user' AND password='$psw' AND level='$level'";
$h_l = $koneksi->query($query_l);

if (mysqli_num_rows($h_l) == 1) {
    $d_l = $h_l->fetch_array();
    $_SESSION['username'] = $d_l['username'];
    $_SESSION['level'] = $d_l['level'];

    if ($level == "Admin") {
        header("location:admindas.php");
    } else if ($level == "Panitia") {
        header("location:panitiadas.php");
    } else if ($level == "Warga") {
        header("location:wargadas.php");
    } else if ($level == "Berqurban") {
        header("location:Dasberqurban.php");
    }
} else {
    echo "Login gagal. Periksa username, password, dan peran.";
}
?>