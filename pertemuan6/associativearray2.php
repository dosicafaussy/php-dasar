<?php
// $mahasiswa = [
//     ["dsii.ca", "043040023", "Teknik informatika", "faussy@gmail.com"],
//     ["bunga", "033040001", "Teknik industri", "bung@gmail.com"],
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
        "gambar" => "foto4.jpg"
    ]
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/foto3.jpg" alt="foto3.jpg">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>