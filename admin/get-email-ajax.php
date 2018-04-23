<?php
require_once( 'config.php' );
require_once( 'functions.php' );
require_once( __DIR__ . '/../assets/vendor/autoload.php' );

//$id = $_GET[ 'id' ];
//$email = $auth->getEmail();
//$email = $_GET['email'];
//echo $email;

$id = $_GET[ 'id' ];
//echo $id;
$email = [];
$email = getEmailForUserById( $id );
//var_dump( $email );
echo $email['email'];
//echo 'danny';
//require_once( __DIR__ . "/roles.php" ); // <!-- populate user role choices -->


