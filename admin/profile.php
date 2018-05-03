<?php include "includes/admin_header.php" ?>
<?php

   if(isset($_SESSION['username'])) {
    
    $username = $_SESSION['username'];
    
    $query = "SELECT * FROM users_new WHERE username = '{$username}' ";
    
    $select_user_profile_query = mysqli_query($connection, $query);
    
    while($row = mysqli_fetch_array($select_user_profile_query)) {
    
        $user_id = escape($row['user_id']);
        $username = escape($row['username']);
        $user_password= escape($row['user_password']);
        $user_firstname = escape($row['user_firstname']);
        $user_lastname = escape($row['user_lastname']);
        $user_email = escape($row['user_email']);
        $user_image = escape($row['user_image']);
        $user_role= escape($row['user_role']);

    }

}
  
    ?>
    
    
<?php 

if(isset($_POST['edit_user'])) {

            $user_firstname = escape($_POST['user_firstname']);
            $user_lastname = escape($_POST['user_lastname']);
            $user_role = escape($_POST['user_role']);

            $username = escape($_POST['username']);
            $user_email = escape($_POST['user_email']);
            $user_password = escape($_POST['user_password']);
//          $post_date = date('d-m-y');

    
        $query = "SELECT randSalt FROM users_new";
        $select_randsalt_query = mysqli_query($connection, $query);
        if(!$select_randsalt_query) {
        die("Query Failed" . mysqli_error($connection));

        }
       
        $row = mysqli_fetch_array($select_randsalt_query); 
        $salt = escape($row['randSalt']);
        $hashed_password = crypt($user_password, $salt);

          $query = "UPDATE users_new SET ";
          $query .="user_firstname  = '{$user_firstname}', ";
          $query .="user_lastname = '{$user_lastname}', ";
          $query .="user_role   =  '{$user_role}', ";
          $query .="username = '{$username}', ";
          $query .="user_email = '{$user_email}', ";
          $query .="user_password   = '{$hashed_password}' ";
          $query .= "WHERE username = '{$username}' ";
          $edit_user_query = mysqli_query($connection,$query);
          confirmQuery($edit_user_query);

   }

?> 

<div id="wrapper">

        <?php include "includes/admin_navigation.php" ?>

    <div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">

      <h1 class="page-header">

	      <?php echo stripslashes($user_firstname); ?>'s profile
                </h1>

                 <form action="" method="post" enctype="multipart/form-data">

          <div class="form-group">
             <label for="title">Firstname</label>
              <input type="text" value="<?php echo stripslashes($user_firstname); ?>" class="form-control" name="user_firstname">
          </div>

           <div class="form-group">
             <label for="post_status">Lastname</label>
              <input type="text" value="<?php echo stripslashes($user_lastname); ?>" class="form-control" name="user_lastname">
          </div>


             <div class="form-group">

           <select name="user_role" id="">

        <option value="subscriber"><?php echo stripslashes($user_role); ?></option>
           <?php

        if($user_role == 'admin') {

         echo "<option value='subscriber'>subscriber</option>";

        } else {

        echo "<option value='admin'>admin</option>";

        }

               ?>
           </select>
             </div>

    <!--
          <div class="form-group">
             <label for="post_image">Post Image</label>
              <input type="file"  name="image">
          </div>
    -->
                      <div class="form-group">
                         <label for="post_tags">Username</label>
                          <input type="text" value="<?php echo stripslashes($username); ?>" class="form-control" name="username">
                      </div>

                      <div class="form-group">
                         <label for="post_content">Email</label>
                          <input type="email" value="<?php echo stripslashes($user_email); ?>" class="form-control" name="user_email">
                      </div>

                      <div class="form-group">
                         <label for="post_content">Password</label>
                          <input type="password" value="<?php echo stripslashes($user_password); ?>" class="form-control" name="user_password">
                      </div>

                       <div class="form-group">
                          <input class="btn btn-primary" type="submit" name="edit_user" value="Update Profile">
                      </div>
                 </form>
            </div>
        </div>
    </div>
</div>
        <!-- /#page-wrapper -->
        
    <?php include "includes/admin_footer.php" ?>