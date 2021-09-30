<?php 
  include('../config.php');
  include(COMMON . '/css/ote-css.php'); 
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <?php include(MAIN . '/header.php'); ?>
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-172716129-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-172716129-1');
  </script>

</head>

<body>

  <?php
    include(MAIN . '/menu.php');
    include(MAIN . '/shoes-content.php');
    include(MAIN . '/contact.php');
    include(MAIN . '/footer.php');
  ?>

</body>

</html>