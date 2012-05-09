<?php

require_once 'auth.php';

if(!$_SERVER['REMOTE_USER']) {
	header("HTTP/1.0 500 Server Error");
	?>
	<h1>Auth Failure</h1>
	<p>Raven auth does not seem to be working</p>
	<?php
}
else {
	session_start();
	set_user($_SERVER['REMOTE_USER']);
	header("Location: ../list.html");
}
