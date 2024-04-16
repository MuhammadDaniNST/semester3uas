<?php
include './koneksi.php';

if (isset($_POST['editobat'])) {
    $id=$_POST['id_obat'];
    $nama      = $_POST['nama'];
    $stok = $_POST['stok'];
    $harga    = $_POST['harga'];

    $update = "UPDATE obat SET nama_obat='$nama', stok_obat='$stok', 
    harga_obat='$harga' WHERE id_obat='$id'" ;

    if (mysqli_query($kon, $update)) {
        echo "<script>alert('Data Berhasil Di Update'); 
    window.location.href='../obat.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Di Update');
    window.location.href='../obat.php'</script>";
    }
}


if (isset($_POST['editalat'])) {
    $id=$_POST['id_alat'];
    $nama      = $_POST['nama'];
    $stok = $_POST['stok'];
    $harga    = $_POST['harga'];

    $update = "UPDATE alat SET nama_alat='$nama', stok_alat='$stok', 
    harga_alat='$harga' WHERE id_alat='$id'" ;

    if (mysqli_query($kon, $update)) {
        echo "<script>alert('Data Berhasil Di Update'); 
    window.location.href='../alat.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Di Update');
    window.location.href='../alat.php'</script>";
    }
}

?>