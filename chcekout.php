<!DOCTYPE html>
<html>
<head>
    <title>CHECKOUT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <div id="main">
  <!--Navigation Bar-->
  <header>
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top" role="navigation">
            <button id="openNav" class="sideBtn Btn" onclick="w3_open()">&#9776;</button>
            <!-- Sidebar -->
       <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none ; top:0" id="mySidebar">
           <button onclick="w3_close()" class="w3-bar-item w3-large">Close &times;</button>
           <a href="myAccount.php" class="w3-bar-item w3-button" style="color:black !important">My Account</a>
           <a href="editProfile.php" class="w3-bar-item w3-button" style="color:black !important">Edit Profile</a>
           <a href="chcekout.php" class="w3-bar-item w3-button" style="color:black !important">Check Out</a>
       </div>
      <div class="container-fluid">
        <a class="navbar-brand"><img src="images/Logo1.png" width="40%"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <ul class="navbar-nav ml-auto" style="float: right">
              <div class="btn-group">
                <button class="button"><li class="nav-item"><a class="nav-link" id="logout" href="logout.php">LOGOUT</a></li>
                <button class="button"><li class="nav-item"><a class="nav-link" href="index1.php/#contact">CONTACT US</a></li> 
                <button class="button"><li class="nav-item"><a class="nav-link" href="index1.php/#howto">HOW TO ORDER</a></li>
                <button class="button"><li class="nav-item"><a class="nav-link" href="upload.php">UPLOAD</a></li> 
                <button class="button"><li class="nav-item"><a class="nav-link" href="index1.php">HOME</a></li> 
                </div>
            </ul>
        </div>
      </div>
    </nav>
    
  </header>
    
      
        <div class="container-navbar" id="container-navbar"></div>

        <div class="container">
        <div class="row">
            <div class="col-md-12">
                  <table cellpadding ="5" cellspacing="0" class="table table-hover">
                          <tr bgcolor="CCCCCC">
                              <th> No</th>
                              <th> Page Count </th>
                              <th> Number of Copy</th>
                              <th> Paper Type</th>
                              <th> Binding Type</th>
                              <th> File </th>
                              <th> Total Cost </th>
                              <th> Opsi</th>
                          </tr>
<?php
session_start();
	include 'koneksi.php';
	$name=$_SESSION["namauser"];
		$id=$_SESSION["userid"];
	$query = mysqli_query($link,"Select * FROM print_order where userid='$id'AND stat!=1") or die (mysqli_error($link));
	if(mysqli_num_rows($query)==0)
	{
		echo '<tr><td colspan="6"> Belum ada pesanan  kakak '.$name.', yuk dipesan kak </td> </tr>';
		echo'<script languange="javascript type="text/javascript">myfunction();</script>';
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
		echo '<td>'. '<a href="'.$data['file_path'].'" id="link">Ini bang filenya</a>'.'</td>';
		echo '<td>'.$data['total'].'</td>';
		echo '<td> <a href="upload.php?id='.$data['id'].'"   > Edit </a> /  <a href="hapus.php?id='.$data['id'].'"onclick="return confirm (\'Yakin?\')">Hapus"</a> </td>';
		echo '</tr>';
		$no++;
		}
	}

	
	?>
                  </table>
            </div>
            <div class="form-group">
                    <div class="col-xs-12">
                         <br>
                           <button class="btn btn-lg btn-success" type="submit" id="bayar" name="bayar" data-toggle="modal" data-target="#exampleModal"><i class="glyphicon glyphicon-ok-sign"></i> Pay</button>
                     </div>
               </div>
        </div>
      
        </div>
      
      <!-- Confirm -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Are You Sure ?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button  onclick="window.location.href='/checkout-proses.php'" type="button" class="btn btn-primary" >Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <div class="about">
            <h4 class="text-about">About</h4>
            <br><h5 class="text-about">PAW  Printing is a company in the field of digital printing. This company started from 2015 precisely in September. 
                This company was established due to the rapid development of technology, thus increasing the quality of life. 
                Not only this, but because of the strategic location of Yogyakarta for students. Many students use this service to print brochures for campuses, pamphlets, or other things.</h5><br>
          </div>
          <!-- Footer -->
        <footer id="contact" class="container-fluid text-center">
            <br><h3> Contact Us </h3><br>
            <div class="row">
              <div class="col-sm-2">
                  <img src="images/Instagram-logo.png" width="25%"><h5>@paw.printing</h5>
              </div>
              <div class="col-sm-2">
                <img src="images/facebook_circle-512.png" width="20%"><h5>PAW Printing</h5>
              </div>
              <div class="col-sm-2">
                  <img src="images/twitter_PNG28.png" width="25%"><h5>@paw_printing</h5>
              </div>
            </div>
          </footer>   
      </div>


</body>
echo "
<script>
function myFunction() {
 
    document.getElementById("bayar").style.display='none';
	 
	 
}
</script>";
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="style.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script>


// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("login");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>

</html>