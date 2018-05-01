<?php
/**
 * Created by James Kenney.
 * User: James
 * Date: 4/22/2018
 * Time: 8:15 PM
 */
?>
<?php require( 'includes/db.php' ); ?>
<?php include( 'includes/head.php' ); ?>


<body>
<div class="home-container">
    <div class="container-fluid">
		<?php require 'includes/navigation.php'; ?>
        <div class="row">
            <div class="col-md-12">

                    <h1>
                        Recent Posts
                    </h1>
	                <?php
	                $query                  = "SELECT * FROM posts";
	                $select_all_posts_query = mysqli_query( $connection, $query );

	                while($row = mysqli_fetch_assoc($select_all_posts_query)){
		                $post_author = $row['post_author'];
		                $post_title = $row['post_title'];
		                $post_date = $row['post_date'];
		                $post_id = $row['post_id'];
		                $post_content = substr($row['post_content'], 0,200);

		                ?>
                        <p>
			                <?php echo $post_title; ?> by <?php echo $post_author; ?>
                        </p>
                        <p><?php echo $post_content; ?>...</p>
                        <a class="btn btn-entice" href="post.php?p_id=<?php echo $post_id ?>">Read More<span class="glyphicon glyphicon-chevron-right"></span></a>

	                <?php } ?>

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
