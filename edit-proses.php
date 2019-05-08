<?php

if(isset($_POST['simpan'])){
	include ('koneksi.php');
	$id=$_POST['id'];
	$page= $_POST['page'];
	$copy= $_POST['copy'];
	$paper= $_POST['paper'];
	$jilid = $_POST['jilid'];
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
	$update= mysqli_query($link,"UPDATE print_order SET page='$page', copy='$copy', paper_type='$paper', binding='$jilid', total='$total' WHERE id='$id'" ) or die (mysql_error());

	
		if('fileToUpload'!=NULL)
	{
		
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
	
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "uploads/" . $imageName )&& $update) {
		
	 	$path="http://localhost:8080/uploads/$fullname$id.jpg";
		$up=mysqli_query($link,"UPDATE user SET `path` = '$path' WHERE  id ='$id'") or die (mysqli_error($link));
	echo 'Data berhasil ditambahkan ! ';
	
        echo '<a href="myaccount.php"> Kembali </a>';
    } else {
        echo "Gagal , mohon ulangi";
		echo '<a href="upload.html"> Kembali </a>';
    }
	
	
}
	}

	if($update){
	echo 'Data berhasil di perbharui ';
	echo'<a href = "edit.php?id='.$id.'">Kembali </a>';

	}
	else{

	echo 'Gagal mengubah data ';
	echo'<a href = "edit.php?id='.$id.'">Kembali </a>';
	}
}else{
	echo '<script> windows.history.back()</script>';
	
}
?>