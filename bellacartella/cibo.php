<?php

include_once __DIR__ . '/prodotto.php';

class Cibo extends Prodotto{
    public $pesoNetto;
    public $ingredienti;

    public function __construct(
        String $immagine,
        String $nome,
        Float $prezzo,
        Generi $category,
        Float $pesoNetto,
        String $ingredienti

        )
        {
            $this->pesoNetto = $pesoNetto;
            $this->ingredienti = $ingredienti;
            parent::__construct($immagine, $nome, $prezzo, $category);
        }

}



?>