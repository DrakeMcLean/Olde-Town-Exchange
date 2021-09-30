<?php

  Class ote {


    public function setOrderNo() {

      //creates random order number
      //to be stored in session var
      $orderNo = mt_rand(100000000, 999999999);
      return $orderNo;

    }  //end setOrderNo


    //open database connection
    public function openConn($config) {
    
      $conn = new mysqli(
        $config['ote']['host'],
        $config['ote']['uid'],
        $config['ote']['pwd'],
        $config['ote']['db']
      );

      //return conn object or die
      if ($conn->connect_errno) {
        die('Connection Failed: ' . $conn->connect_error);
        exit;
      } else {
        return $conn;
      }

    } //end openConn


    public function isRequired($data) {

      if ($data != '') {
        return true;
      } else {
        return false;
      }

    }  //end isRequired


    public function sanitize($data) {

      //ck if $data is empty done outside function
      $data = stripcslashes($data);   //prevents escape char
      $data = htmlentities($data);  //removes html code entirely
      $data = strip_tags($data);  //removes html parts
      return $data;

    }  //end sanitize


  } //end class ote


?>