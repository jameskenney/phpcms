<?php
/**
 * Created by James Kenney.
 * User: James
 * Date: 4/30/2018
 * Time: 9:55 PM
 */
?>
<?php require( 'includes/db.php' ); ?>
<?php include( 'includes/head.php' ); ?>

<?php

$query = "SELECT * FROM about_page";
$select_about_page = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_about_page)) {
	$about_page_title            = escape($row['about_title']);
	$about_page_content          = escape($row['about_content']);

}

?>

<body>
<div class="home-container">
    <div class="container-fluid">
		<?php require 'includes/navigation.php'; ?>
        <div class="row">
            <div class="col-md-12">
	            <h1>
		            <?php echo stripslashes($about_page_title); ?>
                </h1>
	            <p>
		            <?php echo stripslashes($about_page_content); ?>
	            </p>
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
