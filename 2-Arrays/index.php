<?php

/**
 * ---------------------------------------------------------------------------------------
 * Array
 *
 * # Old Way of creating an array
 * $VariableName = array(Value0, Value1, Value2);
 * 
 * # New Way of creating an array in PHP 5.4+
 * $VariableName = [Value0, Value1, Value2];
 * ---------------------------------------------------------------------------------------
 */

$names = array('google', 'Facebook', 'Twitter', 'Linkedin', 'Dribble');

$names1 = ['google', 'Facebook', 'Twitter', 'Linkedin', 'Dribble'];

/**
 * ---------------------------------------------------------------------------------------
 * Associative Array
 * 
 * $KeyValues = array(key => Value);
 * ---------------------------------------------------------------------------------------
 */
$social_sites = array(
	'google' => 'http://google.com',
	'facebook' => 'http://facebook.com',
	'twitter' => 'http://twitter.com',
);

?>
<!doctype html>
<html>
<head>
	<title>Arrays</title>
</head>
<body>
	<h1>Social Sites</h1>
	<ul>

<?php 

/**
 * ---------------------------------------------------------------------------------------
 * Printing array values on Screen
 * ---------------------------------------------------------------------------------------
 */
		foreach($names as $value) {
			echo "<li>$value</li>";
		}
/**
 * ---------------------------------------------------------------------------------------
 * Printing array Key => values on Screen
 * ---------------------------------------------------------------------------------------
 */
		foreach($social_sites as $key => $value) {
			echo $key . "=>" . $value . "<br/>";
		}
/**
 * ---------------------------------------------------------------------------------------
 * Printing array Key => values on Screen and wraping them in html elements
 * ---------------------------------------------------------------------------------------
 */
		foreach($social_sites as $name => $url) : ?>
			<li>
				<a href="<?= $url; ?>"><?= $name; ?></a>
			</li>
		<?php endforeach ?>

	</ul>
</body>
</html>