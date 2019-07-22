<!DOCTYPE html>
<html lang="en">
<head>
  <title>Portland Historical Tour Options</title>
  <meta name="description" content="Portland Historical Tours have offered three family run tours for decades:  the Downtown Tour, the Growth Tour, and the Landmarks Tour.">
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
      <table>
        <div id="caption"><h1>Compare Tour Options</h1>
        <tr>
          <th id="tourname">Tour</th>
          <th id="tourduration">Duration</th>
          <th id="transportation">Transportation</th>
          <th id="food">Food</th>
          <th id="price">Price</th>
          <th class="reserve">Reserve</th>
        </tr>

            <?php foreach ($tours as $row): ?>
            <!-- Notice : and not ; ends the function here! -->
            <tr>
                <td><?php echo htmlspecialchars($row['tour'],  ENT_QUOTES, 'UTF-8'); ?></td>
                <td><?php echo htmlspecialchars($row['duration'],  ENT_QUOTES, 'UTF-8'); ?></td>
                <td><?php echo htmlspecialchars($row['transportation'],  ENT_QUOTES, 'UTF-8'); ?></td>
                <td><?php echo htmlspecialchars($row['food'],  ENT_QUOTES, 'UTF-8'); ?></td>
                <td>$<?php echo htmlspecialchars($row['price'],  ENT_QUOTES, 'UTF-8'); ?></td>
                <td class="reserve"><a href="/cas225/portlandhistoricaltours/reservations">Reserve</a></td>
            </tr>
            <?php endforeach; ?>

        </div>
      </table>

        <?php foreach ($tours as $tour): ?>

            <h1><?php echo htmlspecialchars($tour['tour'], ENT_QUOTES, 'UTF-8'); ?> Tour</h1>

            <img class="image" src="../<?php echo ($tour['image']); ?>" alt="<?php echo ($tour['image']); ?>" width="200" height="200">

            <p><?php echo htmlspecialchars($tour['body'], ENT_QUOTES, 'UTF-8'); ?></p>

            <h2>What's Included?</h2>

            <ul><?php echo $tour['included']; ?></ul>
            <!-- Removed the "htmlspecialchars()" to allow HTML tags to carry
            their functionality from the database to the site. -->

            <blockquote><?php echo htmlspecialchars($tour['testimonial'], ENT_QUOTES, 'UTF-8');
            echo " - ";
            // That is the dash between the testimonial and the author on the site.
            echo htmlspecialchars($tour['author'], ENT_QUOTES, 'UTF-8'); ?></blockquote>

            <a href="/cas225/portlandhistoricaltours/reservations" class="reserve"><div>Reserve</div></a>
            <br class="clearright">

        <?php endforeach; ?>

    </main>

      <?php include '../includes/footer.inc.html.php'; ?>
      <!-- This is the footer from the includes folder. -->

  </div>
</body>
</html>