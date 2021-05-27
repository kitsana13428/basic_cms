<?php
$conn = mysqli_connect("localhost", "root", "", "basiccms");

    if (!$conn) {
        die("Failed to connect to database" . mysqli_error());
    }
?>