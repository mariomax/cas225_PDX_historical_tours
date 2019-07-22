<?php
include '../includes/db.inc.php';

try
{
  $sql = 'SELECT tours.id, tour, body, duration, transportation, food, price, included, image, testimonial, author FROM tours INNER JOIN testimonials ON testimonialid = testimonials.id';
    // SELECT is the name of the field on the database and FROM is the name of the table.
    // Using SELECT * will include all fields from the table.
    // INNER JOIN makes a connection to an additional table.
    // ON correlates the field in the first table (tours) to the id of the other table.
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching details: ' . $e->getMessage();
  include 'error.html.php';
  exit();
}

foreach ($result as $row)
{
    $tours[] = array(
        'tour' => $row['tour'],
        'body' => $row['body'],
        'included' => $row['included'],
        'duration' => $row['duration'],
        'transportation' => $row['transportation'],
        'food' => $row['food'],
        'price' => $row['price'],
        'image' => $row['image'],
        'testimonial' => $row['testimonial'],
        'author' => $row['author']
    );
}

include 'tours.html.php';