<?php
include './proses/koneksi.php';

$sql1 = mysqli_query($kon, "SELECT * FROM obat");
$pemasukanobt=0;
while ($data = mysqli_fetch_array($sql1)) {
    $subtotalobt = $data['stok_obat'] * $data['harga_obat'];
    $pemasukanobt = $pemasukanobt + $subtotalobt;

}

$sql1 = mysqli_query($kon, "SELECT * FROM alat");
$pemasukanalt=0;
while ($data = mysqli_fetch_array($sql1)) {
    $subtotalalt = $data['stok_alat'] * $data['harga_alat'];
    $pemasukanalt = $pemasukanalt + $subtotalalt;
}

$total=$pemasukanalt+$pemasukanobt
?>
