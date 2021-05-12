<?php

require_once __DIR__ . "/classi/prodotto.tech.php";
require_once __DIR__ . "/classi/prodotto.shoes.php";
require_once __DIR__ . "/classi/calc.php";

// ISTANZE
$fitbit = new Tech("Fitbit-Inspire", "Questo fitness tracker intuitivo e facile da utilizzare offre rilevazione continua del battito cardiaco, Minuti in Zona Attiva, e molto altro. E con 1 anno di prova gratuita di Fitbit Premium per i nuovi utenti, ottieni consigli personalizzati, analisi approfondite e strumenti per il sonno che ti aiutano a vivere una vita più sana.", "129", "Tracker", "Acciaio", "37x16mm", "5 giorni", "Sì");
$hovr = new Shoes("Hovr", "AUDACI E REATTIVE: la morbidezza di una scarpa da distanza incontra la velocità reattiva di una scarpa da racing.", "149", "Under Armour", "Running", "Uomo", "42.5", "Orange-Black");

?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>OOP</title>
</head>

<body>
    <div class="container">
        <div class="prodotto">
            <h2><?php echo $fitbit->getFullName(); ?></h2>
            <p><?php echo $fitbit->getSpecifics(); ?></p>
            <h4>DESCRIZIONE:</h4>
            <p><?php echo $fitbit->recap(150); ?></p>
        </div>
        <div class="prodotto">
            <h2><?php echo $hovr->getFullName(); ?></h2>
            <p><?php echo $hovr->getSpecifics(); ?></p>
            <h4>DESCRIZIONE:</h4>
            <p><?php echo $hovr->recap(150); ?></p>
        </div>
        <div class="totale">
            <h2>Totale: <?php echo Math::sum($fitbit->prezzo, $hovr->prezzo); ?> €</h2>
        </div>
    </div>
</body>

</html>