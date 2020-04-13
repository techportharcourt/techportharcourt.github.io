<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Tech Portharcourt</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <link rel="stylesheet" href="https://use.typekit.net/ewr6ccr.css">  
  </head>
  <body>
    
  <div class="wrapper">
    <?php 
    $about = 'active';
    include "include/sidebar.php" ?>

    <main class="content">
    <?php include "include/res-nav.php" ?>
    
      <div class="body-main">
        <div class="row">
          <div class="col-md-9">
            <h6 class="clr-dk-blue">About us</h6>
            <h2 class="clr-black">
                _The Tech Community of Tech Communities in Port Harcourt.
            </h2>
          </div>
        </div>
      </div>

      <div class="row tm-pt bg-blue">
        <div class="col-md-6 pr-0">
          <div class="bg-blue about-content">
            <p class="clr-white mt-3">
              Tech Port Harcourt is the one-stop place to keep updated with all the activities going on in technology South of the Niger. 
              
              <br><br>
              Our mission is to discover, nurture, empower and build tech talents and communities by engaging stakeholders, holding effective events, and publicizing the Port Harcourt tech eco-system globally.
            </p>
          </div>
        </div>


        <div class="col-md-6 pl-0">
          <img src="img/bg-about.jpg" class="img-fluid img-abt">
        </div>
      </div>

      <!-- top portharcourt tech poeple -->
      <div class="cont-padding2 bg-dk-blue">
        <div class="row">
          <div class="col-lg-5 col-md-10">
            <h4 class="clr-white">
              We will show you why Port Harcourt is one of the best places to find tech talents and build tech businesses.
            </h4>
          </div>
        </div>

        <div class="row tech-people-padding">
          <div class="col-2 pr-0">
            <img src="img/u_1.jpg" alt="" class="img-fluid w-100 t-img">
            <img src="img/u_7.jpg" alt="" class="img-fluid w-100 t-img">
          </div>
          <div class="col-2 pr-0 pl-0">
            <img src="img/u_2.jpg" alt="" class="img-fluid w-100 t-img">
            <img src="img/u_8.jpg" alt="" class="img-fluid w-100 t-img">
          </div>
          <div class="col-2 pr-0 pl-0">
            <img src="img/u_3.jpg" alt="" class="img-fluid w-100 t-img">
            <img src="img/u_9.jpg" alt="" class="img-fluid w-100 t-img">
          </div>
          <div class="col-2 pr-0 pl-0">
            <img src="img/u_4.jpg" alt="" class="img-fluid w-100 t-img">
            <img src="img/u_10.jpg" alt="" class="img-fluid w-100 t-img">
          </div>
          <div class="col-2 pr-0 pl-0">
            <img src="img/u_5.jpg" alt="" class="img-fluid w-100 t-img">
            <img src="img/u_11.jpg" alt="" class="img-fluid w-100 t-img">
          </div>
          <div class="col-2 pr-0 pl-0">
            <img src="img/u_6.jpg" alt="" class="img-fluid w-100 t-img">
            <img src="img/u_12.jpg" alt="" class="img-fluid w-100 t-img">
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-12">
            <div class="bottom-button">
              <a href="#" class="btn btn-vol clr-dk-blue mr-3">Volunteer</a>
              <a href="#" class="btn btn-channel2 clr-white">Sponsor</a>
            </div>
          </div>
        </div>
      </div>

      <!-- footer -->
      <div class="row text-center footer-padding">
        <div class="col-md-12">
          <p>Built with <span class="clr-red">jollof <img src="img/icons/heartbeat-solid.svg" alt="heart" class="img-hrt"> power</span> by Port Harcourt’s finests.</p>
          <p class="footer-text">
            <a href="mailto:hello@techph.ng" class="clr-dk-blue">hello@techph.ng</a>
          </p>
          
          <p>© <script>document.write(new Date().getFullYear())</script> Tech Port Harcourt</p>
        </div>
      </div>
    </main>
  </div>
  <script src='js/jquery-3.3.1.min.js'></script>
  <script src='js/bootstrap.min.js'></script>
  <script src='js/main.js'></script>  
</body>
</html>