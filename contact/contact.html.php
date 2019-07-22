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
      <h1>Questions? We'd love to hear from you!</h1>
      <form method="post" action=" " id="inquiryForm">
          <!-- Action is blank so that the index page itself is processing the form. -->
        <label for="myName">Name:</label>
          <input type="text" name="myName" id="myName">
        <label for="myEmail">E-mail:</label>
          <input type="text" name="myEmail" id="myEmail">
        <label for="myQuestion">Question:</label>
          <textarea form="inquiryForm" rows="10" cols="50" name="myQuestion" id="myQuestion"></textarea>
        <input id="mySubmit" type="submit" value="Submit">
      </form>
    </main>

      <?php include '../includes/footer.inc.html.php'; ?>
      <!-- This is the footer from the includes folder. -->

  </div>
</body>
</html>