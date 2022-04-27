<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate QR Code</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form method="post" action="generate_code.php">
	    <h1>QR Code</h1>
	    <input type="text" name="name" placeholder="Enter your name" required>
	    <input class="btn" type="submit" name="submit" value="Generate QR Code">
    </form>
</body>
</html>
