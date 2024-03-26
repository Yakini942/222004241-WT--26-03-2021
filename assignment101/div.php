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
      $result;

      echo "<h1> Hey </h1>";
      echo "<h2> $name1$space$name2 </h2><br>" ;

      if ($num2 != 0) {
          $result = $num1 / $num2;
          echo "The result of $num1 / $num2 = $result";
      } else {
          echo "Error: Division by zero'";
}

     ?>
   </center>
  </body>
</html>
