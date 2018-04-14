<?php
require_once( __DIR__ . '/../bootstrap.php' );

$currentRoles = $auth->admin()->getRolesForUserByEmail( $email );

d( $currentRoles );

if ( $_POST ) {

	d( $_POST );

	echo 'danny';
	try {
		//exit;
		$myPost = $_POST[ 'myValue' ];
		$auth->admin()->addRoleForUserByEmail( $email, $_POST[ 'myValue' ] );

	} catch ( \Delight\Auth\InvalidEmailException $e ) {
		echo "unknown email address<br>";
	}
}