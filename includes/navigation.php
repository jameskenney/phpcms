<?php
/**
 * Created by James Kenney.
 * User: James
 * Date: 4/22/2018
 * Time: 8:16 PM
 */
?>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="../index.php">SiteEntice</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Users
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../admin/users.php?source=add_user">Add User</a>
                    <a class="dropdown-item" href="../admin/users.php">View All Users</a>

                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Posts
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="../admin/posts.php">Posts</a>
                    <a class="dropdown-item" href="../admin/posts.php?source=add_post">Add post</a>
                    <a class="dropdown-item" href="../admin/categories.php">View/Edit Categories</a>
                </div>
            </li>
        </ul>
        <!-- Blog Search Well - Sends user to search.php after search -->
        <form class="form-inline mt-2 mt-md-0 float-right"  action="../search.php" method="post">
            <input  name="search" type="text" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-entice my-2 my-sm-0" name="submit" type="submit">Search</button>
        </form> <!-- /Search Form -->
    </div>
</nav>

