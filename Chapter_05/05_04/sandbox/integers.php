<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>untitled</title>
	</head>
	<body>
	<?php
		$var1 = 3;
		$var2 = 4;
	?>
	Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5 ; ?><br />

	+= : <?php $var2 += 4; echo $var2; ?><br />
	-= : <?php $var2 -= 4; echo $var2; ?><br />
	*= : <?php $var2 *= 3; echo $var2; ?><br />
	/= : <?php $var2 /= 4; echo $var2; ?><br />
	Increment: <?php $var2++; echo $var2; ?><br />
	Decrement: <?php $var2--; echo $var2; ?><br />
	</body>
</html>
