<?php
/**
 * Created by James Kenney.
 * User: James
 * Date: 4/22/2018
 * Time: 8:15 PM
 */
ob_start();
?>
<?php
require "includes/navigation.php";
?>

<?php
require "includes/head.php";
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
<div class="home-container"
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron jumbotron bg-cover">
                        <p>
                            <a class="btn btn-primary btn-lg btn-blue float-right" href="#">Get Started</a>
                        </p>

                        <p class="background-jumbotron-text jumbotron-text">
                            Create an attractive and enticing, mobile responsive website fast with SiteEntice's intuitive content management system.
                        </p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="col-md-12 front-center-page-div">
                                        <i class="material-icons md-48 blue600">touch_app</i>
                                        <h1 class="entice-orange">
                                            User-Friendly Website Builder
                                        </h1>
                                        <p>
                                            Site Entice's easy-t0-use templates allow you to create beautiful websites with no coding experience necessary. A few clicks of a button, and you;ve got a website that is fast and visitor friendly.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="col-md-12 front-center-page-div">
                                        <i class="material-icons md-48 blue600">phone_iphone</i>
                                        <h1 class="entice-orange">
                                            Responsive Designs
                                        </h1>
                                        <p>
                                            The lightweight coding behind SitEntice's design templates allow you to create websites that load fast and keep your visitors engaged.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="col-md-12 front-center-page-div">
                                        <i class="material-icons md-48 blue600">slow_motion_video</i>
                                        <h1 class="entice-orange">
                                            Speedy Page Loads
                                        </h1>
                                        <p>
                                            Create websites that look great on any screen, from desktop to mobile to tablets.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4">

                            <?php include "includes/sidebar.php" ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>
                        Footer
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</body> <!--/home-container -->
</body>
