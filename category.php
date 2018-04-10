<?php require_once( __DIR__ . "/admin/head.php" ); ?>

   <main id="content" class="main-content">

      <!-- Grab front page blog content from DB and display it  -->
	   <?php

       if(isset($_GET['category'])){

	     $post_category_id =  $_GET['category'];

       }

	   $query = "SELECT * FROM posts WHERE post_category_id = $post_category_id ";
	   $select_all_posts_query = mysqli_query( $connection, $query );

	   while($row = mysqli_fetch_assoc($select_all_posts_query)){
		   $post_id = $row['post_id'];
		   $post_author = $row['post_author'];
		   $post_title = $row['post_title'];
		   $post_date = $row['post_date'];
		   $post_image = $row['post_image'];
		   $post_content = substr($row['post_content'], 0,200);

		   ?>
           <h1>
               <a href="post.php?p_id=<?php echo $post_id ?>"><?php echo $post_title; ?></a>
           </h1>
           <p>
               Written on <?php echo $post_date; ?> by <?php echo $post_author; ?>
           </p>
           <img src="assets/images/<?php echo $post_image ?>">
           <p><?php echo $post_content; ?></p>
           <a class="btn btn-entice" href="post.php?p_id=<?php echo $post_id ?>">Read More<span class="glyphicon glyphicon-chevron-right"></span></a>

	   <?php } ?>

   </main> <!-- main -->

<?php include "sidebar.php" ?>

<?php require_once( __DIR__ . "/admin/footer.php" );

