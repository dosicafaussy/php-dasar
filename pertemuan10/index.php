<?php 
require 'functions.php';
$siswa = query("SELECT * FROM siswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data mahasiswa></a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
    <td>No.</td>
    <td>Aksi</td>
    <td>Gambar</td>
    <td>NRP</td>
    <td>Nama</td>
    <td>Email</td>
    <td>Jurusan</td>
</tr>

<?php $i = 1; ?>
<?php foreach( $siswa as $row ) : ?>
   <tr>
      <td><?= $i; ?></td>
      <td>
        <a href="">ubah</a> |
        <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
      </td>
      <td><img src="img/<?= $row["gambar"]; ?>" alte="gambar" width="50"></td>
      <td><?= $row["nrp"]; ?></td>
      <td><?= $row["nama"]; ?></td>
      <td><?= $row["email"]; ?></td>
      <td><?= $row["jurusan"]; ?></td>
   </tr>
   <?php $i++; ?>
<?php endforeach;  ?>   

</table>

</body>
</html>