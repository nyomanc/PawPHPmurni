<!DOCTYPE html>
<html>
<head>
	<title> Edit Print Order</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>
	
<?php
		include ('koneksi.php');
		$id=$_GET['id'];
		$show = mysqli_query($link,"SELECT * FROM print_order WHERE id='$id'") or die (mysqli_error($link));

		if(mysqli_num_rows($show)==0){
			header("Location: check.php/$id");

		}else {
			$data= mysqli_fetch_assoc($show);
		}
?>
	<h2> Edit Print Order </h2>
		<p> <a href="admin.php">Home </a> / <a href="check.php?id=<?php echo $id;?>"> Back</a></p>

<div class="container-fluid">
	<form action="edit-proses.php" enctype="multipart/form-data" method="post">
                  <div class="row">        
                          <div class="col-sm-12">
						   <input type="file" name="fileToUpload"  class="text-center center-block file-upload">
                              <label for="page"><h4>Page</h4></label>
							  <input type="number" name="page" value="<?php echo $data['page']; ?>" required>
							  <label for="copy"><h4>Copy</h4></label>
                            <input type="number" name="copy" size= "30" value="<?php echo $data['copy']; ?>" required>
                          </div>
                          
                        <div class="col-sm-8"style="margin-left:24%">
                          <label for="jenis_kertas"><h4>Jenis Kertas</h4></label>
                          <select name ="paper" required>
                            <option value="">Pilih Paper </option>
                            <option value="a4">a4</option>
                            <option value="f4">f4</option>
						</select>

						<label for="jilid"><h4>Jilid</h4></label>
                            <select name = "jilid" required >
                                <option value=""> Pilih Jilid </option>
                                <option value="Tidak">Tidak</option>
                                <option value="Spiral">Spiral</option>
                                <option value="Lakban">Lakban</option>
                            </select>
						</div>
	</div>
	</div>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" name="save" value="Save"></td>
			</tr>
			<tr>
			 
	
			</tr>
		</form>