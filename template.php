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
    <div class="small-4 columns">
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

  <!-- First Band (Image) -->

  <div class="row">
    <div class="large-12 columns">
      <div class="vcenter" id="banner-wrapper">
        <div class="vcenter-cell">
          <div id="banner-title-wrapper">
            <h1 id="site-title">Rube Goldberg</h1>
            <p id="site-tagline">[04.06.2013 - 04.07.2013]</p>
            <? if ($dont_include) { ?>
            <a href="register.php" class="large button red hidden-space">Sign up now</a>
            <? } else { ?>
            <a href="register.php" class="large button red">Sign up now</a>
            <? } ?>
          </div>
        </div>
      </div>
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
