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
            <h1>Thank you for your tour reservation.</h1>
            <p>A member of our staff will contact you soon.</p>
            <p>Our records show you submitted the following information.</p>
            <p>Tour Selection: <?php echo htmlspecialchars($tour, ENT_QUOTES, 'UTF-8'); ?><br>
                First Name: <?php echo htmlspecialchars($fName, ENT_QUOTES, 'UTF-8'); ?><br>
                Last Name: <?php echo htmlspecialchars($lName, ENT_QUOTES, 'UTF-8'); ?><br>
                Email Address: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?><br>
                Phone: <?php echo htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'); ?><br>
                Tour Date: <?php echo htmlspecialchars($tourDate, ENT_QUOTES, 'UTF-8'); ?><br>
                Number in Group: <?php echo htmlspecialchars($groupSize, ENT_QUOTES, 'UTF-8'); ?><br>
                Food and Drink Sensitivities: <?php echo htmlspecialchars($fdSensitivities, ENT_QUOTES, 'UTF-8'); ?><br></p>
        </main>

      <?php include '../includes/footer.inc.html.php'; ?>
      <!-- This is the footer from the includes folder. -->

  </div>
</body>
</html>