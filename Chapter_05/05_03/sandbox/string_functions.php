<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Strings</title>
	</head>
	<body>
	<?php
	
	$first = "Your dumb mom";
	$second = " is also fat.";

	$third = $first;
	$third .= $second;

	echo $third;
	
	?>
	<br />

	Lowercase: <?php echo strtolower($third); ?><br />
	Uppercase: <?php echo strtoupper($third); ?><br />
	Uppercase first: <?php echo ucfirst($third); ?><br />
	Uppercase words: <?php echo ucwords($third); ?><br />
	Length: <?php echo strlen($third); ?><br />
	Trim: <?php echo "A" . trim(" B C D ") . "E"; ?><br />
	Find: <?php echo strstr($third, "also"); ?><br />
	Replace by string: <?php echo str_replace("fat", "super-fat", $third); ?><br />
	Repeat: <?php echo str_repeat($third, 2); ?><br />
	Make substring: <?php echo substr($third, 5, 10); ?><br />
	Find position: <?php echo strpos($third, "dumb"); ?><br />
	Find character: <?php echo strchr($third, 'u'); ?><br />

	</body>
</html>
