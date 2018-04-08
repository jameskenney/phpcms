<?php require_once( __DIR__ . "/admin/head.php" ); ?>

   <main id="content" class="main-content">

      <!-- Grab front page blog content from DB and display it  -->
	   <?php
	   $query                  = "SELECT * FROM posts";
	   $select_all_posts_query = mysqli_query( $connection, $query );

	   while($row = mysqli_fetch_assoc($select_all_posts_query)){
		   $post_author = $row['post_author'];
		   $post_title = $row['post_title'];
		   $post_date = $row['post_date'];
		   $post_content = $row['post_content'];
		   $post_excerpt = $row['post_excerpt'];

		   ?>
           <h1>
               <a href="#"><?php echo $post_title; ?></a>
           </h1>
           <p>
               Written on <?php echo $post_date; ?> by <?php echo $post_author; ?>
           </p>
           <p><?php echo $post_excerpt; ?></p>
           <a class="btn btn-entice" href="#">Read More<span class="glyphicon glyphicon-chevron-right"></span></a>

	   <?php } ?>

   </main> <!-- main -->

<?php include "sidebar.php" ?>

<?php require_once( __DIR__ . "/admin/footer.php" );

