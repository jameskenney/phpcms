<?php
/**
 * Created by James Kenney.
 * User: James
 * Date: 5/2/2018
 * Time: 5:18 PM
 */
?>


<?php include "includes/admin_header.php";?>
<?php
$query = "SELECT * FROM fp_styles";
$select_fp_styles = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_fp_styles)) {
	$admin_bar_color            = $row['admin_bar_color'];
	$body_background_color          = $row['body_background_color'];

}

if(isset($_POST['update_styles'])) {

	$admin_bar_color        =  escape($_POST['admin_bar_color']);
	$body_background_color        =  escape($_POST['body_background_color']);


	$admin_bar_color = mysqli_real_escape_string($connection, $admin_bar_color);


	$query = "UPDATE fp_styles SET ";
	$query .="admin_bar_color  = '{$admin_bar_color}', ";
	$query .="body_background_color = '{$body_background_color}' ";


	$update_fp_styles = mysqli_query($connection,$query);

	confirmQuery($update_fp_styles);

	echo "<p class='bg-success'>Styles Updated!. <a href='../about.php'>View Front Page </a> or <a href='index.php'>Edit Front Page Styles Again</a></p>";

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
                            Editing Front Page Styles
                        </h1>

                        <div class="form-group">
                            <label for="title">Admin Bar Color</label>
                            <input value="<?php echo htmlspecialchars(stripslashes($admin_bar_color)); ?>"  type="text" class="form-control" name="admin_bar_color">
                        </div>

                        <div class="form-group">
                            <label for="title">Body Background Color</label>
                            <input value="<?php echo htmlspecialchars(stripslashes($body_background_color)); ?>"  type="text" class="form-control" name="body_background_color">
                        </div>


                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="update_styles" value="Update Styles">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-wrapper -->

	<?php include "includes/admin_footer.php" ?>
