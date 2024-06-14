<?php

include "classes/FormManager.php";

if (FormManager::isPostrequest()) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $formData = [$name, $email, $message];
    $formErrors = FormManager::validateFormData($formData);

    // Saglabāt datus csv failā (da)
    if (empty($formErrors)) {
        FormManager::saveDataToCsv($formData);
    }
    // Redirect to Contact page with GET request
    FormManager::redirectToPage("contact.php");
}

?>
<!DOCTYPE html>
<html lang="en">
    <?php include "inc/head.php";?>
<body>
    <?php include "inc/navigation.php";?>
    <p>Šeit būs kontakt forma ar mani.</p>
    <form action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <label for="message">Message:</label>
        <textarea id="message" name="message"></textarea>
        <input type="submit" value="Submit">
    </form>
</body>
</html>