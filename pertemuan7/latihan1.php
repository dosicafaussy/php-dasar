<?php
// $_GET
var_dump($_GET);
$mahasiswa = [
    [
    "nama" => "dsii.ca",
    "nrp" => "043040023",
    "email" => "faussy@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "foto3.jpg"
    ],
    [
        "nama" => "bunga",
        "nrp" => "033040001",
        "email" => "bung@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "foto5.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1> 
<ul>
<?php foreach( $mahasiswa as $mhs) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp= <?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>
    <?php endforeach; ?>  
</ul>  
</body>
</html>



