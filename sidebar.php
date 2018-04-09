<?php
/**
 * Created by James Kenney.
 * User: James
 * Date: 3/25/2018
 * Time: 9:34 PM
 */
?>
<aside class="sidebar">
    <h3>The Sidebar</h3>
    <p>The sidebar typically contains things like a menu:</p>
    <!-- Grab categories from DB and display it  -->
	<?php
	$query = "SELECT * FROM categories";
	$select_categories_sidebar = mysqli_query($connection,$query);
	?>
    <h4>Blog Categories</h4>
    <div class="row">
        <div class="col-lg-12">
            <ul class="list-unstyled">

				<?php

				while($row = mysqli_fetch_assoc($select_categories_sidebar )) {

					$cat_title = $row['cat_title'];
					$cat_id = $row['cat_id'];

					echo "<li><a href='category.php?category=$cat_id'>{$cat_title}</a></li>";

				}
				?>

</aside>
