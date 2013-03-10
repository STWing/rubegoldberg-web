<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>STWing Rube Goldberg Competition</title>

  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/foundation.css" />

  <script src="js/vendor/custom.modernizr.js"></script>
</head>

<body>
  <header class="row">
    <div class="large-3 columns">
      <h1><img src="http://placehold.it/400x100&text=Logo"></h1>
    </div>
    <div class="large-9 columns">
      <ul class="button-group right">
        <li><a href="index.php" class="button">Home</a></li>
        <li><a href="rules.php" class="button">Rules</a></li>
        <li><a href="register.php" class="button">Register</a></li>
        <li><a href="schedule.php" class="button">Schedule</a></li>
      </ul>
    </div>
  </header>

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
        <!--<div class="large-6 columns">
          <ul class="inline-list right">
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
            <li><a href="#">Link 4</a></li>
          </ul>
        </div>-->
      </div>
    </div>
  </footer>

  <!-- Included JS Files -->
  <!-- Honestly, I don't know what these are for. -->
  <script src="js/vendor/zepto.js"></script>
  <script src="js/foundation/foundation.js"></script>
  <script src="js/foundation/foundation.cookie.js"></script>
  <script src="js/foundation/foundation.alerts.js"></script>
  <script src="js/foundation/foundation.clearing.js"></script>
  <script src="js/foundation/foundation.dropdown.js"></script>
  <script src="js/foundation/foundation.forms.js"></script>
  <script src="js/foundation/foundation.joyride.js"></script>
  <script src="js/foundation/foundation.magellan.js"></script>
  <script src="js/foundation/foundation.orbit.js"></script>
  <script src="js/foundation/foundation.placeholder.js"></script>
  <script src="js/foundation/foundation.reveal.js"></script>
  <script src="js/foundation/foundation.section.js"></script>
  <script src="js/foundation/foundation.tooltips.js"></script>
  <script src="js/foundation/foundation.topbar.js"></script>
  <!-- Application Javascript, safe to override -->

  <script src="js/foundation/index.js"></script>
  <script>
    $(document).foundation().foundation('joyride', 'start');
  </script>

</body>

</html>
