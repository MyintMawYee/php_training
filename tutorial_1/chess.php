<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chessboard Tutorial</title>
</head>
<body>
  <h1 style="color: blue;">Chessboard Using PHP</h1>
   <table style="border: 3px solid black;">
     <?php
        for($row = 1; $row <= 8; $row++){
          echo "<tr>";
          for($col = 1; $col <= 8; $col++){
            $total = $row + $col;
            if($total % 2 == 0){
              echo '<td style="width: 30px; height:30px; background-color: #fff;"></td>';
            } else{
              echo '<td style="width: 30px; height:30px; background-color: #000;"></td>';
            }
          }
          echo "</tr>";
        }
     ?>
   </table>
</body>
</html>