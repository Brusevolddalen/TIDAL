<!DOCTYPE html>
<html>

<head>

  <link rel="stylesheet" href="css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/main.css" media="screen,projection" rel="stylesheet" type="text/css">


  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
  <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.11/angular.min.js" type="text/javascript"></script>
  <script src="js/bootstrap/bootstrap.js"></script>


  <!--Let browser know website is optimized for mobile-->
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!--Characterset-->
  <meta charset="UTF-8">
  <title>
    TIDAL
  </title>
</head>

<body ng-app="tidal">
  <nav>
    <div class="row justify-content-between align-middle">
      <div class="col-2 text-right">
        <a href=""><img  alt="TIDAL logo" src="images/logo.png"></a>
      </div>
      <div class="col-2 text-left">
        <img class="toggler" alt="menu icon" onclick="openNav()" src="images/icons/menu_icon.png">
      </div>
    </div>

    <div id="mySidenav" class="sidenav">
      <ul>
        <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Web Player</a></li>
        <li><a href="#">Download</a></li>
        <li><a href="#">Help</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">Contact</a></li>
        <li>
          <img src="images/footer-icons/fb-icon.png"/>
          <img src="images/footer-icons/twitter-icon.png"/>
          <img src="images/footer-icons/googleplus-icon.png"/>
        </li>
      </ul>

    </div>

  </nav>




  <div ng-controller="SlideController">
    <div id="carousel" class="carousel slide section-1" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox" >
        <div ng-repeat="slide in slides" class="{{slide.class}}">
          <div class="row" style="width:100vw">
            <div class="carousel-body col-12 offset-md-2 col-md-10">
              <h1>{{ slide.title }}</h1>
              <p>{{ slide.paragraph }}</p>
              <img ng-src="{{slide.image}}" class='{{slide.imageClass}}'/>
              <div class="text-center">
                <button class="section-1-tidal-button">{{slide.button}}</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section-2">
      <img  alt="Mountain image" src="images/Section2.png"/>
    </div>
    <div class="section-3">
      <img class="img-fluid" alt="Tidal media player UI" src="images/Section3.png"/>
    </div>
    <div class="footer">
      <div class="footer-icons">
        <div class="row ">
            <div class="col-12 text-center">
              <img src="images/footer-icons/apple.png"/>
              <img src="images/footer-icons/android.png"/>
              <img src="images/footer-icons/desktop.png"/>
              <img src="images/footer-icons/wifi.png"/>
            </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-2 col-lg-6 col-10 align-self-center">
            <p>
              Seamless listening across mobile, tablet, desktop and network players. Enjoy lossless music streaming on Apple devices from iPhone, iPad and iPod to Mac, as well as on PC and Android systems. Plus integration in a wide range of high fidelity network players.
            </p>
          </div>
        </div>

      </div>
      <div class="social">
        <div class="try-button">
          <button class="tidal-button">TRY TIDAL NOW</button>
        </div>
        <div class="copyright-social justify-content-between row">
          <p class="copyright col-md-3 col-lg-2 col-sm-12 order-sm-2">
            2015 © TIDAL
          </p>
          <div class="social-icons col-md-3 col-lg-2 col-sm-12 order-sm-1">
            <img src="images/footer-icons/fb-icon.png"/>
            <img src="images/footer-icons/twitter-icon.png"/>
            <img src="images/footer-icons/googleplus-icon.png"/>
          </div>
        </div>

      </div>
    </div>
  </div>

  <script src="js/initiators.js"></script>
  <script src="js/tidal.js"></script>
  <script src="js/controllers/SlideController.js"></script>
  <script src="js/navbar.js"></script>


</body>

</html>
