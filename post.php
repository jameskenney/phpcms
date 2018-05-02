<?php
/**
 * Created by James Kenney.
 * User: James
 * Date: 4/22/2018
 * Time: 8:15 PM
 */
?>
<?php require( 'admin/includes/db.php' ); ?>
<?php include( 'includes/head.php' ); ?>


<?php
if(isset($_GET['p_id'])){

	$the_post_id = $_GET['p_id'];

}

$query = "SELECT * FROM posts WHERE post_id = $the_post_id ";

$select_all_posts_query = mysqli_query( $connection, $query );

while($row = mysqli_fetch_assoc($select_all_posts_query)) {
	$post_author  = $row['post_author'];
	$post_title   = $row['post_title'];
	$post_date    = $row['post_date'];
	$post_id      = $row['post_id'];
	$post_content = substr( $row['post_content'], 0, 200 );
}
    ?>

<body>
<div class="home-container">
    <div class="container-fluid">
        <?php require 'includes/navigation.php'; ?>
        <div class="row">
            <div class="col-md-12">
                <div class="row">

                <?php

                if(isset($_GET['p_id'])){

                    $the_post_id = $_GET['p_id'];

                }

                $query = "SELECT * FROM posts WHERE post_id = $the_post_id ";
                $select_all_posts_query = mysqli_query( $connection, $query );

                while($row = mysqli_fetch_assoc($select_all_posts_query)){
                    $post_author = $row['post_author'];
                    $post_title = $row['post_title'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = $row['post_content'];

                    ?>


                    <img width="90%" src="assets/images/<?php echo $post_image ?>">
                    <h1>
                        <a href="#"><?php echo $post_title; ?></a>
                    </h1>
                    <span><p>
                        Written on <?php echo $post_date; ?> by <?php echo $post_author; ?>
                    </p></span>

                    <p><?php echo $post_content; ?></p>

                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <footer>
            <?php require 'includes/footer.php'; ?>
        </footer>
    </div>
</div>

</body> <!--/home-container -->
</html>
