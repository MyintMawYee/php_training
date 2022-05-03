<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Chessboard Tutorial</title>
</head>
<body>
  <h1>Chessboard Using PHP</h1>
   <table>
        <?php
        for ($row = 1; $row <= 8; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= 8; $col++) {
                $total = $row + $col;
                if ($total % 2 == 0) {
                    echo '<td class="td-white"></td>';
                } else {
                    echo '<td class="td-black"></td>';
                }
            }
            echo "</tr>";
        }
     ?>
   </table>
</body>
</html>
