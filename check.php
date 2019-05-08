<!DOCTYPE html>
	<html>
	<head>
		<title> Data Upload</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
	</head>
	<body>
		<h2> Data Upload </h2>
		<p> <a href="admin.php">Home</a>
		<h3> Data Print </h3>
		<table cellpadding ="5" cellspacing="0" class="table table-hover">
			<tr bgcolor="CCCCCC">
				<th> No</th>
				<th> Page Count </th>
				<th> Number of Copy</th>
				<th> Paper Type</th>
				<th> Binding Type</th>
				<th> File </th>
				<th> Total Biaya </th>
				<th> Opsi</th>
			</tr>
<?php

    include 'koneksi.php';
    $id=$_GET['id'];
	$query = mysqli_query($link,"Select * FROM print_order where id='$id'") or die (mysqli_error($link));
	if(mysqli_num_rows($query)==0)
	{
		echo '<tr><td colspan="6"> Tidak ada Data ! </td> </tr>';

	}else
	{
		$no=1;
		while($data = mysqli_fetch_assoc($query))
		{
		$url = 'http://';
		echo '<tr>';
		echo '<td>'.$no.'</td>';
		echo '<td>'.$data['page'].'</td>';
		echo '<td>'.$data['copy'].'</td>';
		echo '<td>'.$data['paper_type'].'</td>';
		echo '<td>'.$data['binding'].'</td>';
		echo '<td>'. '<a href="'.htmlentities($url).$data['file_path'].'" id="link">Ini bang filenya</a>'.'</td>';
		echo '<td>'.$data['total'].'</td>';
		echo '<td> <a href="edit.php?id='.$data['id'].'"> Edit </a> | <a href="hapus.php?id='.$data['id'].'"onclick="return confirm (\'Yakin?\')">Hapus</a> </td>';
		echo '</tr>';
		$no++;
		}
	}

	
	?>	
	</table>
	</body>
	</html>