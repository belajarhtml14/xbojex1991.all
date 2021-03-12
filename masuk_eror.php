<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Instagram Followers">
    <meta name="author" content="MasterOgar RENDY">
    <link href="http://gogram.net/assets/img/gogram.png" rel="icon" type="image/x-icon" />
    <title>Instagram Followers</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/main-style.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
  <!-- SweetAlert -->
  <script src="assets/js/Alert/sweetalert.js"></script>
  <link rel="stylesheet" href="assets/css/Alert/sweetalert.min.css">

    <style>
        body {
            padding-top: 100px;
            background-image: url("assets/images/slide_01.jpg");
        }
        .sorry {
        margin-top:50px;
        }
    </style>
	
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<!-- Background -->
<div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>
  <body class="backcuk">
  <script>sweetAlert('Oops...', 'Password yang kamu masukan Salah!', 'error');</script>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
    <a href="index.php" class="navbar-brand">Instagram Followers</a>        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="Dashboard" onclick="this.href = 'index.php'"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
            <li><a href="Peraturan" onclick="this.href = 'peraturan.php'"><i class="fa fa-info-circle"></i> Peraturan</a></li>
            <li><a href="Hubungi kami" onclick="this.href = 'kontak.php'"><i class="glyphicon glyphicon-earphone"></i> Hubungi kami</a></li>
            <li class="active"><a href="Masuk Instagram" onclick="this.href = 'masuk.php'"><i class="glyphicon glyphicon-off"></i> Masuk Instagram</a></li>          </ul>
          </div>
      </div>
    </nav>
    <div class="container">    
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <center><div class="panel-title">Masuk dengan akun Instagram anda</div></center>
                    </div>     
                    <div style="padding-top:30px" class="panel-body" >
                        <form action="verification-login.php" class="form-horizontal" method="post" accept-charset="utf-8">
                            <div id="salsakp" class="input-group col-sm-12"></div>
                            <div style="margin-bottom: 20px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input type="text" name="username" value="" id="username" class="form-control" placeholder="Username Anda" required="required"  />
                                 
                                    </div>
                            <div style="margin-bottom: 20px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input type="password" name="password" value="" id="password" class="form-control" placeholder="Kata Sandi" required="required"  />
                                    </div>
                                <div style="margin-top:30px" class="form-group">
                                    <div class="col-sm-12 controls">
                                      <button type="submit" href="#" class="form-control btn btn-info">Masuk</button>
                                    </div>
                                </div><br />
                        <div style="text-align:center; font-size: 100%; position: relative; top:-10px">Lupa Password Akun Instagram Kamu <a href="Reset Password Instagram" onclick="this.href = 'https://instagram.com/accounts/password/reset/'" target="_blank">Lupa password?</a></div>
                        <div class="sorry text-center">
						    <hr>
                            <a href="https://itunes.apple.com/app/instagram/id389801252?pt=428156&amp;ct=instagramweb.login.install_link&amp;mt=8"><img height="45px" alt="Available on the App Store" src="//instagramstatic-a.akamaihd.net/bluebar/857185b/images/appstore-install-badges/badge_ios_english-en.png"></a>
                            <a href="https://play.google.com/store/apps/details?id=com.instagram.android&amp;referrer=utm_source%3Dinstagramweb%26utm_campaign%3Dlogin%26utm_medium%3Dinstall_link"><img height="45px" alt="Available on Google Play" src="//instagramstatic-a.akamaihd.net/bluebar/857185b/images/appstore-install-badges/english_get.png"></a>
                        </div>
                            </form>                        
						</div>                     
                    </div>  
        </div>
    </div>
	<canvas id="canvas"></canvas>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/index.js"></script>
  </body>
</html> 
