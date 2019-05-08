<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
if(isset($_POST['tambah']))
{
	session_start();
	include ('koneksi.php');
	$uid=$_SESSION["userid"];
	$name=$_SESSION["namauser"];
	$name=$name.' '.$uid;
	$page= $_POST['page'];
	$copy= $_POST['copy'];
	$paper= $_POST['paper'];
	$jilid = $_POST['jilid'];
	$stat=0;
	$query = mysqli_query($link,"Select MAX(id) FROM print_order") or die (mysqli_error($link));
	$data = mysqli_fetch_assoc($query);
	$id="1";
	if($paper=="a4")
	{
	$total=$page*$copy*200;
	}
	if($paper=="f4")
	{
	$total=$page*$copy*300;
	}
	if($jilid=="spiral")
	{
	$total+5000;
	}
	if($jilid=="lakban")
	{
	$total+3000;
	}
	$path="localhost:8080/uploads/$name$id.pdf";
	
	$input=mysqli_query($link,"INSERT INTO print_order VALUES (NULL, '$page', '$copy', '$paper', '$jilid', '$path', '$total', $uid, $stat)") or die(mysqli_error($link));
	$id= mysqli_insert_id($link);
	
		

	
	echo '<a href="upload.php"> Kembali </a>';




}else {
	echo '<script> windows.history.back()</script>';
}

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
if($imageFileType != "pdf"  ) {
    echo "Sorry Only PDF File ALlowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
	
	$temp = explode(".",$_FILES["fileToUpload"]["name"]);
	$imageName = "$name" ."$id". '.' .end($temp);
	$filePath = realpath($_FILES["fileToUpload"]["tmp_name"]);
	
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "uploads/" . $imageName )&& $input) {
		
	 	$path="localhost:8080/uploads/$name$id.pdf";
		$up=mysqli_query($link,"UPDATE print_order SET `file_path` = '$path' WHERE  id ='$id'") or die (mysqli_error($link));
	echo 'Data berhasil ditambahkan ! ';
        echo '<a href="tambah.php"> Jembali </a>';
    } else {
        echo "Gagal , mohon ulangi";
		echo '<a href="upload.html"> Kembali </a>';
    }
}

?>