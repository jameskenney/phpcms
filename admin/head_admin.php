<?php
/**
 * Created by James Kenney.
 * User: James
 * Date: 4/8/2018
 * Time: 12:06 PM
 */
require_once( 'config.php' );
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
    <link rel="stylesheet" href="../assets/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/1.0.0-beta.3/classic/ckeditor.js"></script>
</head>
<body>
<!--[if lte IE 9]><p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser </a> to improve your experience and security.</p><![endif]-->
<div class="wrapper">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="../index.php">Admin Nav Bar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/exit.php">Logout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/login-as.php">Login As</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/change-password.php">Change Password</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/change-email.php">Change Email</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admin
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/admin/users.php">View All Users</a>
                        <a class="dropdown-item" href="users.php?source=add_user">Add User</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Posts
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/admin/posts.php">Posts</a>
                        <a class="dropdown-item" href="../admin/posts.php?source=add_post">Add post</a>
                        <a class="dropdown-item" href="/admin/categories.php">View/Edit Categories</a>

                    </div>
                </li>
            </ul>
            <!-- Blog Search Well - Sends user to search.php after search -->
            <form class="form-inline mt-2 mt-md-0"  action="../search.php" method="post">
                <input  name="search" type="text" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-entice my-2 my-sm-0" name="submit" type="submit">Search</button>
            </form> <!-- /Search Form -->
        </div>
    </nav>
    <!--   </div>-->
    <header class="masthead">

    </header>