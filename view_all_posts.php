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
                <form action="" method='post'>
                    <table class="table table-bordered table-hover">

                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Tags</th>
                            <th>Date</th>
                            <th>View Post</th>
                        </tr>
                        </thead>
                        <tbody>

			            <?php

			            $query = "SELECT * FROM posts ORDER BY post_id DESC ";
			            $select_posts = mysqli_query($connection,$query);

			            while($row = mysqli_fetch_assoc($select_posts )) {
				            $post_id            = escape($row['post_id']);
				            $post_author        = escape($row['post_author']);
				            $post_title         = escape($row['post_title']);
				            $post_category_id   = escape($row['post_category_id']);
				            $post_status        = escape($row['post_status']);
				            $post_image         = escape($row['post_image']);
				            $post_tags          = escape($row['post_tags']);
				            $post_date          = escape($row['post_date']);

				            echo "<tr>";

				            ?>

				            <?php

				            if(!empty($post_author)) {

					            echo "<td>$post_author</td>";

				            }

				            echo "<td>$post_title</td>";

				            $query = "SELECT * FROM categories WHERE cat_id = {$post_category_id} ";
				            $select_categories_id = mysqli_query($connection,$query);

				            while($row = mysqli_fetch_assoc($select_categories_id)) {
					            $cat_id = escape($row['cat_id']);
					            $cat_title = escape($row['cat_title']);

					            echo "<td>$cat_title</td>";

				            }

				            echo "<td>$post_status</td>";
				            echo "<td><img width='100' src='../images/$post_image' alt='image'></td>";
				            echo "<td>$post_tags</td>";
				            echo "<td>$post_date </td>";
				            echo "<td><a class='btn btn-primary' href='../post.php?p_id={$post_id}'>View Post</a></td>";

				            ?>

				            <?php
				            echo "</tr>";
			            }
			            ?>
                        </tbody>
                    </table>
                </form>
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
