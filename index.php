<?php
$lang = "es";
$title = "Hotel La Toscana";
$name = "Hotel La Toscana";
$es_flag = "ES";
$us_flag = "US";
$spanish = "";
$english = "";
$visitFacebook = "";
$underConstruction = "";
$emailNotification = "";
$email = "";
$buttonText = "";
$copyright = "";
if(!isset($_GET["lang"])){
  $lang = "es";
}else if($_GET["lang"]=="es"){
  $lang = "es";
}else{
  $lang = "us";
}
if($lang=="es"){
  $title = "Hotel La Toscana Villavicencio - Pagina en construccion";
  $name = "Hotel La Toscana";
  $spanish = "Español";
  $english = "Inglés";
  $visitFacebook = "Visítanos en Facebook";
  $underConstruction = "Gracias por visitarnos, en este momento estamos construyendo nuestro sitio";
  $emailNotification = "Ingresa tu correo para recibir más información";
  $email = "Tu Correo electrónico";
  $buttonText = "Notificarme";
  $copyright = "Realizado por";
}else{
  $title = "Toscana Hotel - Site under construction";
  $name = "Toscana Hotel";
  $spanish = "Spanish";
  $english = "English";
  $visitFacebook = "Follow on Facebook";
  $underConstruction = "Thanks for visiting us, we are building our site";
  $emailNotification = "Register your email to receive more information";
  $email = "Your email";
  $buttonText = "Notify";
  $copyright = "Developed by";
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />
  <title><?php echo $title;?></title>
  
  <link href="css/bootstrap.css" rel="stylesheet" />
	<link href="css/coming-sssoon.css" rel="stylesheet" />    
    
  <!--     Fonts     -->
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
  
</head>

<body>
<nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">  
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         <li class="dropdown">
          <?php if($lang=="es"):?>
            <a href="?lang=es" class="dropdown-toggle" data-toggle="dropdown"> 
              <img src="images/flags/<?php echo $es_flag;?>.png"/>
              <?php echo $spanish;?>
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a href="?lang=us"><img src="images/flags/<?php echo $us_flag;?>.png"/><?php echo $english;?></a></li>
            </ul>
          <?php else:?>
            <a href="?lang=us" class="dropdown-toggle" data-toggle="dropdown"> 
              <img src="images/flags/<?php echo $us_flag;?>.png"/>
              <?php echo $english;?>
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
              <li><a href="?lang=es"><img src="images/flags/<?php echo $es_flag;?>.png"/><?php echo $spanish;?></a></li>
            </ul>
          <?php endif?>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li>
              <a href="https://es-la.facebook.com/hotelcampestrelatoscanavillavicencio/"> 
                  <i class="fa fa-facebook-square"></i>
                  <?php echo $visitFacebook;?>
              </a>
          </li>
       </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
<div class="main" style="background-image: url('images/default.jpg')">

    <div class="cover black" data-color="black"></div>
     
    <div class="container">
        <h1 class="logo cursive">
            <?php echo $name; ?>
        </h1>

        <div class="content">
            <h4 class="motto"><?php echo $underConstruction;?>.</h4>
            <div class="subscribe">
                <h5 class="info-text">
                  <?php echo $emailNotification;?>
                </h5>
                <div class="row">
                    <div class="col-md-5 col-md-offset-4">
                        <form class="form-inline" role="form">
                          <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail2"></label>
                            <input type="email" class="form-control transparent" placeholder="<?php echo $email;?>">
                          </div>
                          <button type="submit" class="btn btn-danger btn-fill"><?php echo $buttonText;?></button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
      <div class="container">
        <?php echo $copyright;?><a href="http://wificolombia.net/"> WiFiColombia</a>
      </div>
    </div>
 </div>
 </body>
   <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
   <script src="js/bootstrap.min.js" type="text/javascript"></script>

</html>