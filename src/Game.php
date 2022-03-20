<?php
namespace Project5;

class Game {
    private int $wrong = 0;
    private int $correct = 0;
    private int $resultIceHoles = 0;
    private int $resultPolarBears = 0;
    private int $resultPenguins = 0;
    private TurnList $turnList;
    private DiceList $diceList;

    // Aantal dobbelstenen = hoeveelheid
    // Per dobbelsteen nieuwe Cube aanmaken. Deze gooien met random waarde
    // Daarna dobbelsteen in de cubeList zetten
    // Dan mogen de cubes tekenen op het scherm
    // Status START (kan veranderen in: wrong = niet geraden, correct = geraden, answer = antwoord geven)
    public function __Construct($amount, $kind) {
        $_SESSION['status'] = 'start';
        // Dobbelsteen aanmaken
        $this->diceList = new DiceList();
        for ($i = $amount; $i > 0; $i--) {
            if ($kind == 6) {
                $$i = new Cube();
            } elseif ($kind == 12) {
                $$i = new Pentagon();
            }
        }
    }

}