<?php

session_start();

function _INIT($authorisation, $authorisationResult, $message, $location) {
	global $AUTH; global $AUTHRES; global $MSG; global $HEAD;
	$AUTH = $authorisation;
	$AUTHRES = $authorisationResult;
	$MSG = $message;
	$HEAD = $location;
}

?>


