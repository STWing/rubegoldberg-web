<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>STWing Rube Goldberg Competition</title>

  <link rel="stylesheet" href="css/normalize.min.css" />
  <link rel="stylesheet" href="css/foundation.css" />

  <link rel="stylesheet" href="css/site.min.css" />

  <script src="js/vendor/custom.modernizr.js"></script>
</head>

<body>
  <header class="row">
    <div class="large-4 columns">
      <h1><a href="index.php"><img src="img/stwing-logo.png"></a></h1>
    </div>
    <div class="large-8 columns">
      <ul class="button-group right">
        <li><a href="index.php" class="button">Home</a></li>
        <li><a href="rules.php" class="button">Rules</a></li>
        <li><a href="schedule.php" class="button">Schedule</a></li>
        <li><a href="register.php" class="button red">Sign up</a></li>
      </ul>
    </div>
  </header>

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
