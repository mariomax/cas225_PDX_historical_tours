<!DOCTYPE html>
<html lang="en">
<head>
  <title>Portland Historical Tour Reservations</title>
  <meta name="description" content="Reserve your spot for a historical Portland Tour. Prices range from $50 to $80 per person.">
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
      <h1>Book a Reservation</h1>
      <div id="source">Required fields are marked with an asterisk (*).</div>
      <div id="reservations">
      <form method="post" action=" ">
        <label for="tour">*Tour:</label>
        <select size="1" name="tour" id="tour">
          <option>Choose Your Tour</option>
          <option value="downtown">Downtown - $50</option>
          <option value="growth">Growth - $80</option>
          <option value="landmarks">Landmarks - $70</option>
        </select>
        <label for="myfname">*First Name:</label>
          <input type="text" name="myfname" id="myfname" required>
        <label for="mylname">*Last Name:</label>
          <input type="text" name="mylname" id="mylname" required>
        <label for="myemail">*Email:</label>
          <input type="email" name="myemail" id="myemail" required>
        <label for="myphone">Phone:</label>
          <input type="tel" name="myphone" id="myphone">
        <label for="mydate">*Tour Date:</label>
          <input type="date" name="mydate" id="mydate" required>
        <label for="mygroup">*Total Participants</label>
          <input type="number" name="mygroup" id="mygroup" min="1" max="8" required>
        <label for="mycomments">*Do you have any food or drink sensitivities?</label>
          <textarea name="mycomments" id="mycomments" rows="2" cols="20" required></textarea>
          <input id="mysubmit" type="submit" value="Submit">
      </form>
      </div>
    </main>

      <?php include '../includes/footer.inc.html.php'; ?>
      <!-- This is the footer from the includes folder. -->

  </div>
</body>
</html>