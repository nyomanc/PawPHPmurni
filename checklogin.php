<?php
session_start();

if(isset($_POST['tambah']))
{
	include ('koneksi.php');

	// Define $myusername and $mypassword 
	$email=$_POST['email']; 
	$password=$_POST['password']; 
	$password=md5($password);

	/*// To protect MySQL injection (more detail about MySQL injection)
	$email = stripslashes($email);
	$password = stripslashes($password);
	$email = mysqli_real_escape_string($link,$email);
	$password = mysqli_real_escape_string($link, $password);*/

	$result=mysqli_query($link,"SELECT * FROM user WHERE email ='$email' and password='$password'") or die (mysqli_error($link));

	// Mysql_num_row is counting table row
	$count=mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
		$id=$row[0];
	$name=$row[1];
	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1){

		// Register $myusername, $mypassword and redirect to file "login_success.php"
			//session_register("email");
		//	session_register("password"); 
		$_SESSION["userid"] =$id ;
		$_SESSION["namauser"] = $name;
		$_SESSION["CekLogin"] =TRUE;
		if($row[7]=="pengguna")
		{
			$_SESSION["Role"]="pengguna";
			header("Location: index1.php");
		}
		if($row[7]=="admin")
		{
			$_SESSION["Role"]=$row[7];
			header("Location: admin.php");
		}
	}
	else 
	{
	echo'<script languange="javascript type="text/javascript">alert(" Username / Password Salah ! ");</script>';
	echo'<script> location.href="index.php"; </script>';
	}
	
}
else
echo'<script languange="javascript type="text/javascript">alert(" Unknow Error! ");</script>';
?>