<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data) {
    global $conn;

    $nrp = $data["nrp"];
    $nama = $data["nama"];
    $email = $data["email"];
    $jurusan = $data["jurusan"];

    // upload gambar
    $gambar = upload();
    if( !$gambar ) {
      return false;
    }

    $query = "INSERT INTO siswa
                VALUES
              ('','$nrp','$nama','$email','$jurusan','$gambar')
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function upload() {
  
    $namafile = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpnama = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if( $error === 4) {
        echo "<script>
                 alert('pilih gambar terlebih dahulu')
              </script>";
        return false; 
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarvalid = ['jpg','jpeg','png'];
    $ekstensiGambar = explode('.',$namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarvalid) ) {
        echo "<script>
                alert('yang anda upload bukan gambar');
              </script>";
        return false; 
    }

    // cek jika ukurannya terlalu besar
    if( $ukuranfile > 1000000 )  {
      echo "<script>
              alert('ukuran gambar terlalu besar!');
            </script>";
      return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmp_name, 'img/' . $namaFileBaru);

    return $namaFileBaru;
  }

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM siswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    $id = $data["id"];
    $nrp = $data["nrp"];
    $nama = $data["nama"];
    $email = $data["email"];
    $jurusan = $data["jurusan"];
    $gambarLama = $data["gambarLama"];


    // cek apakah user pilih gambar baru atau tidak
    if( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
    } else {
      $gambar = upload();
    }
    

    $query = "UPDATE mahasiswa SET
                nrp = '$nrp',
                nama = '$nama', 
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
              WHERE id = $id
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function cari($keyword) {
    $query = "SELECT * FROM siswa
                WHERE
              nama LIKE '%$keyword%' OR
              nrp  LIKE '%$keyword%' OR
              email LIKE '%$keyword%' OR
              jurusan LIKE '%$keyword%'
            ";
    return query($query);     
}






?>