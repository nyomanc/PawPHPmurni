<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
if(isset($_POST['tambah']))
{
	
	include ('koneksi.php');
	
	$firstname = $_POST['first_name'];
	$lastname= $_POST['last_name'];
	$fullname = $firstname.' '.$lastname;
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$password=md5($password);
	$tipe="pengguna";
	$query = mysqli_query($link,"Select MAX(id) FROM user") or die (mysqli_error($link));
	$data = mysqli_fetch_assoc($query);
	$id="1";
	
	$path="localhost:8080/uploads/$fullname$id.jpg";
	
	$input=mysqli_query($link,"INSERT INTO user VALUES (NULL, '$fullname', '$phone', '$email', '$password', '$path', 0, '$tipe' )") or die(mysqli_error($link));
	$id= mysqli_insert_id($link);
	
		

	
	echo '<a href="register.html"> Jembali </a>';







$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

    
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg"  && $imageFileType != "jpeg" ) {
    echo "Sorry Only JPG allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	
	$temp = explode(".",$_FILES["fileToUpload"]["name"]);
	$imageName = "$fullname" ."$id". '.' .end($temp);
	$filePath = realpath($_FILES["fileToUpload"]["tmp_name"]);
	
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "uploads/" . $imageName )&& $input) {
		
	 	$path="http://localhost:8080/uploads/$fullname$id.jpg";
		$up=mysqli_query($link,"UPDATE user SET path = '$path' WHERE  id ='$id'") or die (mysqli_error($link));
	echo 'Data berhasil ditambahkan ! ';
	header("Location: mail.php");
        echo '<a href="register.html"> Kembali </a>';
    } else {
        echo "Gagal , mohon ulangi";
		echo '<a href="upload.html"> Kembali </a>';
    }
}
}else {
	echo '<script> windows.history.back()</script>';
}
?>