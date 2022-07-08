<?php
include __DIR__ . '/Movie.php';

$harry_Potter_Filosofale = new Movie("Harry Potter e la pietra Filosofale", 152, 2001, "Fantastico, Avventura", "harry.jpg", "Inglese");
$mamma_ho_perso_aereo = new Movie("Mamma ho perso l'aereo", 103, 1990, "Commedia", "mamma.jpg", "Inglese");
$ritorno_futuro = new Movie("Ritorno al futuro", 116, 1985, "Commedia, Sci-fi", "ritorno.jpg", "Inglese");
$ps_love_you = new Movie("P.S. I love you", 126, 2007, "Commedia romantica", "ps.jpg", "Inglese");
$la_vita_bella = new Movie("La vita è bella", 122, 1997,"Guerra, Drammatico", "vita.jpg", "Italiana");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Movie</title>
</head>
<body>
    <main>
        <h1>I tuoi film:</h1>
        <section>
            <div>
                <h2><?= $ritorno_futuro->name ?></h2>
                <img class="locandina" src="img/<?= $ritorno_futuro->img ?>" alt="<?= $ritorno_futuro->name ?>">
                <span>Il film dura <?= $ritorno_futuro->lunghezza($ritorno_futuro-> lenght, '%02d ore e %02d minuti') ?>, è uscito nel anno <?= $ritorno_futuro->year ?> e il genere è: <?= $ritorno_futuro->genre ?>.</span>
                <span>La lingua originale è <?= $ritorno_futuro->lenguage ?></span>
                <img class="bandiera" src="<?= $ritorno_futuro->lingua($ritorno_futuro->lenguage) ?>" alt="bandiera">
            </div>
            <div>
                <h2><?= $harry_Potter_Filosofale->name ?></h2>
                <img class="locandina" src="img/<?= $harry_Potter_Filosofale->img ?>" alt="<?= $harry_Potter_Filosofale->name ?>">
                <span>Il film dura <?= $harry_Potter_Filosofale->lunghezza($harry_Potter_Filosofale-> lenght, '%02d ore e %02d minuti') ?>, è uscito nel anno <?= $harry_Potter_Filosofale->year ?> e il genere è: <?= $harry_Potter_Filosofale->genre ?>.</span>
                <span>La lingua originale è <?= $harry_Potter_Filosofale->lenguage ?></span>
                <img class="bandiera" src="<?= $harry_Potter_Filosofale->lingua($harry_Potter_Filosofale->lenguage) ?>" alt="bandiera">
            </div>
            <div>
                <h2><?= $la_vita_bella->name ?></h2>
                <img class="locandina" src="img/<?= $la_vita_bella->img ?>" alt="<?= $la_vita_bella->name ?>">
                <span>Il film dura <?= $la_vita_bella->lunghezza($la_vita_bella-> lenght, '%02d ore e %02d minuti') ?>, è uscito nel anno <?= $la_vita_bella->year ?> e il genere è: <?= $la_vita_bella->genre ?>.</span>
                <span>La lingua originale è <?= $la_vita_bella->lenguage ?></span>
                <img class="bandiera" src="<?= $la_vita_bella->lingua($la_vita_bella->lenguage) ?>" alt="bandiera">
            </div>
            <div>
                <h2><?= $mamma_ho_perso_aereo->name ?></h2>
                <img class="locandina" src="img/<?= $mamma_ho_perso_aereo->img ?>" alt="<?= $mamma_ho_perso_aereo->name ?>">
                <span>Il film dura <?= $mamma_ho_perso_aereo->lunghezza($mamma_ho_perso_aereo-> lenght, '%02d ore e %02d minuti')  ?>, è uscito nel anno <?= $mamma_ho_perso_aereo->year ?> e il genere è: <?= $mamma_ho_perso_aereo->genre ?>.</span>
                <span>La lingua originale è <?= $mamma_ho_perso_aereo->lenguage ?></span>
                <img class="bandiera" src="<?= $mamma_ho_perso_aereo->lingua($mamma_ho_perso_aereo->lenguage) ?>" alt="bandiera">
            </div>
            <div>
                <h2><?= $ps_love_you->name ?></h2>
                <img class="locandina" src="img/<?= $ps_love_you->img ?>" alt="<?= $ps_love_you->name ?>">
                <span>Il film dura <?= $ps_love_you->lunghezza($ps_love_you-> lenght, '%02d ore e %02d minuti') ?>, è uscito nel anno <?= $ps_love_you->year ?> e il genere è: <?= $ps_love_you->genre ?>.</span>
                <span>La lingua originale è <?= $ps_love_you->lenguage ?></span>
                <img class="bandiera" src="<?= $ps_love_you->lingua($ps_love_you->lenguage) ?>" alt="bandiera">
            </div>
        </section>
    </main>
</body>
</html>