<?php include 'big-config.php'?>
<!DOCTYPE html>
<html lang="en">
 <head>
 <title><?=$title?></title>
      <meta charset="utf-8" />
      <meta name="robots" content="noindex,nofollow" />
      <meta name="viewport" content="width=device-width" />
      <meta name="referrer" content="origin">
     
      <link rel="stylesheet" href="css/big.css" />
      <link rel="stylesheet" href="css/nav.css" />
      <link rel="stylesheet" href="css/form.css" />
      <!-- Needed for font awesome icons -->     
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>

 <body>
    <main class="wrapper">
    <header>
        <h1 class="title"><i class="logo fa fa-home"></i> Kate Baldwin's Web Dev Examples </h1>
      <nav class="navbar">
        <span class="open-slide"> <a href="#" onclick="openSlideMenu()"><i class="logo fa fa-bars"></i></a></span>
        <ul class="navbar-nav">
        <?=makeLinks($config)?>
         <!--
          <li><a href="../index.php"><i class="fa fa-fw fa-bank"></i>WEB120 Portal</a></li>
          <li><a href="big.php" class="active"><i class="fa fa-fw fa-home"></i>Home</a></li>
          <li><a href="siteapp.php"><i class="fa fa-fw fa-html5"></i>Site vs App</a></li>
          <li><a href="galleries.php"><i class="fa fa-fw fa-camera-retro"></i>Galleries</a></li>
          <li><a href="flexbox.php"><i class="fa fa-fw fa-cube"></i>Flexbox</a></li>
          <li><a href="shopping-cart.php"><i class="fa fa-fw fa-shopping-basket"></i>Shopping Cart</a></li>
          <li><a href="webcam.php"><i class="fa fa-fw fa-eye"></i>Web Cam</a></li>
            -->
           <!--Start dropdown Menu -->
          <div class="dropdown">
          <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i>Google</span></a></li>  
            <div class="dropdown-content">
              <ul>
                 <li><a href="map.php"><span><i class="fa fa-fw fa-map-o"></i>Map</span></a></li>
                 <li><a href="calendar.php"><span><i class="fa fa-fw fa-calendar"></i>Calendar</span></a></li>
                 <li><a href="youtube.php"><span><i class="fa fa-fw fa-youtube-square"></i>YouTube</span></a></li>
              </ul>
            </div>
          </div> <!--End dropdown menu -->
        </ul>
      </nav>

      <!--Start side bar nav for small screens-->
      <div class="side-nav" id="side-menu">
        <a href="big.html" class="btn-close" onclick="closeSideMenu()">&times;</a>
        <a href="../index.php">WEB120 Portal</a>
        <a href="big.php" class="active">Home</a>
        <a href="siteapp.php">Site vs App</a>
        <a href="galleries.php">Galleries</a>
        <a href="flexbox.php">Flexbox</a>
        <a href="shopping-cart.php">Shopping Cart</a>
        <a href="#">Google</a>
      </div> <!--End side bar-->
    </header>
     
    <section>
 

  
