<?php
//Show all news-feed if logged in
if(isset($_SESSION['loggedin'])){
    echo' <li class="nav-item">
                <a class="nav-link active" href="trending.php">Trending</a>
            </li>';
}
?>