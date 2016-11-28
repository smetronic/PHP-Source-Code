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
$arr1 = array('Alex', 'Max', 'Tom', 'John');

/**
 * ---------------------------------------------------------------------------------------
 * Associative Array
 * 
 * $KeyValues = array(key => Value);
 * ---------------------------------------------------------------------------------------
 */
$arr = array(
	'CEO' => 'Alex',
	'CIO' => 'Max',
	'CFO' => 'Tom'
);

/**
 * ---------------------------------------------------------------------------------------
 * Printing array Key => values on Screen and wraping them in html elements using "foreach"
 * ---------------------------------------------------------------------------------------
 */
foreach($arr as $title => $name) {
	echo "<li><strong>$title</strong> - $name</li>";
}

/**
 * ---------------------------------------------------------------------------------------
 * Printing array values on Screen and wraping them in html elements using "for"
 * ---------------------------------------------------------------------------------------
 */
for( $i = 0; $i < count($arr1); $i++ ) {
	echo "<li>$arr1[$i]</li>";
}

/**
 * ---------------------------------------------------------------------------------------
 * Printing array values on Screen and wraping them in html elements using "while"
 * ---------------------------------------------------------------------------------------
 */
$i = 0;
while($i < count($arr1) ) {
	echo "<li>$arr1[$i]</li>";
	$i++;
}
