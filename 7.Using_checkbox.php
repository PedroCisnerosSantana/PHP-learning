<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="post" action="7.Using_checkbox.php">
        Apples: <input type="checkbox" name="fruits[]" value="apples">
        Oranges: <input type="checkbox" name="fruits[]" value="oranges">
        Bananas: <input type="checkbox" name="fruits[]" value="bananas">
        <button type="submit">submit</button>
    </form>

    <?php
    $fruits = $_POST["fruits"];
    echo $fruits[0];
    ?>
</body>

</html>