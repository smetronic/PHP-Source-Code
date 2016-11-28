<?php

$month = 'June';


/**
 * ---------------------------------------------------------------------------------------
 * if Statement
 * ---------------------------------------------------------------------------------------
 */
if($month == 'January') {
	echo 'It is Jan!';
} elseif($month == 'February') {
	echo 'It is Feb!';
} elseif($month == 'March') {

} else {
	echo 'Not the right month!';
}


/**
 * ---------------------------------------------------------------------------------------
 * switch Statement
 * ---------------------------------------------------------------------------------------
 */
switch($month) {
	case 'January':
		echo 'It is Jan!';
		break;

	case 'February':
		echo 'It is Feb!';
		break;

	case 'March':
		echo 'It is March!';
		break;		

	default:
		echo 'Not the right month!';
}

/**
 * ---------------------------------------------------------------------------------------
 * if statement using ternary operator
 * ---------------------------------------------------------------------------------------
 */
echo $month == 'June' ? "It's June" : 'Not the right month!';

/**
 * ---------------------------------------------------------------------------------------
 * if statement with boolean operator
 * ---------------------------------------------------------------------------------------
 */
if ( $month == 'May' or $month == 'June' ) {
	echo 'Is May or June';
} else {
	echo 'It is not one of those.';
}




