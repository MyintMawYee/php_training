<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Code</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
    include "phpqrcode/qrlib.php";

    if (isset($_POST['submit'])) {
	    $path = 'image/';
	    $file = $path . $_POST['name'] . '.png';
	    $input_text = $_POST['name'];
	    echo "<center><h2>Your QR Code</h2></center>";
	    if ($file!=='' && $input_text !=='') {
?>
            <center><img src='image/<?php echo $_POST['name'] ?>.png'></center>
    <?php
	    } else {
            echo "<center>Name or Data Field is required!</center>";
        }
	    QRcode::png($input_text, $file);
    }

    ?>
</body>
</html>
