<?php
include 'koneksi.php';
?>

<?php
if (isset($_GET['hapus_datao'])) {
    $id_obat = $_GET['hapus_datao'];

    $hapus = "DELETE FROM obat WHERE id_obat='$id_obat'";

    if (mysqli_query($kon, $hapus)) {        echo "<script>alert('Data Berhasil Di Hapus'); 
    window.location.href='../obat.php'</script>";
    } else {        echo "<script>alert('Data Gagal Di Hapus');
    window.location.href='../obat.php'</script>";
    }
}

if (isset($_GET['hapus_dataa'])) {
    $id_alat = $_GET['hapus_dataa'];

    $hapus = "DELETE FROM alat WHERE id_alat='$id_alat'";

    if (mysqli_query($kon, $hapus)) {
        echo "<script>alert('Data Berhasil Di Hapus'); 
    window.location.href='../alat.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Di Hapus');
    window.location.href='../alat.php'</script>";
    }
}

?>
