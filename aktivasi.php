<?php


if(isset($_GET['id'])){
	include ('koneksi.php');

	$id=$_GET['id'];
	


	$cek= mysqli_query($link," SELECT id  FROM user where id ='$id'") or die (mysqli_error($link));
	
	if(mysqli_num_rows($cek)==0 ){
			
		echo '<script> windows.history.back()</script>';
	}else {
		
		$update= mysqli_query($link,"UPDATE user SET status=1 WHERE id='$id'" ) or die (mysqli_error());




		if($update){
		echo'<script languange="javascript type="text/javascript">alert(" Berhsil Verfikasi ");</script>';
		echo'<script> location.href="index.php"; </script>';

		}
		else{

		echo'<script languange="javascript type="text/javascript">alert(" Gagal ");</script>';
				echo'<script> location.href="index.php"; </script>';
		}
	}

	
}else {
	echo'<script languange="javascript type="text/javascript">alert(" Gagal ");</script>';
				echo'<script> location.href="index.php"; </script>';
	
}



?>