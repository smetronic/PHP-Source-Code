<?php

/**
 * ---------------------------------------------------------------------------------------
 * printf — Output a formatted string
 *
 * %s = string
 * %d = integer
 * %f = float
 * ---------------------------------------------------------------------------------------
 */
printf("This post was made on %s %s, %d", 'June', '7th', '2012');

/**
 * ---------------------------------------------------------------------------------------
 * sprintf — Return a formatted string
 *
 * %s = string
 * %d = integer
 * %f = float
 * ---------------------------------------------------------------------------------------
 */
$posted = sprintf("This post was made on %s %s, %d", 'June', '7th', '2012');
echo $posted;

/**
 * ---------------------------------------------------------------------------------------
 * sscanf — Parses input from a string according to a format
 *
 * %s = string
 * %d = integer
 * %f = float
 * ---------------------------------------------------------------------------------------
 */
#Method 1
list($month, $day, $year) = sscanf("June 7th, 2012", "%s %[^,], %d");

#Method 2
sscanf("June 7th, 2012", "%s %[^,], %d", $month, $day, $year);
echo $year;



