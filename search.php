<?php require_once "connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
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
                        <input type="submit">
                    </form>
                </div>
        </header>

        <section class="content">
            <div class="container"> 
            <h1>Search Result : </h1>

            <?php

                if (isset($_GET['search'])) {
                    $search_value = $_REQUEST['value'];
                }
                if (empty($search_value)) {
                    echo "<h3 style='margin-top: 2rem; text-align: center; color: red;'>Oops!!</h3>";
                }else {
                    $search_query = "SELECT * FROM posts WHERE post_keywords LIKE '%$search_value%'";

                    $run_query = mysqli_query($conn, $search_query);

                    while ($search_row = mysqli_fetch_array($run_query)) {
                        $post_id = $search_row['post_id'];
                        $post_author = $serarch_row['post_author'];
                        $post_date = date('y-m-d');
                        $post_title = $search_row['post_title'];
                        $post_image = $search_row['post_image'];
                        $post_content = substr($search_row['post_content'],0,150);
                        
            ?>
                <figure>
                    <h1><a href="page.php?id=<?php echo $post_id; ?><?php echo $post_title; ?>"></a></h1>
                    <img width="640" height="360" src="img/<?php echo $post_image; ?>" alt="">
                    <figcaption>
                        <p>Posted By <strong><?php echo $post_author; ?></strong>| Published on <strong><?php echo $post_date; ?></strong></p>
                        <p><?php echo $post_connect; ?></p>
                        <a href="pages.php?id=<?php echo $post_id; ?>">Read more</a>
                      
                    </figcaption>
                </figure>

                <?php
                            }
                        }
                ?>
                
            </div> 
        </section>    
</body>
</html>