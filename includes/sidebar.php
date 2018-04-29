<?php
/**
 * Created by James Kenney.
 * User: James
 * Date: 3/25/2018
 * Time: 9:34 PM
 */
?>

<!-- Login -->
<div class="well">
    <h4>Login</h4>
    <form action="../includes/login.php" method="post">

        <div class="form-group">

            <input name="username" type="text" class="form-control" placeholder="Enter Username">

        </div>

        <div class="input-group">
            <input name="user_password" type="password" class="form-control" placeholder="Enter Password">
            <span class="input-group-btn">
                <button class="btn btn-entice" name="login" type="submit">Submit</button>
            </span>
        </div>

    </form><!--search form-->
    <!-- /.input-group -->
</div>





<h1>
    Recent Posts
</h1>
<?php
$query                  = "SELECT * FROM posts";
$select_all_posts_query = mysqli_query( $connection, $query );

while($row = mysqli_fetch_assoc($select_all_posts_query)){
    $post_author = $row['post_author'];
    $post_title = $row['post_title'];
    $post_date = $row['post_date'];
    $post_id = $row['post_id'];
    $post_content = substr($row['post_content'], 0,200);

    ?>
    <p>
        <?php echo $post_title; ?> by <?php echo $post_author; ?>
    </p>
    <p><?php echo $post_content; ?>...</p>
    <a class="btn btn-entice" href="post.php?p_id=<?php echo $post_id ?>">Read More<span class="glyphicon glyphicon-chevron-right"></span></a>

<?php } ?>