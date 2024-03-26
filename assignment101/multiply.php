<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $space = "   ";
      $name1 = $_POST['name1'];
      $name2 = $_POST['name2'];
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
$sum = $num1 * $num2;
 echo "<h1> Hey </h1>";
 echo "<h2> $name1$space$name2 </h2><br>" ;
echo "<p>the product of $num1 and $num2 is  $sum</p>";
}

     ?>
   </center>
  </body>
</html>
