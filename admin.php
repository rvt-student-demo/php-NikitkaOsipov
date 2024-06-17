// jābūt login formai

// jābūt iespējai ielogoties kā admins

// jābūt iespējai pievienot bloga ierakstu blog.csv failā
<?php
	$adminUsername = "admin";
	$adminPassword = 123;


?>

<!DOCTYPE html>
<html lang="en">
    <?php include "inc/head.php"; ?>
<body>
    <?php include "inc/navigation.php";?>
	 <h2>Admin Login</h2>
    <form action="admin.php" method="post">
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
    
</body>
</html>