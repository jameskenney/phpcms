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
    <h4>Blog Categories</h4>
	<?php
	$query                  = "SELECT cat_title FROM categories";
	$select_all_categories_query = mysqli_query( $connection, $query );

	while($row = mysqli_fetch_assoc($select_all_categories_query)){
		$post_category = $row['cat_title'];
		?>
        <ul>
            <li><a href="#"><?php echo $post_category; ?></a></li>
        </ul>
	<?php } ?>
</aside>
