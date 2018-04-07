<link rel="stylesheet" href="/assets/select2/dist/css/select2.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/assets/select2/dist/js/select2.full.min.js"></script>
<?php
require_once( __DIR__ . '/config.php' );
require_once( __DIR__ . '/../vendor/autoload.php' );

$db = new PDO( 'mysql:dbname=phpcmsDB;host=localhost;charset=utf8mb4', 'phpcmsDB', 'T)Pu.WuRE6zW8X' );

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
	global $auth;
	global $usersJson;

	$list_of_users = getUserList();
	var_dump( $list_of_users );
	$usersJson = '';

	for ( $k = 0; $k < count( $list_of_users ); $k ++ ) {

		$usersJson .= '    <option value="' . $list_of_users[ $k ][ 'id' ] . '">' . $list_of_users[ $k ][ 'email' ] . '</option>';
	}

	echo( $usersJson );
}

getUsers();