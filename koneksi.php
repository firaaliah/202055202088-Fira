<?php
$koneksi = mysqli_connect("localhost", "root", "", "202055202088_fira");

if (mysqli_connect_errno()) {
	echo "koneksi Database Gagal:".mysqli_connect_errno();
}

?>