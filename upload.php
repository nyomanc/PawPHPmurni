<!DOCTYPE html>
<html>
<head>
    <title>UPLOAD</title>
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
                        <button class="button"><li class="nav-item"><a class="nav-link" id="logout" href="index.php">LOGOUT</a></li>
                        <button class="button"><li class="nav-item"><a class="nav-link" href="upload.php#contact">CONTACT US</a></li> 
                        <button class="button"><li class="nav-item"><a class="nav-link" href="index1.php#howto">HOW TO ORDER</a></li>
                        <button class="button"><li class="nav-item"><a class="nav-link" href="upload.php">UPLOAD</a></li> 
                        <button class="button"><li class="nav-item"><a class="nav-link" href="index1.php">HOME</a></li> 
                </div>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="container-navbar" id="container-navbar"></div>
  <!-- Upload -->
  <div class="row">
    <div class="col-sm-12"><h1 style="text-align: center">Upload</h1></div>
</div>
<div class="container bootstrap snippet" style="margin-top:10px">
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
      <div class="text-center">
       
      </div><br>

        </div><!--/col-3-->
    	<div class="col-sm-9">
          <div class="tab-content">
            <div class="tab-pane active" >
                  <form class="form" action="tambah-proses.php"  enctype="multipart/form-data"  method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
						   <input type="file" name="fileToUpload"  class="text-center center-block file-upload">
                              <label for="page"><h4>Page</h4></label>
                              <input type="number" name="page" required>
                          </div>
                      </div>

                      <div class="form-group">
                          
                        <div class="col-xs-6">
                            <label for="copy"><h4>Copy</h4></label>
                            <input type="number" name="copy" size= "30" required>
                        </div>
                    </div>
          
                    <div class="form-group">
                          
                        <div class="col-xs-6">
                          <label for="jenis_kertas"><h4>Jenis Kertas</h4></label>
                          <select name ="paper"required>
                            <option value="">Pilih Paper </option>
                            <option value="a4">a4</option>
                            <option value="f4">f4</option>
                        
                        </select>
                        </div>
                    </div>

                    <div class="form-group">
                          
                        <div class="col-xs-6">
                            <label for="jilid"><h4>Jilid</h4></label>
                            <select name = "jilid" required >
                                <option value=""> Pilih Jilid </option>
                                <option value="Tidak">Tidak</option>
                                <option value="Spiral">Spiral</option>
                                <option value="Lakban">Lakban</option>
                            </select>
                        </div>
                    </div>

                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit" name="tambah" data-toggle="modal" data-target="#exampleModal"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
              
             </div><!--/tab-pane--> 
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
  
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
              <button type="button" class="btn btn-primary">Save changes</button>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="style.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

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