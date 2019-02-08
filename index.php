<?php
	/*echo 'Hello, Anna!';
	$h = date("H");
	$img = floor($h / 6);*/
	$h = date("H");
	
	if($h < 6) {
		$img = "night.jpg";
	} else if ($h < 12) {
		$img = "morning.jpg";
	} else if ($h < 18) {
		$img = "day.jpg";
	} else {
		$img = "evening.jpg";
	}

	if($h === 0 || $h === 20) {
		$hours = "";
	} else if($h >0 && $h < 4 || $h > 20 && $h < 24) {
		$hours = "а";
	} else if($h > 3 && $h < 20) {
		$hours = "ов";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>PHP Lesson 01</title>
	<style>
		body {
			min-height: 100vh;
			background: url(img/<?php echo $img; ?>) no-repeat fixed;
			background-size: cover;
			color: #fff;
		}
	</style>
</head>
<body>
	<h1><?php echo ($h + 1) . " час$hours"; ?></h1>
</body>
</html>
