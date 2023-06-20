<?php

class Movie
{
    public $title;
    public $director;
    public $releaseDate;
    public $genre;
    public $vote = null;

    function __construct($title, $director, $releaseDate, $genre)
    {
        $this->title = $title;
        $this->director = $director;
        $this->releaseDate = $releaseDate;
        $this->genre = [$genre];
    }

    public function setVote($vote)
    {
        if (!is_nan($vote) and ($vote > 0 and $vote <= 5)) {
            return $this->vote = "Voto" . ": " . $vote;
        } else {
            return null;
        }
    }
}

$theNest = new Movie("The nest", "Roberto De Feo", "09/08/2019", "Thriller");
$theNest->setVote(5);
$fightClub = new Movie("Fight Club", "David Fincher", "02/07/2003", ["Drammatico", "thriller"]);
$fightClub->setVote(5);
$aceVentura = new Movie("Ace Ventura", "Steve Oedekerk", "22/04/1995", ["Commedia", "Avventura"]);
$aceVentura->setVote(2);


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
        <!-- MOVIE CARD -->
        <div class="movieCard m-4 border border-success d-flex flex-column justify-content-center align-items-center">
            <div class="mb-2"><strong>Titolo:</strong> <?php echo $theNest->title; ?></div>
            <div class="mb-2"><strong>Regista:</strong> <?php echo $theNest->director; ?></div>
            <div class="mb-2"><strong>Data di uscita:</strong> <?php echo $theNest->releaseDate; ?></div>
            <div class="mb-2"><strong>Generi:</strong>
                <?php foreach ($theNest->genre as $genre) { ?>
                    <?php echo $genre; ?>
                <?php } ?>
            </div>
            <div class="mb-2"><strong>Voto:</strong> <?php echo $theNest->vote; ?></div>
        </div>
        <!-- MOVIE CARD -->
        <div class="movieCard m-4 border border-success d-flex flex-column justify-content-center align-items-center">
            <div class="mb-2"><strong>Titolo:</strong> <?php echo $fightClub->title; ?></div>
            <div class="mb-2"><strong>Regista:</strong> <?php echo $fightClub->director; ?></div>
            <div class="mb-2"><strong>Data di uscita:</strong> <?php echo $fightClub->releaseDate; ?></div>
            <div class="mb-2"><strong>Generi:</strong>
                <?php foreach ($fightClub->genre as $genre) { ?>
                    <?php echo implode(", ", $genre); ?>
                <?php } ?>
            </div>
            <div class="mb-2"><strong>Voto:</strong> <?php echo $fightClub->vote; ?></div>
        </div>
        <!-- MOVIE CARD -->
        <div class="movieCard m-4 border border-success d-flex flex-column justify-content-center align-items-center">
            <div class="mb-2"><strong>Titolo:</strong> <?php echo $aceVentura->title; ?></div>
            <div class="mb-2"><strong>Regista:</strong> <?php echo $aceVentura->director; ?></div>
            <div class="mb-2"><strong>Data di uscita:</strong> <?php echo $aceVentura->releaseDate; ?></div>
            <div class="mb-2"><strong>Generi:</strong>
                <?php foreach ($aceVentura->genre as $genre) { ?>
                    <?php echo implode(", ", $genre); ?>
                <?php } ?>
            </div>
            <div class="mb-2"><strong>Voto:</strong> <?php echo $aceVentura->vote; ?></div>
        </div>
    </div>

</body>

</html>