<?php

require_once( __DIR__ . "/bootstrap.php" );

try {
	$userId = $auth->register( 'root@devnull.org', 'root', 'root');

	// we have signed up a new user with the ID `$userId`
} catch ( \Delight\Auth\InvalidEmailException $e ) {
	//echo "invalid email address";
} catch ( \Delight\Auth\InvalidPasswordException $e ) {
	//echo "invalid password";
} catch ( \Delight\Auth\UserAlreadyExistsException $e ) {
	//echo "user already exists";
} catch ( \Delight\Auth\TooManyRequestsException $e ) {
	//echo "too many requests";
}

try {
	$auth->loginWithUsername( 'root', 'root' );
	//echo "user is logged in" . "<br>";
} catch ( \Delight\Auth\UnknownUsernameException $e ) {
	//echo "unknown username" . "<br>";
} catch ( \Delight\Auth\AmbiguousUsernameException $e ) {
	//echo "ambiguous username" . "<br>";
} catch ( \Delight\Auth\InvalidPasswordException $e ) {
	//echo "wrong password" . "<br>";
} catch ( \Delight\Auth\EmailNotVerifiedException $e ) {
	//echo "email not verified" . "<br>";
} catch ( \Delight\Auth\TooManyRequestsException $e ) {
	//echo "too many requests" . "<br>";
}


if ( $auth->isLoggedIn() ) {
	$email = $auth->getEmail();
	echo "Howdy " . $email . "<br>";
}

$auth->logOut();;

echo "user is NOT logged in";



