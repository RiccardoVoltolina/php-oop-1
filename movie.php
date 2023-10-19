<?php

//create class with all attributs
class Movie
{
    public $name;
    public $author;
    public $valutationRateo;
    public $filmGenre;
    public $valutation;
    public $movieImage;

    //create a construct for the future parameters
    function __construct($name, $author, $filmGenre, $valutation, $movieImage)
    {
        $this->name = $name;
        $this->author = $author;
        $this->filmGenre = $filmGenre;
        $this->valutation = $valutation;
        $this->movieImage = $movieImage;
    }

    //create a function that say if the movie is god or not
    public function getFilmRaputation()
    {
        if ($this->valutation < 3) {
            $this->valutationRateo = 'Questo film non è piaciuto agli utenti';
        } else {
            $this->valutationRateo = 'Questo film è piaciuto agli utenti';
        }
    }
 
}

//create a new variable for all films and give to them the construct value
$spiderman_film = new Movie('Spiderman', 'Stan Lee', 'Action', 5, 'https://picsum.photos/200/300');
$avatar_film = new Movie('Avatar', 'James Cameron', 'Action', 2, 'https://picsum.photos/200/300');
$up_film = new Movie('Up', 'Pete Docter', 'Cartoon', 4, 'https://picsum.photos/200/300');

//create a new variable that take the value of the function
$spiderman_film->getFilmRaputation();

$avatar_film->getFilmRaputation();

$up_film->getFilmRaputation();

//put all films inside a new array
$movieArray = array($avatar_film, $up_film, $spiderman_film);










?>