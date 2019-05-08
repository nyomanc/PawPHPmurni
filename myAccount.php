<?php
session_start();
include 'koneksi.php';
$uid=$_SESSION["userid"];
	$query = mysqli_query($link,"SELECT * FROM user where id='$uid'") or die (mysqli_error($link));

$row = mysqli_fetch_array($query);
	$id=$row[0];
	$fullname=$row[1];
	$phone=$row[2];
	$email=$row[3];
	$link=$row[5];
?>

<!DOCTYPE html>
<html>
<head>
    <title>MY ACCOUNT</title>
    <title>MY ACCOUNT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
           <a href="myaccount.php" class="w3-bar-item w3-button" style="color:black !important">My Account</a>
           <a href="editProfile.php" class="w3-bar-item w3-button" style="color:black !important">Edit Profile</a>
           <a href="chcekout.php" class="w3-bar-item w3-button" style="color:black !important">Check Out</a>
       </div>
      <div class="container-fluid">
        <a class="navbar-brand"><img src="images/Logo1.png" width="40%"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <ul class="navbar-nav ml-auto">
              <div class="btn-group">
                <li class="nav-item"><button class="button"><a class="nav-link" href="index1.php">HOME</a></li> 
                <li class="nav-item"><button class="button"><a class="nav-link" href="upload.php">UPLOAD</a></li> 
                <li class="nav-item"><button class="button"><a class="nav-link" href="index1.php/#howto">HOW TO ORDER</a></li> 
                <li class="nav-item"><button class="button"><a class="nav-link" href="index1.php/#contact">CONTACT US</a></li> 
                <li class="nav-item"><button class="button"><a class="nav-link" id="logout" href="index.php">LOGOUT</a></li> 
                </div>
            </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="container-navbar" id="container-navbar"></div>
  
 <section id="content">
        <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <img src="<?php echo $link; ?>" width="50%"  class="avatar img-circle img-thumbnail" alt="avatar"/> 
                    </div>
                    <div class="col-sm-7">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col">
                                    <h1>My Account</h1>
                                </div>
                            </div>
                            <!-- <div class="row"> -->
                                <div class="four col">
                                    <br>Name <br>
                                    <input type="text" class="text-account" name="fullname" value="<?php echo $fullname ?>" readonly="readonly"><br>
                                    <br><br>Phone  <br>
                                    <input type="text" class="text-account" name="phone" value="<?php echo $phone ?>" readonly="readonly"><br>
                                    <br><br>Email <br>
                                    <input type="text" class="text-account" name="email" value="<?php echo $email ?>" readonly="readonly"><br>
                                                               <br><br>
                                </div>
                            <!-- </div> -->
                        </form>
                    </div>
                    </div>
                
              </div>
            
 </section>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="style.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

<script>
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
</script>

</html>