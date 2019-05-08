<?php


session_start();
	include ('koneksi.php');
$id=$_SESSION["userid"];
$update= mysqli_query($link,"UPDATE print_order SET  stat=1 WHERE userid='$id'" ) or die (mysqli_error($link));

if($update)
{
echo'<script languange="javascript type="text/javascript">alert(" Pembayaran Sukses! , silahkan menunggu proses pencetakan ");</script>';
	echo'<script> location.href="chcekout.php"; </script>';
}
?>