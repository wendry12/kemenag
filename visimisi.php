<!doctype html>
<html lang="en">

  <head>
    <title>Visi&Misi &mdash; Website Cek Porsi Haji Lingga</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <a href="index.php"><img src="images/logok.png" height="35px;"></a>
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li><a href="index.php" class="nav-link">Home</a></li>
                  <li><a href="profile.php">Profile</a></li>
                  <li class="active"><a href="visimisi.php" class="nav-link">Visi dan Misi</a></li>
                  <li><a href="data_haji.php" class="nav-link">Data Haji</a></li>
                  <li><a href="contact.php" class="nav-link">Kontak</a></li>
                  <li><a href="index_login.php" class="nav-link">Admin</a></li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/1.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-7">
              <h1 class="mb-2">Visi dan Misi</h1>
              <p class="text-white">"Hidup tanpa Visi dan Misi Hanyalah Sebuah Kapal yang Berlayar Tanpa Arah dan Tujuan."</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="img-years">
              <img src="images/2.jpeg" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-5 ml-auto pl-lg-5 text-center">
            <h3 class="text-center mb-4">VISI</h3>
             <?php
              include "connect.php";
              $select = mysqli_query($koneksi, "SELECT * FROM visi"); 
              $hasil = mysqli_fetch_array($select)
            ?>
            <tr>
              <td>"<?php echo $hasil['visi']; ?>"</td>
            </tr>
              <?php     ?>
            <p class="mt-5"><a href="contact.php" class="btn btn-primary text-white">Contact Us</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="img-years">
              <img src="images/k1.jpg" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-5 ml-auto pl-lg-5 text-center">
            <h3 class="text-center mb-4">MISI</h3>
             <?php
              include "connect.php";
            $no=1;
            $select = mysqli_query($koneksi, "SELECT * FROM misi");
            while ($hasil = mysqli_fetch_array($select)) {      
            ?>
            <tr>
              <td><?php echo $no++; ?>.</td>
              <td><?php echo $hasil['misi']; ?></td>
              <br>
            </tr>
              <?php   
            }
              ?>
            <p class="mt-5"><a href="contact.php" class="btn btn-primary text-white">Contact Us</a></p>
          </div>
        </div>
      </div>
    </div>

   

    <footer class="site-footer">
      <div class="container">
        <!-- <div class="row">
          <div class="col-md-4">
            <h3 class="text-white h5 mb-3">Subscribe</h3>
            <form action="" class="d-flex">
              <input type="text" class="form-control mr-3" placeholder="Enter your email">
              <input type="submit" class="btn btn-primary text-white" value="Send Now">
            </form>
          </div>
          <div class="col-md-3 ml-auto">
            <h3 class="text-white h5 mb-3">Subscribe</h3>
            <ul class="list-unstyled menu-arrow">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Testimonials</a></li>
              <li><a href="#">Terms of Service</a></li>
              <li><a href="#">Privacy</a></li>
              <li><a href="#">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h3 class="text-white h5 mb-3">About</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut dolores deserunt, obcaecati fuga quo. Autem explicabo sapiente, maiores.</p>
          </div>
        </div> -->
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://lingga.kemenag.go.id" target="_blank" >Kementrian Agama Daik Lingga</a>
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>

