<?php
  /**
    * Set folders
    */
  $apiFolder = 'api';
  $systemfilesFolder = 'system_files';
  $systemresourcesFolder = 'system_files/resources';
  $systemiconsFolder = 'system_files/system_icons';
  $appFolder = 'apps';
  $galleryFolder = 'files/gallery';
  $gallery_wallpaperFolder = 'wallpapers';
  /**
    * Set default wallpaper
    */
  $default_wallpaper = $galleryFolder . '/' . $gallery_wallpaperFolder . '/bg1.jpg';
  /**
    * Load up PHP API
    */
  require $apiFolder . '/php/droid.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Droid</title>
    <meta name="charset" content="UTF-8">
    <meta name="author" content="Rafael Klaessen, Wouter Molhoek, Peter Christiaanse, Marijn Pool, Gijs Verdonschot">
    <meta name="description" content="An online Android emulator">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- jQuery v3.1.0 -->
    <script type="text/javascript" src="<?php echo $apiFolder; ?>/js/jquery.js"></script>

    <!-- Site files -->
    <!-- Site CSS -->
    <link rel="stylesheet" type="text/css" href="site/css/site.css">
    <!-- Site JavaScript -->
    <script type="text/javascript" src="site/js/site.js"></script>

    <!-- API -->
    <!-- API CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $apiFolder; ?>/css/droid.css">
    <!-- API JavaScript -->
    <script type="text/javascript" src="<?php echo $apiFolder; ?>/js/droid.js"></script>

    <!-- System files -->
    <!-- System files CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $systemresourcesFolder; ?>/css/background.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $systemresourcesFolder; ?>/css/homescreen.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $systemresourcesFolder; ?>/css/lockscreen.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $systemresourcesFolder; ?>/css/statusbar.css">
    <!-- System files JavaScript -->
    <script type="text/javascript" src="<?php echo $systemresourcesFolder; ?>/js/homescreen.js"></script>
    <script type="text/javascript" src="<?php echo $systemresourcesFolder; ?>/js/lockscreen.js"></script>
    <script type="text/javascript" src="<?php echo $systemresourcesFolder; ?>/js/background.js"></script>
    <script type="text/javascript" src="<?php echo $systemresourcesFolder; ?>/js/statusbar.js"></script>
    <script type="text/javascript" src="<?php echo $systemresourcesFolder; ?>/js/time.js"></script>

  </head>
  <body>
    <!-- Page header -->
    <header id="site-header" class="site-header">
      <h1 class="page-title">Online Android simulator</h1><img id="loading" class="loading-icon" src="site/images/loading.gif" alt="Loading icon">
    </header>
    <!-- Display -->
    <main id="device-view" class="device-view">
      <?php
        /**
          * Include background
          */
        require 'system_files/background.php';
        /**
          * Include apps
          */
        require 'apps.php';
        /**
          * Include homescreen
          */
        require 'system_files/homescreen.php';
        /**
          * Include lockscreen
          */
        require 'system_files/lockscreen.php';
        /**
          * Include status bar
          */
        require 'system_files/statusbar.php';
      ?>
    </main>
    <!-- System buttons -->
    <section id="sys-btns-container" class="sys-btns-container"></section>

  </body>
</html>
