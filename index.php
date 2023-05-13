<!DOCTYPE html>
<html lang="<?php echo Theme::lang() ?>">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="author" content="Bludit CMS" />

  <?php echo Theme::metaTags('title') ?>
  <?php echo Theme::metaTags('description') ?>
  <?php echo Theme::favicon('img/favicon.ico') ?>

  <?php echo Theme::css('css/bundle.min.css'); ?>
  <?php echo Theme::css('css/main.css') ?>
  <noscript>
    <?php echo Theme::css('assets/css/noscript.css') ?>
  </noscript>

  <?php Theme::plugins('siteHead') ?>
</head>

<body>
  <div class="main-container">
    <?php Theme::plugins('siteBodyBegin'); ?>
    <?php include(THEME_DIR_PHP . 'header.php'); ?>

    <?php
    if ($WHERE_AM_I == 'page') {
      include(THEME_DIR_PHP . 'page.php');
    } elseif ($WHERE_AM_I == 'dtsearch') {
      include(THEME_DIR_PHP . 'search.php');
    } else {
      include(THEME_DIR_PHP . 'home.php');
    }
    ?>

    <?php include(THEME_DIR_PHP . 'footer.php'); ?>
  </div>

  <?php echo Theme::javascript('js/bundle.min.js'); ?>
  <?php Theme::plugins('siteBodyEnd'); ?>
  </div>
</body>

</html>
