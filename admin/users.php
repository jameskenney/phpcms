<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/bootstrap-grid.min.css">
<link rel="stylesheet" href="../assets/css/bootstrap-reboot.min.css">
<link rel="stylesheet" href="../assets/css/main.css">
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write( '<script src="../assets/js/jquery-3.2.1.min.js"><\/script>' )</script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<?php
require_once( 'config.php' );
require_once( __DIR__ . '/../vendor/autoload.php' );

$db = new \PDO( 'mysql:dbname=phpcmsDB;host=localhost;charset=utf8mb4', 'phpcmsDB', 'T)Pu.WuRE6zW8X' );


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