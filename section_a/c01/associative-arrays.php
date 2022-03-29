<?php 
$nutrition = [
    'fat'   => 16,
    'sugar' => 42,
    'salt'  => 6.3,
    'protein' => 9.0
];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Associative Arrays</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Nutrition (per 100g)</h2>
    <p>Fat:   <?php echo $nutrition['fat']; ?>%</p>
    <p>Sugar: <?php echo $nutrition['sugar']; ?>%</p>
    <p>Salt:  <?php echo $nutrition['salt']; ?>%</p>
    <p>Protein:  <?php echo $nutrition['protein']; ?>%</p>
  </body>
</html>
