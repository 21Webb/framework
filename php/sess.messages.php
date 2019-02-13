<?php

function msg($prefix, $message) {
	$inSess = "$prefix-msg";
	$_SESSION[$inSess] = $message;
}

function msgClear($msgs) {
	if(!is_array($msgs)) { 
		return FALSE;
	}
	if(count($msgs) > 0) {
		unset($_SESSION[$msg]);
	}
}



?>
