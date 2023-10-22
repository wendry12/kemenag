<!doctype html>
<html lang="en">

  <head>
    <title>Porsi &mdash; Website Cek Porsi Haji Lingga</title>
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
    <link rel="stylesheet" href="login/admin/dist/css/styles.css">

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
                  <li class="active"><a href="index.php" class="nav-link">Home</a></li>
                  <li><a href="profile.php">Profile</a></li>
                  <li><a href="visimisi.php" class="nav-link">Visi dan Misi</a></li>
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
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/12.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center ">
            <div class="col-md-7">
              <p><span style="color: #ffffff; font-family: Arial, Tahoma, Helvetica, FreeSans, sans-serif;">Disclaimer: </span></p>
        <p><span style="color: #ffffff;">
          <span style="font-family: Arial, Tahoma, Helvetica, FreeSans, sans-serif;">1) Perkiraan keberangkatan dapat berubah sesuai perubahan kuota provinsi/kab/kota/haji khusus dan perubahan regulasi; </span>
          <span style="font-family: Arial, Tahoma, Helvetica, FreeSans, sans-serif;">2) Perkiraan keberangkatan hanya dihitung untuk jemaah yang belum batal atau belum berangkat; </span>
          <span style="font-family: Arial, Tahoma, Helvetica, FreeSans, sans-serif;">3) Selama masa operasional haji, dilakukan perubahan tahun awal menjadi tahun berikutnya untuk antisipasi jemaah yang akan berangkat. Selesai masa operasional, perkiraan berangkat semua jemaah dalam status poin 2 dimulai dari musim haji berikutnya; </span>
          <span style="font-family: Arial, Tahoma, Helvetica, FreeSans, sans-serif;">4) Jika nomor porsi anda mundur pada masa operasional haji, silakan cek kembali setelah masa operasional haji.</span></span>
        </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    

    
    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center ">
            <div class="col-md-7">
              <fieldset>
                <legend>Data Jemaah</legend>
              <table class="table table-bordered ml-auto" id="dataTable" width="100%" style="border: 2px; color: black;" cellspacing="0">
            <?php
            include "connect.php";
            $cari = $_POST['cari'];
            if ($cari != "") {
              $select = mysqli_query($koneksi, "SELECT * FROM data_jan WHERE no_porsi LIKE  '%".$cari."%' OR nama LIKE '%".$cari."%' ");
            }else{
              $select = mysqli_query($koneksi, "SELECT * FROM data_jan");
            }
            
            $hasil = mysqli_fetch_array($select)
            ?>
                <tr>
                    <td><h4>Nomor Porsi</h4></td>
                    <td width="20px">:</td>
                    <td><h4><?php echo $hasil['no_porsi'];?></h4></td>                
              </tr>
              <tr>
                <td><h4>Nama</h4></td>
                <td width="20px">:</td>
                <td><h4><?php echo $hasil['nama'];?></h4></td>
              </tr>
              <tr>
                <td><h4>Kecamatan</h4></td>
                <td width="20px">:</td>
                <td><h4><?php echo $hasil['kecamatan'];?></h4></td>
              </tr>
              <tr>
                <td><h4>Provinsi</h4></td>
                <td width="20px">:</td>
                <td><h4>Kepualauan Riau</h4></td>
              </tr>
              <?php     ?>
              </table>
            </fieldset>
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

