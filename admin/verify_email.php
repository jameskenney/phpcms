<?php

require_once( __DIR__ . "/head.php" );
require_once( __DIR__ . '/../bootstrap.php' );

$server_name = strip_tags( trim( $_SERVER[ 'SERVER_NAME' ] ) );

try {
	$auth->confirmEmailAndSignIn($_GET['selector'], $_GET['token']);

	//echo "email address has been verified" . "<br>";
}
catch (\Delight\Auth\InvalidSelectorTokenPairException $e) {
	//echo "invalid token" . "<br>";
}
catch (\Delight\Auth\TokenExpiredException $e) {
	//echo "token expired" . "<br>";
}
catch (\Delight\Auth\UserAlreadyExistsException $e) {
	//echo "email address already exists" . "<br>";
}
catch (\Delight\Auth\TooManyRequestsException $e) {
	//echo "too many requests" . "<br>";
}

header('Location: ' . $server_name);
require_once( __DIR__ . "/footer.php" );