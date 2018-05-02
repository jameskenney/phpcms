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


            <li class="nav-item">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="view_all_posts.php">Posts <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="about.php">About <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../admin/">Admin <span class="sr-only">(current)</span></a>
            </li>

        </ul>
        <!-- Blog Search Well - Sends user to search.php after search -->
        <form class="form-inline mt-2 mt-md-0 float-right"  action="../search.php" method="post">
            <input  name="search" type="text" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-entice my-2 my-sm-0" name="submit" type="submit">Search</button>
        </form> <!-- /Search Form -->
    </div>
</nav>

