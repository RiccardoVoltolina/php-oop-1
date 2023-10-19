<?php
class Movie
{
    public $name;
    public $author;
    public $valutationRateo;
    public $filmGenre;
    public $valutation;
    public $movieImage;

    function __construct($name, $author, $filmGenre, $valutation, $movieImage)
    {
        $this->name = $name;
        $this->author = $author;
        $this->filmGenre = $filmGenre;
        $this->valutation = $valutation;
        $this->movieImage = $movieImage;
    }
    public function getFilmRaputation()
    {
        if ($this->valutation < 3) {
            $this->valutationRateo = 'Questo film non è piaciuto agli utenti';
        } else {
            $this->valutationRateo = 'Questo film è piaciuto agli utenti';
        }
    }
}

$avatar_film = new Movie('Avatar', 'James Cameron', 'Action', 2, 'https://picsum.photos/200/300');
$up_film = new Movie('Up', 'Pete Docter', 'Cartoon', 4, 'https://picsum.photos/200/300');

$up_film->getFilmRaputation();
$valutation_up_film = $up_film->getFilmRaputation();

$up_film->getFilmRaputation();
$valutation_avatar_film = $avatar_film->getFilmRaputation();

$movieArray = array($avatar_film, $up_film);









?>