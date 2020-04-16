<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="8.Associative_array.php" method="post">
    student: <input type="text" name="student">
    <button type="submit">submit</button>
</form>
    <?php
    $grade = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
    echo $grade[$_POST["student"]];
    ?>
</body>
</html>