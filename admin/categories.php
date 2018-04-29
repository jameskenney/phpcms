<?php
/**
 * Created by James Kenney.
 * User: James
 * Date: 4/7/2018
 * Time: 10:57 PM
 */
?>
<?php require( '../admin/config.php' );?>
<?php require( '../includes/head.php' ); ?>

<body>
<div class="home-container"
<div class="container-fluid">
	<?php require '../includes/navigation.php'; ?>
    <div class="row">
        <div class="col-md-12">
            <div class="row">

	            <?php deleteCategories(); ?>
                <div class="container">
                    <h1>Blog Categories</h1>
                    <div class="col-md-6">
			            <?php insert_categories();  ?>
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="cat-title">Add Category</label>
                                <input type="text" class="form-control" name="cat_title">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-entice" type="submit" name="submit" value="Add Category">
                            </div>
                        </form>
			            <?php // UPDATE AND INCLUDE QUERY

			            if(isset($_GET['edit'])) {

				            $cat_id = $_GET['edit'];

				            include "update_categories.php";
			            }
			            ?>
                    </div> <!-- /col-md-6 -->
                    <div class="col-md-6">
                        <table class="table table-striped table-hover" width="100">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category Title</th>
                            </tr>
                            </thead>
                            <tbody>
				            <?php
				            $query = "SELECT * FROM categories";
				            $select_categories = mysqli_query($connection,$query);

				            while($row = mysqli_fetch_assoc($select_categories)) {
					            $cat_id = $row['cat_id'];
					            $cat_title = $row['cat_title'];

					            echo "<tr>";

					            echo "<td>{$cat_id}</td>";
					            echo "<td>{$cat_title}</td>";
					            echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
					            echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
					            echo "</tr>";

				            }
				            ?>
                            </tbody>
                        </table>
                    </div> <!-- /col-md-6 -->
                </div>





            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <footer>
				<?php require '../includes/footer.php'; ?>
            </footer>
        </div>
    </div>
</div>
</body>






