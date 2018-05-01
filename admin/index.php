<?php include "includes/admin_header.php";?>
    <div id="wrapper">
        <!-- Navigation -->
        <?php include "includes/admin_navigation.php" ?>
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to admin
                            <small> <?php 

                            if(isset($_SESSION['username'])) {

                            echo $_SESSION['username'];

                            }

                            ?>
                            </small>
                        </h1>
                    </div>
                </div><!-- /.row -->

                
                
    <?php 
    $query = "SELECT * FROM posts WHERE post_status = 'published' ";
    $select_all_published_posts = mysqli_query($connection,$query);
    $post_published_count = mysqli_num_rows($select_all_published_posts);

    $query = "SELECT * FROM posts WHERE post_status = 'draft' ";
    $select_all_draft_posts = mysqli_query($connection,$query);
    $post_draft_count = mysqli_num_rows($select_all_draft_posts);

    $query = "SELECT * FROM users_new WHERE user_role = 'subscriber'";
    $select_all_subscribers = mysqli_query($connection,$query);
    $subscriber_count = mysqli_num_rows($select_all_subscribers);
    ?>
<!--                <div class="row">-->
<!--                    <div id="columnchart_material" style="width: 'auto'; height: 500px;"></div>-->
<!--                </div>-->
            </div><!-- /.container-fluid -->
        </div>

    <?php include "includes/admin_footer.php" ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
