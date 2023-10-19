<!-- 
    Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’ => all’interno della classe sono dichiarate delle variabili d’istanza => all’interno della classe è definito un costruttore => all’interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
Bonus 1: Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2: Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.
 -->


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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php oop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>

        .card {
            width: fit-content;
            height: 100%;
        }
        img {
            height: 300px;
            width: 200px;
        }
    </style>
</head>

<body>
    <!-- <h5><?= $movieArray[1]->name; ?></h5>  print without foreach-->
    <div class="d-flex m-3">
        <div class="row">
            <?php foreach ($movieArray as $movie) :  ?>
                <div class="col">

                    <div class="card">
                        <h1><?php echo $movie->name ?></h1>
                        <img src="<?= $movie->movieImage ?>">
                        <div>Autore: <?php echo $movie->author ?></div>
                        <div>Genere: <?php echo $movie->filmGenre ?></div>
                        <div>Valutazione media: <?php echo $movie->valutation ?></div>
                        <h5>E' piaciuto? <?php echo $movie->valutationRateo ?></h5>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</body>

</html>