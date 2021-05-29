<?php 

require_once "connect.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

        <header>
            <div class="container">
                <div class="logo">
                    <h1><a href="index.php">KitsanaCMS</a></h1>
                </div>
           

                    <form action="search.php" method="get" enctype="multipart/form-data">
                        <input type="text" name="value" placeholder="search topic" size="25">
                        <input type="submit" name="search" value="search">
                    </form>
                </div>
        </header>

        <section class="content">
            <div class="container"> 

            <?php

                $select_posts = "SELECT * FROM posts";

                $run_posts = mysqli_query($conn, $select_posts);

                while ($row = mysqli_fetch_array($run_posts)) {
                    $post_id = $row['post_id'];
                    $post_date = $row['post_date'];
                    $post_author = $row['post_author'];
                    $post_title = $row['post_title'];
                    $post_image = $row['post_image'];
                    $post_content = substr($row['post_content'],0,300);
                

            ?>
                <figure>
                    <h1><a href="pages.php?id=<?php echo $post_id; ?>"><?php echo $post_title; ?></a></h1>
                    <img width="640" height="360" src="img/<?php echo $post_image; ?>" alt="">
                    <figcaption>
                        <p>Posted By <strong><?php echo $post_author; ?></strong>| Published on <strong><?php echo $post_date; ?></strong></p>
                        <p><?php echo $post_content; ?></p>
                        <a href="pages.php?id=<?php echo $post_id; ?>">Read more</a>
                    </figcaption>
                </figure>

                <?php  } ?>
                
            </div> 
        </section>    
</body>
</html>

