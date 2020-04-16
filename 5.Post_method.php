<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="post" action="5.Post_method.php">
        Password: <input type="password" name="password">
        <button type="submit">submit</button>
    </form>

    <?php
    echo $_POST["password"];
    ?>
</body>

</html>