<?php

require_once( __DIR__ . "/admin/head.php" );
include "includes/db.php";
?>
   <main id="content" class="main-content">

       <!-- Grab front page blog content from DB and display it  -->
	   <?php
	   $query = "SELECT * FROM posts";
	   $select_all_posts_query = mysqli_query($connection,$query);

	   while($row = mysqli_fetch_assoc($select_all_posts_query)){
		   $post_title = $row['post_title'];
		   $post_author = $row['post_author'];
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





	   <?php } ?>


   </main> <!-- main -->
   <aside class="sidebar">
      <h3>The Sidebar</h3>
      <p>The sidebar typically contains things like a menu:</p>
      <ul>
         <li><a href="login.php">login</a></li>
         <li><a href="admin/exit.php">logout</a></li>
         <li><a href="admin/register.php">register user</a></li>
         <li><a href="admin/user-rolls.php">add/remove user roles</a></li>
         <li><a href="admin/delete-users.php">delete user</a></li>
         <li><a href="admin/change-password.php">change password</a></li>
         <li><a href="admin/change-email.php">change email</a></li>
         <li><a href="admin/login-as.php">login as</a></li>
         <li><a href="admin/"></a></li>
      </ul>
   </aside>
<?php
require_once( __DIR__ . "/admin/footer.php" );