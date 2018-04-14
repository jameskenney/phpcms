<?php
require_once( __DIR__ . '/../bootstrap.php' );

function getUserList() {
	global $db;
	try {
		$stmt = $db->prepare( 'SELECT id, email FROM users ORDER BY id' );
		$stmt->execute();
		$users = $stmt->fetchall( PDO::FETCH_ASSOC );

	} catch ( Error $e ) {
		throw new DatabaseError();
	}

	if ( empty( $users ) ) {
		throw new UnknownUsernameException();
	} else {
		if ( \count( $users ) > 0 ) {
			return $users;
		} else {
			throw new AmbiguousUsernameException();
		}
	}
}


function getUsers() {
	//global $auth;
	global $usersJson;

	$list_of_users = getUserList();

	//d( $list_of_users );
	$usersJson = '';

	for ( $k = 0; $k < count( $list_of_users ); $k ++ ) {

		$usersJson .= '    <option value="' . $list_of_users[ $k ][ 'id' ] . '">' . $list_of_users[ $k ][ 'email' ] . '</option>';
	}

	echo( $usersJson );
}

getUsers();

