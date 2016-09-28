<?php

/**
 * @author Diego Andrade
 *
 * A simple lib for test if your servers is up!
 *
 **/

/**
 * @param $url 
 * @result boolean
 **/
function is_up($url) {
	$pos = strpos(@get_headers($url)[0], '200');
	if ($pos > -1) {
		return true;	
	} else {
		return false;
	}
}

function is_down($url) {
	$pos = strpos(@get_headers($url)[0], '404');
	if ($pos > -1) {
		return true;	
	} else {
		return false;
	}
}
