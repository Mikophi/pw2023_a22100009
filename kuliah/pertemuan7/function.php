<?php 
function koneksi() {
  return mysqli_connect('localhost', 'root', '', 'mie_gacoan');

}

function query ($query){
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) == 1 ){
  return mysqli_fetch_assoc($result);
}

  $rows =[];
  while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

return $rows;
}


function tambah($data)
{
$conn = koneksi();

$menu = htmlspecialchars ($data['menu']);
$harga = htmlspecialchars ($data['harga']);
$deskripsi = htmlspecialchars ($data['deskripsi']);

$query = "INSERT INTO 
gacoan_menu 
VALUES (null, '$menu', '$harga', '$deskripsi')";

  mysqli_query($conn, $query);
  echo mysqli_error($conn);

  return mysqli_affected_rows($conn);
}


?>

