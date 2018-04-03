<?php

require_once( __DIR__ . "/head.php" );


if ( isset( $_POST[ 'btn-login' ] ) ) {
	$uname = strip_tags( trim( $_POST[ 'uname_email' ] ) );
	$umail = strip_tags( trim( $_POST[ 'uname_email' ] ) );
	$upass = strip_tags( trim( $_POST[ 'password' ] ) );
}



require_once( __DIR__ . "/footer.php" );

