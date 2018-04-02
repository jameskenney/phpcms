<?php
require_once( __DIR__ . "/admin/head.php" );
?>



   <main id="content" class="main-content">

       <!-- Searches post_tags and displays it  -->
	   <?php
	   if(isset($_POST['submit'])){

		   echo $search = $_POST['search'];


		   $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
		   $search_query = mysqli_query($connection,$query);
		   if(!$search_query) {
			   die("QUERY FAILED" . mysqli_error($connection));
		   }

		   $count = mysqli_num_rows($search_query);

		   if($count == 0) {
			   echo "<h1> No Result</h1>";

		   } else {

			   while($row = mysqli_fetch_assoc($search_query)){
				   $post_author = $row['post_author'];
				   $post_title = $row['post_title'];
				   $post_date = $row['post_date'];
				   $post_content = $row['post_content'];

				   ?>
                   <h1>
                       <a href="#"><?php echo $post_title; ?></a>
                   </h1>
                   <p>
                       Written on <?php echo $post_date; ?> by <?php echo $post_author; ?>
                   </p>
                   <p><?php echo $post_content; ?></p>
                   <a class=""btn btn-primary" href="#">Read More<span class="glyphicon glyphicon-chevron-right"></span></a>

			   <?php }
           }
	   }
	   ?>


   </main> <!-- main -->
   <?php include "sidebar.php" ?>


<?php
require_once( __DIR__ . "/admin/footer.php" );