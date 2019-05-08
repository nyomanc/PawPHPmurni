<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <meta charset="utf-8">
    <meta name="viewport" content="device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
          <ul class="navbar-nav ml-auto">
              <div class="btn-group">
                  <li class="nav-item"><button class="button"><a class="nav-link" href=#home>HOME</a></li>
                  <li class="nav-item"><button class="button"><a class="nav-link" href=#howto>HOW TO ORDER</a></li> 
                  <li class="nav-item"><button class="button"><a class="nav-link" href=#contact>CONTACT US</a></li> 
                  <li class="nav-item"><button class="button"><a class="nav-link" id="login" href=#>LOGIN</a></li> 
                  </div>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="container-navbar" id="container-navbar">

  </div>
  <!--Slider-->
  <section id="home">
      <div id="slides" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#slides" data-slide-to="0" class="active"></li>
          <li data-target="#slides" data-slide-to="1"></li>
          <li data-target="#slides" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/digital-printing1.jpg">
          </div>
          <div class="carousel-item">
            <img src="images/c25493191c43f4d6d37635cf4eacb12a.jpg">
          </div>
          <div class="carousel-item">
            <img src="images/CMYKPowdercloudtext_688_EN.png">
          </div>
          <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- Picture -->
    <div id="fixed">
        <div class="landing-text">
            <h1>PAW PRINTING</h1>
            <h3>Silahkan Login untuk melakukan Reservasi</h3>
          </div>
      </div>

  <!--How To-->
  <section id="howto">
    <div class="padding">
      <div class="container">
          <h1>How To Order</h1>
        <div class="row">
          <div class="col-sm-6">
            <br><br><img src="images/step 1.png">
          </div>
          <div class="col-sm-6 rext-center">
              <br><br> <br><br><p class="lead">1. Login atau Registrasi Terlebih Dahulu</p>
            <p class="lead" style="text-align:justify">Sebelum Anda dapat melakukan transaksi / pemesanan barang di PAW-Print.com, Anda harus mendaftarkan identitas Anda terlebih dahulu. Hal ini dilakukan untuk melengkapi keterangan si pemesan barang yang nantinya akan digunakan sebagai alamat default pada saat Anda melakukan pemesanan.</p>
          </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
              <br><br><img src="images/step 2.png">
            </div>
            <div class="col-sm-6 rext-center">
                <br><br> <br><br><p class="lead">2. Pilih Produk yang Tersedia</p>
              <p class="lead" style="text-align:justify">Pilih produk yang Anda inginkan, selanjutnya Anda dapat memilih kategori template dari produk yang Anda pilih, tersedia berbagai macam design template yang kami berikan. Apabila Anda telah memiliki design sendiri dan ingin mencetaknya sesuai dengan produk yang Anda pilih, Anda dapat menggunakan fasilitas upload file.</p>
            </div>
          </div>
          <div class="row">
              <div class="col-sm-6">
                <br><br><img src="images/step 3.png">
              </div>
              <div class="col-sm-6 rext-center">
                  <br><br> <br><br><p class="lead">3. Persetujuan Layout/Checkout Barang Pesanan</p>
                <p class="lead" style="text-align:justify">Checkout barang yang telah Anda pesan pastikan total harga barang telah sesuai dengan jumlah barang yang Anda pilih.
                    Langkah selanjutnya Anda harus menentukan metode pengiriman untuk pemesanan Anda, Anda dapat memilih pengiriman via kurir ataupun ambil langsung di outlet kami.</p>
              </div>
          </div>
          <div class="row">
              <div class="col-sm-6">
                <br><br><img src="images/step 4.png">
              </div>
              <div class="col-sm-6 rext-center">
                  <br><br> <br><br><p class="lead">5. Download Invoice & Lakukan Pembayaran</p>
                <p class="lead" style="text-align:justify">Setelah melakukan checkout pada order Anda, silahkan lakukan pembayaran dan konfirmasikan pembayaran Anda melalui link yang terdapat pada email konfirmasi pemesan yang Anda terima sebelumnya. 
                    Proses follow up setiap pemesanan yang masuk maksimal 1x24 jam setelah pembayaran kami terima.</p>
              </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                  <br><br><img src="images/step 5.png">
                </div>
                <div class="col-sm-6 rext-center">
                    <br><br> <br><br><p class="lead">6. Packing Barang & Delivery Pesanan</p>
                  <p class="lead" style="text-align:justify">Kami akan melakukan proses print saat pembayaran telah kami terima. Untuk lama proses pengerjaan barang pesanan Anda, berbeda pada setiap itemnya, berkisar antara 1-2 jam kerja. Sedangkan untuk waktu pengiriman tergantung pada alamat tujuan Anda.</p>
                </div>
              </div>
      </div>
    </div>
  </section>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
<div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
    </div>
    <div class="modal-body">
        <!--login-->
  <div id="login">
      <div class="latjur">
          <div class="bottom">
              <h3>Login</h3>
          </div>
			<form action="checklogin.php" method="post">
            <br><br>
			
              <div class="form-group">
                <!-- <label for="username1">Username</label> -->
                <input type="username" class="text-login" id="username1" name="email" placeholder="Enter Username" name="username">
              </div>
              <br><div class="form-group">
                <!-- <label for="password1">Password</label> -->
                <input type="password" class="text-login" id="password1" name="password" placeholder="Enter Password" name="password">
              </div>
              
              <button type="button" class="btn btn-primary"><a href="register.php">Register</button></a>
              <button type="submit" class="btn btn-primary" name="tambah"  onclick="login_form()">Login</button>
            </form>
      </div>
    </div>
    </div>
    <div class="modal-footer">
    </div>
  </div>
</div>


  <!-- Picture -->
  <div id="fixed1">
    <div class="landing-text">
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

   
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="style.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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