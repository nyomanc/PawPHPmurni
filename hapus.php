<?php

if(isset($_GET['id'])){
	include ('koneksi.php');

	$id=$_GET['id'];
	


	$cek= mysqli_query($link," SELECT id  FROM print_order where id ='$id'") or die (mysqli_error($link));
	
	if(mysqli_num_rows($cek)==0 ){
			
		echo '<script> windows.history.back()</script>';
	}else {
		$name="nyoman";
		
		$del= mysqli_query($link, "DELETE FROM print_order where id='$id'");
	
		unlink("uploads/".$name.$id.".pdf");

		if($del){
		echo 'Data berhasil di hapus ';
		echo'<a href = "check.php">Kembali </a>';

		}
		else{

		echo 'Gagal menghapus data ';
		echo'<a href = "check.php">Kembali </a>';
		}
	}

	
}else{
	echo '<script> windows.history.back()</script>';
	
}
?>