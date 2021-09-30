<?php
  
  /*
  if(isset($_SESSION['cartItems'])) {
    $cartItems = $_SESSION['cartItems'];
  } else {
    $cartItems = 0;
  }
  */

?>

<meta name="viewport" content="width=device-width, initial-scale=1">


<style type='text/css'>

/* color overrides */
.w3-container {
  padding:  0;
  margin: 0;
}

.w3-bar, .w3-bar-block, .w3-bar-item, .w3-button, .w3-dropdown-hover, .w3-dropdown-content {
  text-align: left!important;
  padding: 0 8px 0 8px!important;
}

.w3-button:hover {
  background-color: #0C6B71!important;
  text-decoration: none;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 25;
}

#lblCartCount {
    font-size: 12px;
    background: #ff0000;
    color: #fff;
    padding: 0 5px;
    vertical-align: top;
    margin-left: -10px;
}
.badge {
  padding-left: 9px;
  padding-right: 9px;
  -webkit-border-radius: 9px;
  -moz-border-radius: 9px;
  border-radius: 9px;
}

.label-warning[href],
.badge-warning[href] {
  background-color: #c67605;
}

</style>

<!--sidebar-nav-accordian-->
<div class='w3-container' id='stickybar' style='background-color: #330F00;'>

  <div class='w3-bar'>

    <!--home-->
    <a href=<?php echo($config['path']['root'] . '/index.php'); ?> class='w3-bar-item w3-button'>
      <h3 class='white'>Home</h3></a>
    
    <!--visit us-->
    <a href=<?php echo($config['path']['main'] . '/location.php'); ?> class='w3-bar-item w3-button'>
      <h3 class='white'>Visit Us</h3></a>

    <!--instore shopping dropdown-->
    <div class='w3-dropdown-hover'><button class='w3-button' style='background-color: #330F00;'>
      <h3 class='white'>In-Store-Products <i class="fa fa-caret-down"></i></h3></button>

      <!--instore dropdown content-->
      <div class='w3-dropdown-content w3-bar-block w3-card-4' style='background-color: #4D220F;'>

        <!--clothing-->
        <a href=<?php echo($config['path']['main'] . '/clothing.php'); ?> class="w3-bar-item w3-button">
          <h4 class='white'>Women's Clothing</h4></a>
    
        <!--purses-->
        <a href=<?php echo($config['path']['main'] . '/purses.php'); ?> class="w3-bar-item w3-button">
          <h4 class='white'>Purses &amp; Bags</h4></a>
    
        <!--jewelry-->
        <a href=<?php echo($config['path']['main'] . '/jewelry.php'); ?> class="w3-bar-item w3-button">
          <h4 class='white'>Jewelry</h4></a>
  
        <!--shoes-->
        <a href=<?php echo($config['path']['main'] . '/shoes.php'); ?> class="w3-bar-item w3-button">
          <h4 class='white'>Shoes &amp; Boots</h4></a>

      </div><!--instore shopping dropdown-->
    </div><!--instore dropdown content-->

    <!--reviews-->
    <a href=<?php echo($config['path']['main'] . '/reviews.php'); ?> class="w3-bar-item w3-button">
      <h3 class='white'>Reviews</h3></a>
    
    <!--how to consign-->
    <a href=<?php echo($config['path']['main'] . '/howtoconsign.php'); ?> class="w3-bar-item w3-button">
      <h3 class='white'>How-To-Consign</h3></a>

    <!--online shopping dropdown--
      <div class='w3-dropdown-hover'><button class='w3-button' style='background-color: #330F00;'>
      <h3 class='white'>Online-Shopping <i class="fa fa-caret-down"></i></h3></button>

      <!--online dropdown content--
      <div class='w3-dropdown-content w3-bar-block w3-card-4' style='background-color: #4D220F;'>

        <!--bracelets--
        <a href=<?php echo($config['path']['main'] . '/online.php?prod=Bracelet'); ?>
        class="w3-bar-item w3-button">
          <h4 class='white'>Bracelets</h4></a>

        <!--earrings--
        <a href=<?php echo($config['path']['main'] . '/online.php?prod=Earring'); ?> 
        class="w3-bar-item w3-button">
          <h4 class='white'>Earrings</h4></a>

        <!--necklaces--
        <a href=<?php echo($config['path']['main'] . '/online.php?prod=Necklace'); ?> 
        class="w3-bar-item w3-button">
          <h4 class='white'>Necklaces</h4></a>

        <!--rings--
        <a href=<?php echo($config['path']['main'] . '/online.php?prod=Ring'); ?> 
        class="w3-bar-item w3-button">
          <h4 class='white'>Rings</h4></a>

        <!--gift certificates--
        <a href=<?php echo($config['path']['main'] . '/gift.php'); ?> 
        class="w3-bar-item w3-button">
          <h4 class='white'>Gift Certificates</h4></a>

      </div><!--online shopping dropdown--
    </div><!--online dropdown content-->
    
    <!--about-->
    <a href=<?php echo($config['path']['main'] . '/about.php'); ?> class="w3-bar-item w3-button">
      <h3 class='white'>About</h3></a>

    <!--cart--
    <a href=<?php echo($config['path']['main'] . '/cart.php'); ?>
      class="w3-bar-item w3-button w3-right">
      <h3 class='white'>Cart&nbsp;<i class="fa" style="font-size:24px">&#xf07a;</i>&nbsp;
      <span class='badge badge-warning' id='lblCartCount'><?php echo(strval($cartItems)); ?></span></h3></a-->

  </div><!--bar-->
</div><!--stickybar-->

<script>

  /* important! bottom placement required */

  window.onscroll = function() {toggleSticky()};

  var navbar = document.getElementById('stickybar');
  var sticky = navbar.offsetTop;

  function toggleSticky() {
    if (window.pageYOffset >= sticky) {
      stickybar.classList.add('sticky');
    } 
    else {
      stickybar.classList.remove('sticky');
    }
  }

</script>