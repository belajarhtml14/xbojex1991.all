<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Instagram Followers">
    <meta name="author" content="Arif Blog>
    <link href="http://gogram.net/assets/img/gogram.png" rel="icon" type="image/x-icon" />
    <title>Instagram Followers</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/main-style.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style>
        body {
            padding-top: 100px;
            background-image: url("assets/images/slide_01.jpg");
        }
    </style>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="backcuk">
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
            <li class="active"><a href="Hubungi kami" onclick="this.href = 'kontak.php'"><i class="glyphicon glyphicon-earphone"></i> Hubungi kami</a></li>
            <li><a href="Masuk Instagram" onclick="this.href = 'masuk.php'"><i class="glyphicon glyphicon-off"></i> Masuk Instagram</a></li>          </ul>
          </div>
      </div>
    </nav>
    <div class="container">    
        <div class="col-md-6 col-md-offset-3">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title text-center">Hubungi kami</div>
                    </div>     
                    <div style="padding-top:30px" class="panel-body">
                        <form action="http://mymasterogar.host/kontak" class="form-horizontal" id="contact" method="post" accept-charset="utf-8">
                            <div class="form-group"><div class="col-sm-12 controls" id="salsakp"></div></div>
<div class="form-group">
                            <div class="col-sm-12 controls">
                                        <label>Email</label>
                                        <input type="email" name="email" value="" id="email" class="form-control" placeholder="Masukan Email" required="required"  />
                                 
                                    </div></div>
                            <div class="form-group">
                            <div class="col-sm-12 controls">
                                        <label>Subject</label>
                                        <input type="text" name="subject" value="" id="subject" class="form-control" placeholder="Masukan Subject" required="required"  />
                                 
                                    </div></div>
                            <div class="form-group">
                            <div class="col-sm-12 controls">
                                        <label>Teks</label>
                                        <textarea name="teks" cols="10" rows="5" id="teks" type="text" class="form-control" placeholder="Lebih baik jika layanan ini...." required="required" ></textarea>
                                 
                                    </div> </div>

                                <div style="margin-top:30px" class="form-group">
                                    <div class="col-sm-12 controls">
                                      <button id="btn-submit" type="submit" href="#" class="form-control btn btn-info">Submit</button>
                                    </div>
                                </div>
                            </form>                        </div>                     
                    </div>  
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html> 
