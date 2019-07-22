<?php
include '../includes/db.inc.php';
// Go out of this folder to the includes folder and get the database connection.

try
{
  $sql = 'SELECT title, body FROM content';
  // SELECT is the title of the field on the database and FROM is the name of the table.
  // * is the equivalent of select all.
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching information: ' . $e->getMessage();
  include 'error.html.php';
  exit();
}

// A foreach loop iterates through an array to display its values.
foreach ($result as $row)
{
    // This is an associative array. $contents is its variable.
    // The 'xxx' on the left are keys. The items in $row['values'] are the field names from the database.
    $contents[] = array (
        'title' => $row['title'],
        'content' => $row['body']
    );
}

include 'about.html.php';
