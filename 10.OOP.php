<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Book
    {
        var $tittle;
        var $author;
        var $pages;

        function __construct($aTittle, $aAuthor, $aPages)
        {
            $this->tittle = $aTittle;
            $this->author = $aAuthor;
            $this->pages = $aPages;
        }
    }

    $book1 = new Book("Harry Potter", "JK Rowling", 400);
    $book2 = new Book("Lord of the rings", "Tolkien", 700);
    ?>
</body>

</html>