<?php

//LastUpdated: 20210120.748p
//Development Version vShoppingCart

//hostgator prod site (top row)
include(realpath(dirname(__FILE__) . '/resources/config.php'));

session_unset();
session_start();

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<meta name='keywords' content='not used by google'>
	<meta name='description' content='ad copy, 160 characters, used by google sometimes'

</head>

<body>

  <?php 

  	if (isset($_GET['p']) == 'location') {
  		include(MAIN . '/location.php');
  	} else {
	  	include(MAIN . '/home.php');
	}

  ?>

</body>

</html>