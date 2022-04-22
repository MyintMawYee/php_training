<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="container">
  <form action="welcome.php" method="post">
      <table>
          <tr>
              <th colspan="2"><h2 algin="center">Login</h2></th>
          </tr>
          <tr>
              <td>Username:</td>
              <td><input type="text" name="uname"></td>
          </tr>
          <tr>
              <td>Password:</td>
              <td><input type="password" name="pwd"></td>
          </tr>
          <tr>
              <td colspan="2" class="btn"><input type="submit" value="Login" name="login"></td>
          </tr>
      </table>
  </form>

</body>
</html>
