<?php 
$prefix  = 'Thank you';
$name    = 'Albert';
// $message = $prefix . ', ' . $name;
$message = "$prefix $name"
?>
<!DOCTYPE html>
<html>
  <head>
    <title>String Operator</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2><?= $name ?>'s Order</h2>
    <p><?= $message ?>.</p>
  </body>
</html>
