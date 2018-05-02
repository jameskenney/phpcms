<?php
/**
 * Created by James Kenney.
 * User: James
 * Date: 4/30/2018
 * Time: 10:45 PM
 */
?>
<?php

    $query = "SELECT * FROM about_page";
    $select_about_page = mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($select_posts_by_id)) {
        $about_page_title            = $row['about_title'];
	    $about_page_content          = $row['about_content'];

         }

    if(isset($_POST['update_post'])) {

        $about_page_content        =  escape($_POST['about_content']);
        $about_page_title          =  escape($_POST['about_title']);


        $about_page_title = mysqli_real_escape_string($connection, $about_page_title);


          $query = "UPDATE about_page SET ";
          $query .="about_title  = '{$about_page_title}', ";
          $query .="about_content = '{$about_page_content}', ";


        $update_about_page = mysqli_query($connection,$query);

        confirmQuery($update_about_page);

        echo "<p class='bg-success'>About Page Updated. <a href='../about.php'>View About Page </a> or <a href='posts.php'>Edit About Page Again</a></p>";




    }



?>

    <form action="" method="post" enctype="multipart/form-data">


      <div class="form-group">
         <label for="title">About Page Title</label>
          <input value="<?php echo htmlspecialchars(stripslashes($about_page_title)); ?>"  type="text" class="form-control" name="about_title">
      </div>

        <div class="form-group">
            <label for="title">About Page Title</label>
            <input value="<?php echo htmlspecialchars(stripslashes($about_page_title)); ?>"  type="text" class="form-control" name="about_title">
        </div>





           <div class="form-group">
       <label for="categories">Categories</label>
       <select name="post_category" id="">

      <?php

        $query = "SELECT * FROM categories ";
        $select_categories = mysqli_query($connection,$query);

        confirmQuery($select_categories);


        while($row = mysqli_fetch_assoc($select_categories )) {
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];


        if($cat_id == $post_category_id) {


        echo "<option selected value='{$cat_id}'>{$cat_title}</option>";


        } else {

          echo "<option value='{$cat_id}'>{$cat_title}</option>";


        }


        }

?>


       </select>

      </div>

        <div class="form-group">
       <label for="users">Users</label>
       <select name="post_user" id="">


<?php echo "<option value='{$post_user}'>{$post_user}</option>"; ?>

<?php

        $users_query = "SELECT * FROM users_new";
        $select_users = mysqli_query($connection,$users_query);

        confirmQuery($select_users);


        while($row = mysqli_fetch_assoc($select_users)) {
        $user_id = $row['user_id'];
        $username = $row['username'];


            echo "<option value='{$username}'>{$username}</option>";


        }

?>


       </select>

      </div>



    <!--   <div class="form-group">
         <label for="title">Post Author</label>
          <input value="<?php// echo $post_user; ?>" type="text" class="form-control" name="post_user">
      </div> -->

       <div class="form-group">
      <select name="post_status" id="">

<option value='<?php echo $post_status ?>'><?php echo $post_status; ?></option>

          <?php

          if($post_status == 'published' ) {


    echo "<option value='draft'>Draft</option>";


          } else {


    echo "<option value='published'>Publish</option>";


          }



        ?>


      </select>
        </div>

    <div class="form-group">

       <img width="100" src="../images/<?php echo $post_image; ?>" alt="">
       <input  type="file" name="image">
      </div>

      <div class="form-group">
         <label for="post_tags">Post Tags</label>
          <input value="<?php echo $post_tags; ?>"  type="text" class="form-control" name="post_tags">
      </div>

      <div class="form-group">
         <label for="post_content">Post Content</label>
         <textarea  class="form-control "name="post_content" id="" cols="30" rows="10"><?php echo $post_content; ?>


         </textarea>
      </div>



       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="update_post" value="Update Post">
      </div>


</form>