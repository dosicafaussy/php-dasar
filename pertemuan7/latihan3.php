<!DOCTYPE html>
<html lang="en">
<head>
    <title>POST</title>
</head>
<body>
<?php if( isset($_POST["submit"]) ) : ?>
    <h1>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1>
<?php endif; ?>
    
<form action="latihan4.php" method="get">
    Masukkan nama :
    <input type="text" nama="nama">
    <br>
    <button type="submit" nama="submit">Kirim!</button>
</form>

</body>
</html>