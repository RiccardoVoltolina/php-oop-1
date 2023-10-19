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
include __DIR__ . '/movie.php';
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
            <!-- use foreach to take all single movie value from array -->
            <?php foreach ($movieArray as $movie) :  ?>
                <div class="col">

                    <div class="card text-center p-3 bg-black text-white">
                        <h1><?php echo $movie->name ?></h1>
                        <div class="pb-2">
                            <img src="<?= $movie->movieImage ?>">
                        </div>
                        <div>Autore: <?php echo $movie->author ?></div>
                        <div>Genere: <?php echo $movie->filmGenre ?></div>
                        <div class="pb-2">Valutazione media: <?php echo $movie->valutation ?></div>
                        <h5>E' piaciuto?</h5>
                        <div><?php echo $movie->valutationRateo ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</body>

</html>