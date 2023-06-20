<?php 

class Movie {
    public $title;
    public $director;
    public $releaseDate;
    public $genre;

    function __construct($title, $director, $releaseDate, $genre )
    {
        $this->title = $title;
        $this->director = $director;
        $this->releaseDate = $releaseDate;
        $this->genre = $genre;
    }
}

$theNest = new Movie("The nest", "Roberto De Feo", "09/08/2019", "Thriller");

var_dump($theNest);

?>