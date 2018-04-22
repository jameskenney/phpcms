<?php
/**
 * Created by James Kenney.
 * User: James
 * Date: 4/7/2018
 * Time: 10:57 PM
 */
include "head_admin.php"
//require_once( __DIR__ . '/../bootstrap.php' );?>

</div>
</div>
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
        <table class="table table-striped table-dark table-hover" width="100">
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

<!-- This code will keep the drop down nav menu working after you click on post.php -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
