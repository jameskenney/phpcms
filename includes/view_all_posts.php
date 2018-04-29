<?php
/**
 * Created by James Kenney.
 * User: James
 * Date: 4/7/2018
 * Time: 10:07 PM
 */
?>
<?php require( '../admin/config.php' );?>
<?php require( '../includes/head.php' ); ?>

<body>
<div class="home-container"
    <div class="container-fluid">
        <?php require 'navigation.php'; ?>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <?php

                    if(isset($_GET['delete'])) {

                        $the_post_id = $_GET['delete'];

                        $query = "DELETE FROM posts WHERE post_id = $the_post_id";

                        $delete_query = mysqli_query($connection, $query);
                    }
                    ?>
                    <div class="main">
                        <h1>Posts Table</h1>
                        <div class="table-responsive" >
                            <table class="table table-striped table-hover" width="100">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Author</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th>Tags</th>
                                    <th>Comment Count</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>

                                    <?php
                                    $query = "SELECT * FROM posts";
                                    $select_posts = mysqli_query( $connection, $query );

                                    while($row = mysqli_fetch_assoc($select_posts)) {
                                        $post_id       = $row['post_id'];
                                        $post_author   = $row['post_author'];
                                        $post_title    = $row['post_title'];
                                        $post_category_id = $row['post_category_id'];
                                        $post_status   = $row['post_status'];
                                        $post_image    = $row['post_image'];
                                        $post_tags     = $row['post_tags'];
                                        $post_comment_count = $row['post_comment_count'];
                                        $post_date     = $row['post_date'];

                                        echo "<tr>";
                                        echo "<td>{$post_id}</td>";
                                        echo "<td>{$post_author}</td>";
                                        echo "<td>{$post_title}</td>";

                                        $query = "SELECT * FROM categories WHERE cat_id = {$post_category_id}"; //Relating category_id to the category table
                                        $select_categories_id = mysqli_query($connection,$query);

                                        while($row = mysqli_fetch_assoc($select_categories_id)) {
                                            $cat_id    = $row['cat_id'];
                                            $cat_title = $row['cat_title'];

                                            echo "<td>{$cat_title}</td>";
                                        }

                                        echo "<td>{$post_status}</td>";
                                        echo "<td><img width='100' src='../assets/images/$post_image' alt='image'></td>";
                                        echo "<td>{$post_tags}</td>";
                                        echo "<td>{$post_comment_count}</td>";
                                        echo "<td>{$post_date}</td>";
                                        echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";
                                        echo "<td><a href='posts.php?delete={$post_id}'>Delete</a></td>";
                                        echo "</tr>";
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <footer>
                    <?php require 'footer.php'; ?>
                </footer>
            </div>
        </div>
    </div>
</body>







