<?php

require_once __DIR__ . "/prodotto.php";

class Shoes extends Prodotto
{
    // ATTRIBUTI
    protected  $marca;
    protected  $genere;
    protected  $sesso;
    protected  $numero;
    protected  $colore;
    // constructs
    public function __construct($_nome, $_descrizione, $_prezzo, $_marca, $_genere, $_sesso, $_numero, $_colore)
    {
        parent::__construct($_nome, $_descrizione, $_prezzo);
        $this->marca = $_marca;
        $this->genere = $_genere;
        $this->sesso = $_sesso;
        $this->numero = $_numero;
        $this->colore = $_colore;
    }
    // METODI
    public function getFullName()
    {
        return $this->nome . " " . $this->marca;
    }
    public function getSpecifics()
    {
        return $this->genere . " " . $this->sesso . " " . $this->numero . " " . $this->colore . " " . $this->prezzo;
    }

}

?>