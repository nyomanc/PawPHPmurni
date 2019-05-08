<?php
function cek($email){
  include("koneksi.php");
  echo 'alert('.$email.')';
  $query = mysqli_query($link,"Select email  FROM userwhere email ='$email'") or die (mysqli_error($link));
  $count=mysqli_num_rows($result);
  
  return $count;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
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
  <!--Navigation Bar-->
  <header>
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top" role="navigation">
      <div class="container-fluid">
        <a class="navbar-brand"><img src="images/Logo1.png" width="40%"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
                <ul class="navbar-nav ml-auto" style="float: right">
                        <div class="btn-group">
                                <button class="button"><li class="nav-item"><a class="nav-link" id="logout" href=#>LOGOUT</a></li> </button>
                                <button class="button"><li class="nav-item"><a class="nav-link" href="index.php/#contact">CONTACT US</a></li> </button>
                                <button class="button"><li class="nav-item"><a class="nav-link" href="index.php/#howto">HOW TO ORDER</a></li></button> 
                                <button class="button"><li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li> </button>
                        </div>
                  </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- <div class="container-navbar" id="container-navbar"></div> -->
  <!-- Register -->
  <section id="content">
        <div class="row">
                <div class="col-sm-12"><h1 style="text-align: center">Register</h1></div>
          </div>
        <div class="container bootstrap snippet">
        
            <div class="row">
                  <div class="col-sm-3"><!--left col-->
              <div class="text-center">
                <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                
              </div></hr><br>
        
                </div><!--/col-3-->
                <div class="col-sm-9">
                  <div class="tab-content">
                    <div class="tab-pane active" >
                        <hr>
                          <form class="form" action="register-proses.php" enctype="multipart/form-data" method="post" id="registrationForm">
                              <div class="form-group">
                                    <input type="file" name="fileToUpload"class="text-center center-block file-upload">
                                  <div class="col-xs-6">
                                      <label for="first_name"><h4>First name</h4></label>
                                      <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                                  </div>
                              </div>
        
                              <div class="form-group">
                                  
                                <div class="col-xs-6">
                                    <label for="email"><h4>Email</h4></label>
                                    <input type="email"  class="form-control" name="email" id="email" placeholder="you@email.com" onchange="myFunction1()" title="enter your email.">
                                </div>
                            </div>
                  
                            <div class="form-group">
                                  
                                <div class="col-xs-6">
                                  <label for="last_name"><h4>Last name</h4></label>
                                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                                </div>
                            </div>
        
                            <div class="form-group">
                                  
                                <div class="col-xs-6">
                                    <label for="password"><h4>Password</h4></label>
                                    <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                                </div>
                            </div>
        
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                      <label for="phone"><h4>Phone</h4></label>
                                      <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                                  </div>
                              </div>
                
                              <div class="form-group">
                                  
                                  <div class="col-xs-6">
                                    <label for="password2"><h4>Confirm Password</h4></label>
                                      <input type="password" class="form-control" name="password2" id="password2" placeholder="confirm password" onchange="myFunction()" title="enter your password2.">
                                  </div>
                              </div>
                              <div class="form-group">
                                   <div class="col-xs-12">
                                        <br>
                                          <button class="btn btn-lg btn-success" name="tambah" id="tambah" type="submit" ><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                           <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                                    </div>
                              </div>
                          </form>
                      
                      <hr>
                      
                     </div><!--/tab-pane--> 
                       
                      </div><!--/tab-pane-->
                  </div><!--/tab-content-->
        
                </div><!--/col-9-->
            </div><!--/row-->
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="style.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

echo "
<script>
function myFunction() {
    var x = document.getElementById("password");
     var y = document.getElementById("password2");
	 if(x.value!=y.value) {
	   alert("password tidak sama , nanti gak bisa login");
    document.getElementById("tambah").style.display='none';
	 }
	 else
		 document.getElementById("tambah").style.display='initial';
	 
}
</script>";
echo "
<script>
function myFunction1() {
	  var x = document.getElementById("email").value;
 alert("email tidak unik");
 
  
  if(<?php echo cek('x');?>==1)
	    alert("email tidak unik");
x.value ="";		
}
</script>";

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
