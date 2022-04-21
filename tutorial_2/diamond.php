<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diamond Tutorial</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="container">
  <h1>Diamond Tutorial</h1>
  <?php 
      $n = 6;
      for ($row = 1; $row <= $n; $row++) {
        for ($i = 1; $i <= (2 * $n) - 1; $i++) {
          if ($i >= $n - ($row - 1) && $i <= $n + ($row - 1)) {
            echo "* ";
        } else {
            echo " &nbsp;&nbsp; ";
          }
       }
       echo "<br/>";
     }

    for ($row = ($n - 1); $row >= 1; $row--) {
      for ($i = 1; $i <= (2 * $n) - 1; $i++) {
        if ($i >= $n - ($row - 1) && $i <= $n + ($row - 1)) {
            echo "* ";
        } else {
            echo " &nbsp;&nbsp; ";
          }
        }
        echo "<br/>";
      }

  ?>
</body>
</html>
