<?php
$mahasiswa = [
    ["dsii.ca", "043040023", "Teknik informatika", "faussy@gmail.com"],
    ["bunga", "033040001", "Teknik industri", "bung@gmail.com"],
    ["dina", "023040123", "Teknik Planologi", "dina@gmail.com"],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
   <li>Nama : <?= $mhs[0]; ?></li>
   <li> NRP : <?= $mhs[1]; ?></li>
   <li>Jurusan : <?= $mhs[2]; ?></li>
   <li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>


</body>
</html>