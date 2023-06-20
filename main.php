<?php

class Movie
{
    public $title;
    public $director;
    public $releaseDate;
    public $genre;

    function __construct($title, $director, $releaseDate, $genre)
    {
        $this->title = $title;
        $this->director = $director;
        $this->releaseDate = $releaseDate;
        $this->genre = $genre;
    }

}

$theNest = new Movie("The nest", "Roberto De Feo", "09/08/2019", "Thriller");
$fightClub = new Movie("Fight Club", "David Fincher", "02/07/2003", "Drammatico");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="movieContainer d-flex">
        <div class="movieCard m-5 border border-success d-flex flex-column justify-content-center align-items-center">
            <?php foreach ($fightClub as $item) { ?>

                <div class="mb-2"><?php echo ($item) ?></div>

            <?php } ?>
        </div>
        <div class="movieCard m-5 border border-success d-flex flex-column justify-content-center align-items-center">
            <?php foreach ($theNest as $item) { ?>

                <div class="mb-2"><?php echo ($item) ?></div>

            <?php } ?>
        </div>
    </div>
</body>

</html>