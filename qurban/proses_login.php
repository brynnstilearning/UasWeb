<?php
session_start();
include "koneksi.php";

$user = $_POST['username'];
$psw = md5($_POST['password']);
$op = $_GET['op'];

if ($op == "in") {
    $sql = "SELECT * FROM users WHERE username='$user' AND password='$psw'";
    $query = $koneksi->query($sql);

    if (mysqli_num_rows($query) == 1) {
        $data = $query->fetch_array();
        $_SESSION['username'] = $data['username'];
        $_SESSION['level'] = $data['level'];

        $level = strtolower($data['level']);
        $_SESSION['level'] = $level;

        if ($level == "admin") {
            header("location:admindas.php");
        } else if ($level == "warga") {
            header("location:wargadas.php");
        } else if ($level == "panitia") {
            header("location:panitiadas.php");
        } else if ($level == "berqurban") {
            header("location:berqurbandas.php");
        } else {
            die("Level tidak dikenali. <a href='login.php'>Kembali</a>");
        }


    } else {
        die("Username atau password salah. <a href='login.php'>Kembali</a>");
    }

} else if ($op == "out") {
    unset($_SESSION['username']);
    unset($_SESSION['level']);
    session_destroy();
    header("location:login.php");
}
?>