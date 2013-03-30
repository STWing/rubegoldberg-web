<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>STWing Rube Goldberg Competition</title>

  <link rel="stylesheet" href="css/normalize.min.css" />
  <link rel="stylesheet" href="css/foundation.css" />

  <link rel="stylesheet" href="css/site.css" />

  <script src="js/vendor/custom.modernizr.js"></script>
</head>

<body>
  <!-- Fork me on https://github.com/STWing/rubegoldberg-web -->
  <header class="row">
    <div class="large-4 columns">
      <h1><a href="index.php"><img src="img/stwing-logo.png"></a></h1>
    </div>
    <div class="large-8 columns">
      <ul class="button-group right">
        <li><a href="index.php" class="button">Home</a></li>
        <li><a href="rules.php" class="button">Rules</a></li>
        <li><a href="schedule.php" class="button">Schedule</a></li>
        <li><a href="about.php" class="button">About us</a></li>
        <li><a href="register.php" class="button red">Sign up</a></li>
      </ul>
    </div>
  </header>

  <div class="row">
    <div class="large-12 columns">
      <div class="panel">
        <p>Registration has ended. If you would still like to sign up, please
          <a href="register.php">sign up</a> here and
          <a href="mailto:beeker@stwing.org">send us an email</a>.</p>
        <p>If you have registered, please send us your T-shirt designs by
          March 31st (or else we will pseudo-randomly generate one for you).</p>
      </div>
    </div>
  </div>

  <!-- First band (large image) -->
  <div class="row">
    <div class="large-12 columns">
      <? if ($large_banner) {
           include("banner.php");
         } else {
           include("banner-min.php");
         } ?>
      <hr>
    </div>
  </div>


  <div id="content">
    <? include($main); ?>
  </div>

  <!-- Footer -->

  <footer class="row">
    <div class="large-12 columns">
      <hr />
      <div class="row">
        <div class="large-6 columns">
          <p>&copy;2013
             <a href="//www.stwing.org/">Science and Technology Wing, University of Pennsylvania</a></p>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>
