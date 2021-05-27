<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Post Page</title>
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
                <h1>View All Post</h1>
                <table border="1">
                    <tr>
                        <th>Post No</th>
                        <th>Post Date</th>
                        <th>Post Author</th>
                        <th>Post Title</th>
                        <th>Post Image</th>
                        <th>Post Content</th>
                        <th>Delete Post</th>
                        <th>Edit Post</th>
                    </tr>
                </table>
            </div>
        </div>
    </section>

</body>
</html>