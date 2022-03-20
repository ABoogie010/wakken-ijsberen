<?php
namespace Project5;

class Play {
    private string $name;
    // private Game $game;
    private GameList $gameList;
    private HintList $hintList;

    public function __Construct(string $name)
    {
        $this->name = $name;
    $this->gameList = new GameList();
    $_SESSION['correct'] = 0;
    // Hintlijst aanmaken
        $this->hintList = new HintList();
        $this->setHints();
    }

    public function reset() {
        if (isset($_SESSION['turn'])) {
            unset($_SESSION['turn']);
        }
        if (isset($_SESSION['play'])) {
            unset($_SESSION['play']);
        }
        if (isset($_SESSION['game'])) {
            unset($_SESSION['game']);
        }
        if (isset($_SESSION['status'])) {
            unset($_SESSION['status']);
        }
        if (isset($_SESSION['wrong'])) {
            unset($_SESSION['wrong']);
        }
    }

    // Hints aanmaken voor elke page reload

    public function setHints() {
        $hints = [
            'Wakken bevinden zich in het noorden van de Noordpool',
            'Op de Noordpool kan je de wakken in het midden vinden',
            'Ijsberen kan je vinden op de Noordpool',
            'Ijsberen bevinden zich alleen rondom de wakken',
            'Als er een wak is op de Noordpool, zijn er pinguins op de Zuidpool'
        ];
        foreach ($hints as $hint)
    }

    public function addGame(Game $game)
    {
            $this->gameList = $addGame($game);
    }
}
?>
