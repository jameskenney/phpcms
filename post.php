<?php require_once( __DIR__ . "/admin/head.php" ); ?>

	<main id="content" class="main-content">

		<!--   -->
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
			<h1>
				<a href="#"><?php echo $post_title; ?></a>
			</h1>
			<p>
				Written on <?php echo $post_date; ?> by <?php echo $post_author; ?>
			</p>
            <img width="90%" src="assets/images/<?php echo $post_image ?>">
			<p><?php echo $post_content; ?></p>

		<?php } ?>

	</main> <!-- main -->

<?php include "sidebar.php" ?>

<?php require_once( __DIR__ . "/admin/footer.php" );