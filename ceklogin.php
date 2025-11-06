<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password']; // hapus md5 biar cocok dengan array di bawah

$akun = [
    "Admin" => "pass@admiN1",
    "Anita" => "pass@anitA2",
    "Sapta" => "pass@saptA3",
    "Nunu"  => "pass@nunu26",
];

if ($username == "" && $password == "") {
    echo "<script>alert('Username dan Password belum diisi')</script>";
    echo "<meta http-equiv='refresh' content='1;url=login.php'>";
} else {
    if (isset($akun[$username]) && $akun[$username] == $password) {
        $_SESSION['login'] = 1;
        $_SESSION['username'] = $username;
    }
    if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
        header('location:index.php');
        exit;
    } else {
        echo "<script>alert('Login Gagal, Silahkan Coba Lagi')</script>";
        echo "<meta http-equiv='refresh' content='1;url=login.php'>";
    }
}
?>
