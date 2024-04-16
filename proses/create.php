<?php
include 'koneksi.php';

if (isset($_POST['tambahobat'])) {
    $nama = $_POST['nama'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];

    $query = "INSERT INTO obat (nama_obat, stok_obat, harga_obat) 
    VALUES ('$nama','$stok','$harga')";

    if (mysqli_query($kon, $query)) {        echo "<script>alert('Data Berhasil Ditambahkan'); 
    window.location.href='../obat.php'</script>";
    } else {        echo "<script>alert('Data Gagal Ditambahkan');
    window.location.href='../obat.php'</script>";
    }
}

if (isset($_POST['tambahalat'])) {
    $nama = $_POST['nama'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga'];

    $query = "INSERT INTO alat (nama_alat, stok_alat, harga_alat) 
    VALUES ('$nama','$stok','$harga')";

    if (mysqli_query($kon, $query)) {
        echo "<script>alert('Data Berhasil Ditambahkan'); 
    window.location.href='../alat.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Ditambahkan');
    window.location.href='../alat.php'</script>";
    }
}

?>
