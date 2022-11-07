<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>POO Football</title>
</head>
<body>

<main>
    <?php

    spl_autoload_register(function ($class_name) {
        require 'class/'. $class_name . '.php';
    });

    $france = new Pays("France");
    $espagne = new Pays("Espagne");
    $angleterre = new Pays("Angleterre");
    $italie = new Pays("Italie");
    $argentine = new Pays("Argentine");
    $bresil = new Pays("Brésil");
    $portugal = new Pays("Portugal");

    $psg = new Equipe("PSG", $france, "1970-01-01");
    $real = new Equipe("Real Madrid", $espagne, "1902-03-06");
    $barca = new Equipe("FC Barcelone", $espagne, "1899-01-01");
    $juve = new Equipe("Juventus", $italie, "1897-11-01");
    $mu = new Equipe("Manchester United", $angleterre, "1878-01-01");
    $rcsa = new Equipe("Racing Club Stras", $france, "1906-01-01");

    $mbappe = new Joueur("Killian", "Mbappe", "1998-05-04", $france);
    $ronaldo = new Joueur("Cristiano", "Ronaldo", "1985-08-23", $portugal);
    $messi = new Joueur("Lionel", "Messi", "1987-11-10", $argentine);
    $neymar = new Joueur("Neymar", "Junior", "1990-05-01", $bresil);

    $carriere1 = new Carriere($mbappe, $psg, 2017);
    $carriere2 = new Carriere($ronaldo, $real, 2009);
    $carriere3 = new Carriere($ronaldo, $juve, 2018);
    $carriere4 = new Carriere($ronaldo, $mu, 2021);
    $carriere5 = new Carriere($messi, $barca, 2004);
    $carriere6 = new Carriere($messi, $psg, 2021);
    $carriere7 = new Carriere($neymar, $barca, 2013);
    $carriere8 = new Carriere($neymar, $psg, 2017);

    ?>

    <!-- Lister les équipes d'un pays -->
    <div class="cards">
        <div class="card pays">
            <?= $france->showEquipes(); ?>
        </div>
        <div class="card pays">
            <?= $espagne->showEquipes(); ?>
        </div>
        <div class="card pays">
            <?= $angleterre->showEquipes(); ?>
        </div>
        <div class="card pays">
            <?= $italie->showEquipes(); ?>
        </div>
    </div>
    
    <!-- Lister les joueurs d'une équipe -->
    <div class="cards">
        <div class="card equipe">
            <?= $psg->showJoueurs(); ?>
        </div>
        <div class="card equipe">
            <?= $rcsa->showJoueurs(); ?>
        </div>
        <div class="card equipe">
            <?= $barca->showJoueurs(); ?>
        </div>
        <div class="card equipe">
            <?= $juve->showJoueurs(); ?>
        </div>
        <div class="card equipe">
            <?= $mu->showJoueurs(); ?>
        </div>
        <div class="card equipe">
            <?= $real->showJoueurs(); ?>
        </div>
    </div>

    <!-- Lister la carrière d'un joueur (équipe + année) -->
    <div class="cards">
        <div class="card joueur">
            <?= $mbappe->showCarriere(); ?>
        </div>
        <div class="card joueur">
            <?= $ronaldo->showCarriere(); ?>
        </div>
        <div class="card joueur">
            <?= $messi->showCarriere(); ?>
        </div>
        <div class="card joueur">
            <?= $neymar->showCarriere(); ?>
        </div>
    </div>
</main>

</body>
</html>