<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>untitled</title>
	</head>
	<body>
		<?php

		$numbers = array(4,8,16,42);

		echo $numbers[1];

		?><br />

		<?php $mudblood = array(6, "mom", "your", array("x","y", "yourmom")); ?>

		<?php echo $mudblood[2];?><br/>
		<?php echo $mudblood[3];?><br/>
		<?php echo $mudblood; ?><br />


		<?php echo $mudblood[3][1]; ?><br />

		<?php $mudblood[2] = "stupid ass"; ?>
		<?php $mudblood[4] = "horse's ass"; ?>
		<?php $mudblood[] = "gob"; ?>

		<pre>
		<?php echo print_r($mudblood); ?><br />
		</pre>
	</body>
</html>
