<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $langs = array("c", "c++", "c#", "java", "python", "php");
    echo count($langs);
    $langs[6] = "ruby";
    echo count($langs);
    ?>
</body>

</html>