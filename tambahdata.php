<?php
include"koneksi.php";

	if(isset($_POST['simpan'])){
		$nim= $_POST['nim'];
		$nama= $_POST['nama'];
		$alamat= $_POST['alamat'
	];
		$uang_jajaj= $_POST['uang_jajan'];

		$sql = "INSERT INTO 202055202088_(nim, nama, alamat, uang_jajan)VALUES('$nim', '$nama', '$alamat', '$uang_jajan')";

		if(mysqli_query($koneksi,$sql)){

			header('location:index.php');
		}else{
			echo "Maaf Proses Penyimpanan Data Tidak Berhasil";
		}

	}
?>




