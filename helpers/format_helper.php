<?php
/*
 * Format Date
 */
function formatDate($date) {
	$date = date("F j, Y, g:i a", strtotime($date));
	return $date;
}

/*
 * URL Format
 */
function urlFormat($str) {
	// Strip out all whitespace
	$str = preg_replace('/\s*/', $str);
	// Convert string to lowercase
	$str = strtolower($str);
	//URL encode
	$str = urldecode($str);
	return $str;
}
