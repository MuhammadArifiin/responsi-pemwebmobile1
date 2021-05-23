<?php
  require 'connection.php';

  if(isset($_POST["submit"])) {
    if (ins_pesan($_POST)>0){
      echo "
      <script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'contact.php';
      </script>
      ";
    } else {
      echo "
      <script>
        alert('data gagal ditambahkan!');
        document.location.href = 'contact.php';
      </script>
      ";
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>D'Corner Coffee | Contact</title>

  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/templatemo-style.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

</head>
<body>
  <!-- Preloader -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <!-- End Preloader -->
  <div class="tm-top-header">
    <div class="container">
      <div class="row">
        <div class="tm-top-header-inner">
          <div class="tm-logo-container">
            <img src="img/logo_dc.png" alt="Logo" class="tm-site-logo">
            <h1 class="tm-site-name tm-handwriting-font">D'Corner Coffee</h1>
          </div>
          <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
          <nav class="tm-nav">
            <ul>
             <li><a href="index.php">Home</a></li>
              <li><a href="menu.php">Menu</a></li>
              <li><a href="contact.php" class="active">Contact</a></li>
            </ul>
          </nav>   
        </div>           
      </div>    
    </div>
  </div>
    <section class="tm-welcome-section">
      <div class="container tm-position-relative">
        <div class="tm-lights-container">
          <img src="img/light.png" alt="Light" class="light light-1">
          <img src="img/light.png" alt="Light" class="light light-2">
          <img src="img/light.png" alt="Light" class="light light-3">  
        </div>        
        <div class="row tm-welcome-content">
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Contact Us&nbsp;&nbsp;<img src="img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">D'Corner Coffee</h2>
          <p class="gray-text tm-welcome-description" style="text-align:center;"><?php 
            echo "Untuk pemesanan, kritik, saran, serta pertanyaan lebih lanjut silahkan klik message us berikut.";
          ?></p>
          <a href="#main" class="tm-more-button tm-more-button-welcome">Message Us</a>      
        </div>
        <img src="img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">            
      </div>      
    </section>
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
        <section class="tm-section row">
          <h2 class="col-lg-12 margin-bottom-30">Send us a message</h2>
          <form action="#" method="post" class="tm-contact-form">
            <div class="col-lg-6 col-md-6">
              <div class="form-group">
                <input type="text" name="contact_name" id="contact_name" class="form-control" placeholder="NAME" />
              </div>
              <div class="form-group">
                <input type="email" name="contact_email" id="contact_email" class="form-control" placeholder="EMAIL" />
              </div>
              <div class="form-group">
                <input type="text" name="contact_subject" id="contact_subject" class="form-control" placeholder="SUBJECT" />
              </div>
              <div class="form-group">
                <textarea name="contact_message" id="contact_message" class="form-control" rows="6" placeholder="MESSAGE"></textarea>
              </div>
              <div class="form-group">
                <button class="tm-more-button" type="submit" name="submit">Send message</button> 
              </div>               
            </div>
            <div class="col-lg-6 col-md-6">
              <div id="google-map"></div>
            </div> 
          </form>
        </section>
      </div>
    </div> 
    <footer>
      <div class="tm-black-bg">
        <div class="container">
          <div class="row margin-bottom-60">
            <nav class="col-lg-3 col-md-3 tm-footer-nav tm-footer-div">
              <h3 class="tm-footer-div-title">Main Menu</h3>
              <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Directory</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Our Services</a></li>
              </ul>
            </nav>
            <div class="col-lg-5 col-md-5 tm-footer-div">
              <h3 class="tm-footer-div-title">About Us</h3>
              <p class="margin-top-15"> <?php 
                echo "D'Corner Coffee adalah sebuah cafe yang menyediakan berbagai macam minuman kopi dan non-kopi. D'Corner Coffee berlokasi di Jalan Jl. Cakra Buana (Perempatan Jl.Agung), toko kami akhirnya bisa menjangkau pasar yang lebih luas lagi melalui internet.";
              ?></p>
              <p class="margin-top-15"><?php 
                echo "D'Corner Coffee didirikan oleh Mas Andinu Wahyu Saputra pada Januari 2021. Dalam memberi layanan, kami selalu mencoba memberi persembahan terbaik kepada siapapun. Selain itu kami juga selalu menjunjung tinggi nilai-nilai etika yang baik, seperti kejujuran, ketepatan, dan profesionalitas dalam berbisnis.";
              ?></p>
              <p class="margin-top-15"><?php 
                echo "A Good Coffee makes your day better";
              ?></p>
            </div>
            <div class="col-lg-4 col-md-4 tm-footer-div">
              <h3 class="tm-footer-div-title">Get Social</h3>
              <p><?php 
                echo "Ikuti Sosial Media kami untuk mendapatkan informasi tentang penawaran khusus produk kami.";
              ?></p>
              <div class="tm-social-icons-container">
                <a href="https://www.instagram.com/dcornercoffeepky/" class="tm-social-icon"><i class="fa fa-instagram"></i></a>
                <a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
                <a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
                <a href="#" class="tm-social-icon"><i class="fa fa-youtube"></i></a>
              </div>
            </div>
          </div>          
        </div>  
      </div>      
      <div class="container">
          <div class="row tm-copyright">
           <p class="col-lg-12 small copyright-text text-center">Copyright &copy; 2021 D'Corner Coffee</p>
         </div>  
      </div>
   </footer> <!-- Footer content-->  
   <!-- JS -->
   <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
   <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
   <script>
      /* Google map
      ------------------------------------------------*/
      var map = '';
      var center;

      function initialize() {
        var mapOptions = {
          zoom: 16,
          center: new google.maps.LatLng(-2.203947, 113.907230),
          scrollwheel: false
        };
        
        map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

        google.maps.event.addDomListener(map, 'idle', function() {
          calculateCenter();
        });
        
        google.maps.event.addDomListener(window, 'resize', function() {
          map.setCenter(center);
        });
      }

      function calculateCenter() {
        center = map.getCenter();
      }

      function loadGoogleMap(){
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
        document.body.appendChild(script);
      }
      $(document).ready(function(){                
        loadGoogleMap();                
      });
      </script>
    </body>
    </html>