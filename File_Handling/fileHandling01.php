<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $name = $_REQUEST["fname"];
            $email = $_REQUEST["email"];
            echo "My name is $name and my email: $email";
        }
    ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        <input type="text" name = "fname" placeholder = "Name: " required>
        <input type="text" name = "email" placeholder = "email: " required>
        <input type="submit">
    </form>
</body>
</html>