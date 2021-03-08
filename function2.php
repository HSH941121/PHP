<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Function</h1>
    <?php
        function basic() {
          print("lorem ipsum dolor1<br>");
          print("lorem ipsum dolor2<br>");
        }

        basic();
        basic();
     ?>

     <h2>Parameter & amp argument</h2>
     <?php
        function sum($left,$right) {
          print($left + $right);
          print("<br>");
        }
          sum(2,4);
                ?>

      <h2>return</h2>
      <?php
          function sum2($left,$right) {
            return $left + $right;
          }

          print(sum2(2,4)."<br>");
          file_put_contents('result.txt',sum2(2,4));

       ?>
  </body>
</html>
