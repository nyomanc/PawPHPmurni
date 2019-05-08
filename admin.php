<?php 
session_start();
include('koneksi.php') 
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADMIN PAGE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styleAdmin.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="main.js"></script>
</head>
<body>
    <h2>Admin Page</h2>
    <table cellpadding="5" cellspacing="0" class="table table-hover">
        <tr bgcolor="#CCCCCC">
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Status</th>
            <th>Opsi</th>
        </tr>
        <?php
		//if($_SESSION['CekLogin']&& $_SESSION['role']=="admin" )
		//{
    
  
            $query = mysqli_query($link,"SELECT * FROM user ORDER by id ASC") or die(mysqli_error($link));

            if(mysqli_num_rows($query)==0){
                echo '<tr><td colspan="12">Tidak ada data!</td>></tr>';
            }else{
                $no = 1;
                while($data = mysqli_fetch_assoc($query)){
                    echo '<form method="POST" action="CRUD-proses.php"><tr>';
                    echo '<td>'.$data['name'].'</td>';
                    echo '<td>'.$data['phone'].'</td>';
                    echo '<td>'.$data['email'].'</td>';
                    echo '<td>'.$data['status'].'</td>';
                    echo '<td> <a href="check.php?id='.$data['id'].'"> Check </a> | <a href="hapusUser.php?id='.$data['id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';
                echo '</tr>';
                    $no++;
                }
            }
		//}
		//	else
     // header('Location: /index.php');  
        ?>
    </table>
    <td> <p> <a href="generatepdf.php"><button type="button" class="button" >Print Report </button></a></td>
	  <td> <p> <a href="logout.php"><button type="button" class="button" >Logout  </button></a></td>
</body>
</html>