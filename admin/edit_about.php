<?php
/**
 * Created by James Kenney.
 * User: James
 * Date: 4/30/2018
 * Time: 10:45 PM
 */
?>

<?php include "includes/admin_header.php";?>
<?php
$query = "SELECT * FROM about_page";
$select_about_page = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_about_page)) {
	$about_page_title            = escape($row['about_title']);
	$about_page_content          = escape($row['about_content']);

}

if(isset($_POST['update_about'])) {

	$about_page_content        =  escape($_POST['about_content']);
	$about_page_title          =  escape($_POST['about_title']);


	$about_page_title = mysqli_real_escape_string($connection, $about_page_title);


	$query = "UPDATE about_page SET ";
	$query .="about_title  = '{$about_page_title}', ";
	$query .="about_content = '{$about_page_content}' ";


	$update_about_page = mysqli_query($connection,$query);

	confirmQuery($update_about_page);

	echo "<p class='bg-success'>About Page Updated. <a href='../about.php'>View About Page </a> or <a href='about.php'>Edit About Page Again</a></p>";

}

?>

<div id="wrapper">
	<?php include "includes/admin_navigation.php" ?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <form action="" method="post" enctype="multipart/form-data">
                        <h1>
                            Editing the about page
                        </h1>

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input value="<?php echo stripslashes($about_page_title); ?>"  type="text" class="form-control" name="about_title">
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <label for="post_content">Content</label>
                                <textarea  class="form-control "name="about_content" id="" cols="30" rows="10"><?php echo $about_page_content; ?></textarea>
                            </div>

                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="update_about" value="Update Post">
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-wrapper -->

	<?php include "includes/admin_footer.php" ?>
