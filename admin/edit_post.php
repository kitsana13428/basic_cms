<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
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
                <h1>Edit post</h1>
                <form action="edit_post.php" method="post" enctype="multipart/form-data"></form>
                    <table width="100%" align="center" border="1">
                        <tr>
                            <td align="center" colspan="6"><h1>Edit Post</h1></td>
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
                            
                            <td align="center" colspan="6"><input type="submit" name="submit" value="Update Now"></td>
                        </tr>
                    </table>
            </div>
        </div>
    </section>

</body>
</html>