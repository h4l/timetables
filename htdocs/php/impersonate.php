<?php

require_once 'auth.php';

if(!is_super()) {
	header("HTTP/1.0 403 Nein!");
	echo "You do not have suffiient permission to impersonate";
	return;
}

set_impersonate($_REQUEST['who']);

if($_REQUEST['redirect']) {
	$location = $_REQUEST['redirect'];
	header("HTTP/1.0 302 Go over there!");
	header("Location: $location");
	echo "Redirecting to: $location";
}
else {
	echo "impersonating ".current_user();
	echo " really ".current_user(True);
}
