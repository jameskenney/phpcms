<?php
/**
 * Created by James Kenney.
 * User: James
 * Date: 4/8/2018
 * Time: 11:52 AM
 */
?>
<?php
require_once( __DIR__ . '/../vendor/autoload.php' );




$db = new \PDO('mysql:dbname=phpcmsDB;host=localhost;charset=utf8mb4', 'phpcmsDB', 'T)Pu.WuRE6zW8X');
$auth = new \Delight\Auth\Auth($db);
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$connection = mysqli_connect('localhost', 'root', 'root', 'phpcmsDB');

if ($connection){
	echo "Connected to phpcmsDB";
} else {
	echo "You're not connected to phpcmsDB.";
}

if(isset($_POST['create_post'])) {

	$post_title       = $_POST['title'];
	$post_author      = $_POST['author'];
	$post_category_id = $_POST['post_category_id'];
	$post_status      = $_POST['post_status'];

	$post_image      = $_FILES['image']['name'];
	$post_image_temp = $_FILES['image']['tmp_name'];

	$post_tags    = $_POST['post_tags'];
	$post_content = $_POST['post_content'];
	$post_date    = date( 'd-m-y' );
	$post_comment_count = 4;
	$post_excerpt = $_POST['post_excerpt'];

	move_uploaded_file( $post_image_temp, "../assets/images/$post_image" );

	$query = "INSERT INTO posts (post_category_id, post_title, post_author, post_date,post_image,post_content,post_tags,post_comment_count,post_status,post_excerpt) ";

	$query .= "VALUES({$post_category_id},'{$post_title}', '{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tags}', '{$post_comment_count}', '{$post_status}' , '{$post_excerpt}')";

	$create_post_query = mysqli_query($connection, $query);

	confirmQuery($create_post_query);

}

?>

<form action="" method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label for="title">Post Title</label>
		<input type="text" class="form-control" name="title">
	</div>

	<div class="form-group">
		<label for="post_category">Post Category Id</label>
		<input type="text" class="form-control" name="post_category_id">
	</div>

	<div class="form-group">
		<label for="title">Post Author</label>
		<input type="text" class="form-control" name="author">
	</div>

	<div class="form-group">
		<label for="post_status">Post Status</label>
		<input type="text" class="form-control" name="post_status">
	</div>

	<div class="form-group">
		<label for="post_image">Post Image</label>
		<input type="file" name="image">
	</div>

	<div class="form-group">
		<label for="post_tags">Post Tags</label>
		<input type="text" class="form-control" name="post_tags">
	</div>

	<div class="form-group">
		<label for="post_content">Post Content</label>
		<textarea class="form-control" name="post_content" id="" cols="30" rows="10" type="text" class="form-control" ></textarea>
	</div>

    <div class="form-group">
        <label for="post_excerpt">Post Excerpt</label>
        <textarea class="form-control" name="post_excerpt" id="" cols="30" rows="10" type="text" class="form-control" ></textarea>
    </div>

	<div class="form-group">
		<input class="btn btn-entice" type="submit" name="create_post" value="Publish Post">
	</div>

</form>
