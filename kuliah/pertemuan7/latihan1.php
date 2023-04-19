<?php 
// Koneksi DB
$conn = mysqli_connect('localhost', 'root', '', 'mie_gacoan');

// Query
$result = mysqli_query($conn, "SELECT * FROM gacoan_menu");

// Array
$rows =[];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

// Tampung
$menu = $rows;
?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiwa</title>
</head>
<body>
  <h3>Daftar Mahasiwa</h3>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
    <th>#</th>
    <th>Menu</th>
    <th>Harga</th>
    <th>Deskripsi</th>
    <th>Aksi</th>
    </tr>

    <?php foreach($menu as $m) : ?>
    <tr>
      <td>1</td>
      <td><?= $m['menu']; ?></td>
      <td><?= $m['harga']; ?></td>
      <td><?= $m['deskripsi']; ?></td>
      <td><a href="">ubah</a> <a href="">hapus</a></td>
    </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>