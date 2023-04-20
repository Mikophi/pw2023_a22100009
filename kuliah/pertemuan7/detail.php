<?php 
require 'function.php';

$id = $_GET['id_order'];

$menu = query("SELECT * FROM gacoan_menu WHERE id_order = $id");

?>

<html lang="en">
<head><?php 
require 'function.php';

$id = $_GET['id_order'];

$menu = query("SELECT * FROM gacoan_menu WHERE id_order = $id")[0];

?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Menu</title>
</head>
<body>
  <h3>Detail menu</h3>
  <ul>
    <li>Id : <?= $menu['id_order']; ?></li>
    <li>Menu : <?= $menu['menu']; ?></li>
    <li>Harga : <?= $menu['harga']; ?></li>
    <li>Deskripsi : <?= $menu['deskripsi']; ?></li>
    <li><a href="#">Ubah</a><a href="#">Hapus</a> </li>
    <li><a href="latihan3.php">Kembali Ke Menu Utama</a></li>
  </ul>
</body>
</html>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Menu</title>
</head>
<body>
  <h3>Detail menu</h3>
  <ul>
    <li>Id : <?= $menu['id_order']; ?></li>
    <li>Menu : <?= $menu['menu']; ?></li>
    <li>Harga : <?= $menu['harga']; ?></li>
    <li>Deskripsi : <?= $menu['deskripsi']; ?></li>
    <li><a href="#">Ubah</a><a href="#">Hapus</a> </li>
    <li><a href="latihan3.php">Kembali Ke Menu Utama</a></li>
  </ul>
</body>
</html>
