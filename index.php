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
class Movie {
    public $name;
    public $author;
    public $valutationRateo;
    public $filmGenre;

function __construct($name, $author, $filmGenre) {
    $this->name = $name;
    $this->author = $author;
    $this->filmGenre = $filmGenre;
}
public function setFilmRaputation($valutation) {
    if ($valutation < 3) {
        $this->valutationRateo = 'Questo film non è piaciuto agli utenti';
    } else {
        $this->valutationRateo = 'Questo film è piaciuto agli utenti';
    }

}




}

$avatar_film = new Movie('Avatar', 'James Cameron', 'Action');
$up_film = new Movie('Up', 'Pete Docter', 'Cartoon');
var_dump($avatar_film);

$up_film->setFilmRaputation(2);
$valutation_up_film = $up_film->setFilmRaputation(2);
var_dump($up_film);

$up_film->setFilmRaputation(5);
$valutation_avatar_film = $avatar_film->setFilmRaputation(5);
var_dump($avatar_film);

$movieArray = array($avatar_film,$up_film);


var_dump($movieArray);








?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php oop</title>
</head>
<body>
   <h1><?php echo $movieArray?></h1>
</body>
</html>