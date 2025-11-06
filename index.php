<?php
 session_start();
 ob_start();
 // Mengecek session
 if(empty($_SESSION['username'])){
 echo "<script>alert('Anda harus login terlebih dahulu')</script>";
 echo "<meta http-equiv='refresh' content='0; url=login.php'>";
 exit();
 } else{
    $username = $_SESSION['username']

?>
<!DOCTYPE HTML>
<html>
 <head>
 <title>Dashboard</title>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="style.css">
 </head>
 <body>
 <header>
    <div style="float:right; margin-right:20px;">Hi, <b><?php echo $username; ?></b></div>
Dashboard
 </header>
 <div class="container">
 <aside>
 <ul class="menu">
 <li><a href="index.php">Dashboard</a></li>
 <li><a href="tabel-makanan.html">Makanan Khas</a></li>
 <li><a href="logout.php">Keluar</a></li>
 </ul>
 </aside>
 <section class="main">
 <?php
 $username = $_SESSION['username'];
 echo "<center>";
 echo "<h3>Selamat Datang </h3>";
 echo "<p>Anda login sebagai <b>".$username."</b></p>";
 ?>
 </section>
 </div>
 <footer>
 <p>&copy; 2025 Sistem Informasi</p>
 </footer>
 </body>
</html>
<?php
 }
?>