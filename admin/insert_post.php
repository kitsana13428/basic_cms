<?php

session_start();

require_once "connect.php";

if(!isset($_SESSION['username'])) {
    header('location: login.php');
}

if (isset($_POST['submit'])) {
    $post_title = $_POST['title'];
    $post_date = date('y-m-d');
    $post_author = $_POST['author'];
    $post_keywords = $_POST['content'];
    $post_content = $_POST['content'];
    $post_image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($image_tmp, "../img/$post_image");

    $insert_query = "INSERT INTO posts (post_title, post_date, post_author, post_image, post_keywords, post_content)
                        VALUES ('$post_title', '$post_date', '$post_author', '$post_image', '$post_keywords', '$post_content')";
    
    if (mysqli_query($conn, $insert_query)) {
        echo "<script>alert('Post published successfully');</script>";
    }else {
        echo "<script>alert('Something wrong!');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Insert Page</title>
<link rel="stylesheet" href="adminstyle.css">
</head>
<body>

<header>
    <div class="container">
        <h1>Welcome to Admin Page Mr.</h1>
    </div>
</header>

<section class="content">
    <div class="content__grid">
        <div class="sidebar">
            <h1>Welcome : </h1>
            <h3><a href="index.php">Home</a></h3>
            <h3><a href="view_posts.php">View Posts</a></h3> 
            <h3><a href="insert_post.php">Insert Post</a></h3> 
            <h3><a href="logout.php">Log out</a></h3>             
        </div>
        <div class="showinfo">
            <h1>Welcome to Admin Panel</h1>
            <form action="insert_post.php" method="post" enctype="multipart/form-data"></form>
                <table width="100%" align="center" border="1">
                    <tr>
                        <td align="center" colspan="6"><h1>Insert New Post</h1></td>
                    </tr>
                    <tr>
                        <td>Post Title</td>
                        <td><input type="text" name="title" size="50"></td>
                    </tr>
                    <tr>
                        <td>Post Author</td>
                        <td><input type="text" name="author" size="50"></td>
                    </tr>
                    <tr>
                        <td>Post Keywords</td>
                        <td><input type="text" name="keywords" size="50"></td>
                    </tr>
                    <tr>
                        <td>Post image</td>
                        <td><input type="file" name="image" size="50"></td>
                    </tr>
                    <tr>
                        <td>Post Content</td>
                        <td><textarea name="content"  cols="50" rows="15"></textarea></td>
                    </tr>
                    <tr>
                        
                        <td align="center" colspan="6"><input type="submit" name="submit" value="Publish Now"></td>
                    </tr>
                </table>
        </div>
    </div>
</section>

</body>
</html>