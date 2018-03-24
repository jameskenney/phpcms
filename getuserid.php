<?php
require_once( __DIR__ . "/admin/head.php" );

function getMyUserId( $email ) {
	$userId = $auth->getUserId( $email );
	return( $userId );
}

require_once( __DIR__ . "/admin/footer.php" );