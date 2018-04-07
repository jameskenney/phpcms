<?php
/**
 * Description
 *
 * @package CampFirePixels\${MY_NAMESPACE}
 * @since   1.0.0
 * @author  Danny G Smith
 * @link    https://CampFirePixels.com
 * @license GNU General Public License 2.0+
 */

require_once( __DIR__ . '/config.php' );
require_once( 'functions.php' );

$cms_url       = "";
$server_name   = strip_tags( trim( $_SERVER[ 'SERVER_NAME' ] ) );
$document_root = strip_tags( trim( $_SERVER[ 'DOCUMENT_ROOT' ] ) );

if ( is_ssl() ) {
	$cms_url = 'https://' . $server_name . "/";
} else {
	$cms_url = 'http://' . $server_name . "/";
}

?>
<!doctype html>
<html class="no-js" lang="">
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Site Entice</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="manifest" href="site.webmanifest">
   <link rel="apple-touch-icon" href="icon.png">
   <!-- Place favicon.ico in the root directory -->

<!--   <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />-->
<!--   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css">-->
   <link rel="stylesheet" href="/assets/select2/dist/css/select2.min.css">
   <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="/assets/css/bootstrap-grid.min.css">
   <link rel="stylesheet" href="/assets/css/bootstrap-reboot.min.css">
   <link rel="stylesheet" href="/assets/css/main.css">
</head>
<body>
<!--[if lte IE 9]><p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser </a> to improve your experience and security.</p><![endif]-->
<div class="wrapper">
<!--   <div class="nav-container">-->
      <div class="nav-admin">
         <div class="nav-menu">
            <div><a href="/">home</a></div>
            <div><a href="/login.php">login</a></div>
            <div><a href="/admin/exit.php">logout</a></div>
            <div><a href="/admin/register.php">register user</a></div>
            <div><a href="/admin/user-roles.php">add/remove user roles</a></div>
            <div><a href="/admin/delete-users.php">delete user</a></div>
            <div><a href="/admin/change-password.php">change password</a></div>
            <div><a href="/admin/change-email.php">change email</a></div>
            <div><a href="/admin/login-as.php">login as</a></div>
         </div>
      </div>
<!--   </div>-->
   <header class="masthead">
      <h2 class="site-title">Standard two-column layout</h2>

	   <?php
	   if ( $auth->isLoggedIn() ) {
		   $email = $auth->getEmail();
		   echo "Howdy " . $email . "<br>";
	   }
	   ?>

   </header>
   <nav class="main">main navigation</nav>