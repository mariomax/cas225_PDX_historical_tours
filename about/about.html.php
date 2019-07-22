<!DOCTYPE html>
<html lang="en">
<head>
  <title>About Portland Historical Tours</title>
  <meta name="description" content="Portland Historical Tours is a family owned Portland Tour Guide company specializing in Portland History for over 33 years.">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href=../project.css>
  <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
  <div id="wrapper">

    <?php include '../includes/header.inc.html.php'; ?>
    <!-- This is the header from the includes folder. -->

    <?php include '../includes/nav.inc.html.php'; ?>
    <!-- This is the navigation from the includes folder. -->

      <main>

        <?php foreach ($contents as $content): ?>
        <!-- $contents is the associative array created in the index.php file. -->
        <!-- Notice : instead of ; at the end of the foreach loop! -->
            <h1><?php echo htmlspecialchars($content['title'], ENT_QUOTES, 'UTF-8'); ?></h1>

            <?php echo $content['content']; ?>
            <!-- The htmlspecialchars() function was removed to allow HTML tags to carry their functionality from the database to the site. -->
        <?php endforeach; ?>

    </main>

      <?php include '../includes/footer.inc.html.php'; ?>
      <!-- This is the footer from the includes folder. -->

  </div>
</body>
</html>