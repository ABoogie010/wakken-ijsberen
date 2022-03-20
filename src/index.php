<?php
require_once "includes/vendor/autoload.php";
use Project5\Play;
use Project5\Game;
session_start();

if (isset($_POST['register'])) {
    $play = new Play($_POST['name']);
    $_SESSION['play'] = $play;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ijsberen</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    <title>Raad het getal</title>
</head>
<style>
    main > .container {
        padding: 60px 15px 0;
    }

    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>
<body>

<?php
// Stap 1: Begin spel (PLAY)
// Stap 2: Formulier zien om naam in te vullen
// Stap 3: Formulier zien voor keuze hoeveelheid dobbelstenen (voorwaarde = naam ingevuld)
// Stap 4a: Dobbelstenen op scherm
// Stap 4b: Formulier om te raden
// Stap 4c: Formulier om het antwoord te zien
// Stap 5a:
// Stap 5b: Formulier opvangen --> Raden gelijk aan antwoord
// Stap 5c: Antwoord laten zien --> Daarna Stap 3
// Stap 6a:
// Stap 6b: Correct --> laten zien dat ik het goed heb geraden. Daarna naar Stap 3.
// Stap 6b: Fout --> Hint laten zien + Stap 4b
/*
if (isset($_POST['check'])) {
    if ($_POST['check'] == true) {

    }
}

if (isset($_POST['showAnswer'])) {
        // Stap 5c: Antwoord laten zien --> Daarna Stap 3
}
*/
?>

    <form action="" method="POST">
        <div class="mb-3">
            <label for="amountDice" name="name" class="form-label">Hoeveel dobbelstenen:</label>
            <input type="number" min="3" max="8" class="form-control" id="amountDice" name="amountDice" aria-describedby="amountDiceHelp">
        </div>
        <button type="submit" class="btn btn-primary" name="throw ">Gooi dobbelstenen</button>
    </form>
    <?php
}

elseif (isset($_POST['begin'])) {
    // Stap 2: Formulier zien om naam in te vullen
?>

    <?php
    if (isset($_SESSION['play'])) {
        $play = $_SESSION['play'];
    }

    if (isset($_POST['newGame'])) {
        $play = new Play();
        $play->reset();
        $_SESSION['play'] = $play;
    }
?>
<form action="" method="POST">
    <div class="mb-3">
        <label for name="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">
    </div>
    <button type="submit" class="btn btn-primary" name="newPlay">Registreer</button>
</form>
<?php
if (isset($_POST['guess']) && is_numeric($_POST['iceholes']) && is_numeric($_POST['polarbears']) && is_numeric($_POST['penguins'])) {
        $play->addGuess($_POST['iceholes'], $_POST['polarbears'], $_POST['penguins']);

        $score = $play->checkScore();
        if ($score == 'Helaas fout') {
            echo "<div class='alert alert danger' role='alert'>".$score."</div>";
        }
        else {

        }
        }
} else {
    // START-button weergeven
?>
    <form action="" method="POST">
    <button type="submit" class="btn btn-primary" name="begin">Start Spel</button>
    </form>

</body>
<?php
}?>