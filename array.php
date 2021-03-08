<!DOCTYPE html>
<html lang="'en'" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Array</h1>
    <?php
        $coworkers = array('hasunho','kimsuounghuie','borum');
        echo $coworkers[1].'<br>';
        $count = var_dump(count($coworkers));
        echo $count;
        echo "<br>";
        array_push($coworkers,'dog','cat');
        $count = var_dump(count($coworkers));
        echo $count;
     ?>
  </body>
</html>
