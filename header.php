<?php
	session_start();
	if(!isset($_SESSION["dil"])){
		include("dil/tr.php");
	}else{
		include("dil/".$_SESSION["dil"].".php");
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Flintstones Travel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="fonts/fi/flaticon.css">
    <link rel="stylesheet" href="css/flexslider.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/indent.css">
    <link rel="stylesheet" href="rs-plugin/css/settings.css">
    <link rel="stylesheet" href="rs-plugin/css/layers.css">
    <link rel="stylesheet" href="rs-plugin/css/navigation.css">
    <link rel="stylesheet" href="tuner/css/colorpicker.css">
    <link rel="stylesheet" href="tuner/css/styles.css">
  </head>
  <body>
    <!-- header page-->
    <header>
		<?php
			$url=explode("/",$_SERVER['REQUEST_URI']);
		?>
      <!-- Navigation panel-->
      <nav class="main-nav <?php if ($url[2]=="index.php"){ echo "transparent";}?> stick-fixed">
        <div class="full-wrapper relative clearfix container">
          <!-- Logo ( * your text or image into link tag *)-->
          <div class="nav-logo-wrap local-scroll"><a href="index.php" class="logo"><img src="img/<?php if ($url[2]=="index.php"){ echo "logoo.png";}else{echo "logooo1.png";}?>"  alt class="logo-white"></a></div>
          <!-- Main Menu-->
          <div class="inner-nav desktop-nav">
            <ul class="clearlist">
              <!-- Item With Sub-->
              <li><a href="index.php" class="mn-has-sub active"><?php echo $dil["anasayfa"]; ?></a></li>
              <!-- End Item With Sub-->
              <li class="slash">/</li>
              <!-- Item With Sub-->
              <li><a href="tour.php" class="mn-has-sub"><?php echo $dil["turlar"];?> <i class="fa fa-angle-down button_open"></i></a>
                <!-- Sub-->
                <ul class="mn-sub">
                  <li><a href="#">Cultural Tour</a></li>
                  <li><a href="#">Half Day Cappodocia Tour</a></li>
                  <li><a href="#">Blue Tour (Soğanlı Tour)</a></li>
				  				<li><a href="#">Rose Valley Tour</a></li>
				  				<li><a href="#">Nort Tour (Red Tour)</a></li>
				  				<li><a href="#">Sourt Tour (Green Tour)</a></li>
                </ul>
                <!-- End Sub-->
              </li>
              <!-- End Item With Sub-->
              <li class="slash">/</li>
              <!-- Item With Sub-->
              <li><a href="gallery.php" class="mn-has-sub"><?php echo $dil["galeri"];?></a></li>
              <!-- End Item With Sub-->
              <!-- span /-->
              <!-- Item With Sub-->
              <!-- End Item With Sub-->
              <!-- Item With Sub-->

              <!-- End Item With Sub-->
              <li class="slash">/</li>
              <!-- Item-->
              <li><a href="contact.php"><?php echo $dil["iletisim"];?></a></li>
              <!-- End Item-->
			  <li class="slash">/</li>
				<li>
					<a href="dil.php?dil=tr&page=<?php echo $url[2];?>"><img src="img/tr.png" width="24px" height="24px"></a>
					<a href="dil.php?dil=en&page=<?php echo $url[2];?>"><img src="img/en.png" width="24px" height="24px"></a>
				</li>
				<!--
			   <li><a href="#" class="mn-has-sub"><?php echo $dil["dilmenu"];?> <i class="fa fa-angle-down button_open"></i></a>

                <ul class="mn-sub">
                  <li><a href="dil.php?dil=tr"><?php echo $dil["trdil"];?></a></li>
                  <li><a href="dil.php?dil=en"><?php echo $dil["endil"];?></a></li>
                </ul>

              </li>
						-->
            </ul>
          </div>
          <!-- End Main Menu-->
        </div>
      </nav>
      <!-- End Navigation panel-->
    </header>
    <!-- ! header page-->
