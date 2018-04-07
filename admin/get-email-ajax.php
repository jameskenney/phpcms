<link rel="stylesheet" href="/assets/select2/dist/css/select2.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/assets/select2/dist/js/select2.full.min.js"></script>
<?php
require_once( 'config.php' );
require_once( 'functions.php' );
require_once( __DIR__ . '/../vendor/autoload.php' );

$db = new \PDO( 'mysql:dbname=phpcmsDB;host=localhost;charset=utf8mb4', 'phpcmsDB', 'T)Pu.WuRE6zW8X' );

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

