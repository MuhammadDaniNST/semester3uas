<?php
$kon = mysqli_connect("localhost", "root", "", "uas3teori");

if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>