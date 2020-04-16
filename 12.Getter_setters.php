<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Movie
    {
        public $tittle;
        private $rating;

        function __construct($tittle, $rating)
        {
            $this->tittle = $tittle;
            $this->setRating($rating);
        }

        function getRating()
        {
            return $this->rating;
        }

        function setRating($rating)
        {
            $this->rating = $rating;
        }
    }

    $avengers = new Movie("Avengers", "PG-13");
    // Possible values: G, PG, PG-13, R, NR
    echo $avengers->getRating();
    ?>
</body>

</html>