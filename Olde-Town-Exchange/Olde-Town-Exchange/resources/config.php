<?php

  //used for images and menu cmds on hostGator prod site
  //defined constants do not work with <a href= ... >
  $config = array (
    //used for images and menu commands
    //defined constants do not work with <a href= ... >
  	'path' => array (
      'root' => 'https://oldetownexchange.com',
      'com' => 'https://oldetownexchange.com/public_html',
      'main' => 'https://oldetownexchange.com/resources/templates'
  	)
  );

/*
  //used for images and menu cmds on localhost
  //defined constants do not work with <a href= ... >
  $config = array (
    'path' => array (
      'root' => 'http://localhost/ote',
      'com' => 'http://localhost/ote/public_html',
      'main' => 'http://localhost/ote/resources/templates'
    )
  );
*/

  //used to include files
  defined('COMMON')
    or define('COMMON', dirname(__DIR__) . '/public_html');

  defined('MAIN')
    or define('MAIN', dirname(__DIR__) . '/resources/templates');

?>