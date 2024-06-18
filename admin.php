<?php
    include "classes/FormManager.php";

    session_start();

	$adminUsername = "admin";
	$adminPassword = "123";

    if (FormManager::isPostrequest() && !isset($_SESSION["admin"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        if ($username == $adminUsername && $password == $adminPassword) {
            $_SESSION["admin"] = true;
        } else {
            echo "Invalid username or password!";
        }
    } 
    // jābūt login formai

    // jābūt iespējai ielogoties kā admins

    // jābūt iespējai pievienot bloga ierakstu blog.csv failā
    ?>

<!DOCTYPE html>
<html lang="en">
    <?php include "inc/head.php"; ?>
<body>
    <?php if (isset($_SESSION["admin"])): ?>
        <h2>Blog</h2>
        <form action="" method="post">
            <div>
                <label for="blog-title">Blog title:</label>
                <input type="text" id="blog-title" name="blog-title" required>
            </div>
            <div>
                <label for="blog-content">Blog content:</label>
                <input type="text" id="blog-content" name="blog-content" required>
            </div>
            <div>
                <button type="submit">Login</button>
            </div>
        </form>
    <?php else: ?>
        <h2>Admin Login</h2>
        <form action="" method="post">
            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <button type="submit">Login</button>
            </div>
        </form>
    <?php endif; ?>
    
</body>
</html>