<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Raad het getal</title>
</head>

<body>
<h1>Project 5 Wakken, IJsberen en de Pinguins</h1>

<?php
class Dice
{
    public $worp;
    public $wakken;
    public $ijsberen;
    public $pinguins;

    function set_name($worp) {
        $this->name = $worp;
}

function get_name() {
        return $this->name;
    }
}
if (isset($_POST['btnAantal'])) {
    // echo "<pre>" . print_r($_POST, true) . "</pre>";
    for($i = 1; $i <= $_POST['options']; $i++) {
        echo "<img width='60px' src='../images/rolldice$i.png' >&nbsp;";
    }
}
/*
if (isset($_POST['btnDice'])) {
    $raadgetal = $_POST['raden'];
    $dobbelsteen = rand(1, 6);
    if ($dobbelsteen == 1) {
        echo "<img width='60px' src='images/rolldice1.png'>";
    }
    if($dobbelsteen == 2) {
        echo "<img width='60px' src='images/rolldice2.png'>";
    }
    if($dobbelsteen == 3) {
        echo "<img width='60px' src='images/rolldice3.png'>";
    }
    if($dobbelsteen == 4) {
        echo "<img width='60px' src='images/rolldice4.png'>";
    }
    if($dobbelsteen == 5) {
        echo "<img width='60px' src='images/rolldice5.png'>";
    }
    if($dobbelsteen == 6) {
        echo "<img width='60px' src='images/rolldice6.png'>";
    }
    echo "<p>$raadgetal en $dobbelsteen</p>";
    if ($raadgetal == $dobbelsteen) {
        echo "<h2>Je hebt het goed geraden</h2>";
    } else {
        echo "<h4>Hint: IJsberen bevinden zich alleen rondom de wakken</h4>";
        echo "<h3>Helaas fout, probeer het opnieuw</h3>";
    }
} */
?>
<body>
<form action="" method="post">
    <label for="option">Aantal dobbelstenen:</label><br><br>
    <select id="options" name="options">
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
    </select><br><br>
    <input type="submit" name="btnDice" class="btn dice" value="Gooi dobbelstenen">
    <input type="submit" name="btnAantal" class="btn Aantal" value="Kies aantal dobbelstenen">
</form>
<form action="">
    <label for="wakken">Raad wakken:</label><br>
    <input type="text" id="wakken" name="wakken" placeholder="Vul hier het aantal wakken in..."><br><br>
    <?php

    ?>
    <label for="ijsberen">Raad ijsberen:</label><br>
    <input type="text" id="ijsberen" name="ijsberen" placeholder="Vul hier het aantal ijsberen in..."><br><br>
    <?php

    ?>
    <input type="submit" value="Raad" class="btn submit">
    <input type="button" value="Geef oplossing" class="btn reset">
</form>
</body>
</html>

<?php
function Dice() {
if (isset($_POST['btnDice'])) {
    $this->ThrownDice = rand(1, 6);
    if ($this->ThrownDice == 1) {
        echo "<img width='60px' src='images/rolldice1.png'>";
    }
    if($this->ThrownDice == 2) {
        echo "<img width='60px' src='images/rolldice2.png'>";
    }
    if($this->ThrownDice == 3) {
        echo "<img width='60px' src='images/rolldice3.png'>";
    }
    if($this->ThrownDice == 4) {
        echo "<img width='60px' src='images/rolldice4.png'>";
    }
    if($this->ThrownDice == 5) {
        echo "<img width='60px' src='images/rolldice5.png'>";
    }
    if($this->ThrownDice == 6) {
        echo "<img width='60px' src='images/rolldice6.png'>";
    }
    echo "<p>$guessNumber en $ThrownDice</p>";
    if ($guessNumber == $ThrownDice) {
        echo "<h2>Je hebt het goed geraden</h2>";
    } else {
        echo "<h4>Hint: IJsberen bevinden zich alleen rondom de wakken</h4>";
        echo "<h3>Helaas fout, probeer het opnieuw</h3>";
    }
    }
    function ThrownDice() {
    return $this->ThrownDice;
}
?>
