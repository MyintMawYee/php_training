<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="main">
	<h1>Age Calculator</h1>
	<div class="form-container">
		<form method="post">
			<div class="form-group">
			    <label for="">Date Of Birth : </label>
				<input type="date" name="date_of_birth">
			</div>
			<div class="form-btn clearfix">
				<input type="submit" value="Calculate">
			</div>
		</form>
	

	<?php
	    if (isset($_POST['date_of_birth']) && $_POST['date_of_birth'] != '') {
    ?>
	<div class="result">
		<?php
            echo calculateAge($_POST['date_of_birth']);
        ?>
	</div>
	<?php }

	//Calculation for Age 
	function calculateAge($date_of_birth) {
		$birth_date = new DateTime($date_of_birth);
		$current_date = new DateTime(date('d.m.y'));
		if ($birth_date > $current_date) {
			echo 'Error';
		}
		$age = $current_date->diff($birth_date);
		return 'Your Age is: ' . $age->y. ' Years '. $age->m . ' Months '. $age->d.'Days';
	}
	?>
	</div>
</body>
</html>
