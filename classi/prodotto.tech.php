<?php

require_once __DIR__ . "/prodotto.php";

class Tech extends Prodotto
{
    // ATTRIBUTI
    protected  $tipo;
    protected  $materiale;
    protected  $display;
    protected  $batteria;
    protected  $gps;
    // constructs
    public function __construct($_nome, $_descrizione, $_prezzo, $_tipo, $_materiale, $_display, $_batteria, $_gps)
    {
        parent::__construct($_nome, $_descrizione, $_prezzo);
        $this->tipo = $_tipo;
        $this->materiale = $_materiale;
        $this->display = $_display;
        $this->batteria = $_batteria;
        $this->gps = $_gps;
    }
    // METODI
    public function getFullName()
    {
        return $this->tipo . " " . $this->nome;
    }
    public function getSpecifics()
    {
        return $this->genere . " " . $this->sesso . " " . $this->numero . " " . $this->colore . " " . $this->prezzo;
    }
}

?>