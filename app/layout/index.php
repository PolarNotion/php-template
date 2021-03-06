<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="" />
  <meta property="og:description" content="" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />

  <title>New Project</title>
  
  <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
  <!--[if lte IE 8]>
    <p class="browsehappy">You are using an <strong>outdated</strong>
      browser. Please
      <a href="http://browsehappy.com/">upgrade your browser</a> to
      improve your experience.</p>
  <![endif]-->

  <div id="wrapper" class="toggled">
    <div id="page_content_wrapper">
      <?php include __DIR__ . "/partials/_nav.php"; ?>
      <?php include __DIR__ . "/partials/_header.php"; ?>
      <div class="container">
        <?php include __DIR__ . "/partials/_modal.php"; ?>
        <?php include __DIR__ . "/partials/_article.php"; ?>
        <?php include __DIR__ . "/partials/_footer.php"; ?>
      </div>
    </div>
    <?php include __DIR__ . "/partials/sidebar.php"; ?>
  </div>


  <!-- Scripts -->
  <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>  
  <script src="js/main.js"></script>
  <script>
    //google analytics
  </script>
</body>
</html>
