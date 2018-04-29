<?php
/**
 * Created by James Kenney.
 * User: James
 * Date: 4/28/2018
 * Time: 10:39 PM
 */
?>
<?php require_once( __DIR__ . '/../bootstrap.php' ); ?>
<?php require( '../admin/config.php' ); ?>
<?php include( '../admin/head_admin.php' ); ?>


<?php

if(isset($_GET['delete'])) {

	$the_post_id = $_GET['delete'];

	$query = "DELETE FROM posts WHERE post_id = $the_post_id";

	$delete_query = mysqli_query($connection, $query);
}

?>

<div class="main">

</div>










