<?php 
$name      = 'Albert';
$favorites = ['Ginger Chews', 'Toffee', 'Fudge',];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Echo Shorthand</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Welcome <?= $name ?></h2>
    <p>Your favorite type of candy:
       <?= $favorites[0] ?>.</p>
  </body>
</html>
