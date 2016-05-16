<?php

function is_https($force = FALSE)
{
	if($force !== FALSE) return $force;
	
	if($_SERVER['HTTPS'] === 'on') return TRUE;
	
	return FALSE;
}

?>
