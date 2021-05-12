<?php

class Prodotto
{
    // ATTRIBUTI
    protected  $nome;
    protected  $descrizione;
    protected  $prezzo;
    // constructs
    public function __construct($_nome, $_descrizione, $_prezzo)
    {
        $this->nome = $_nome;
        $this->descrizione = $_descrizione;
        $this->prezzo = $_prezzo;
    }
    // METODI  
    public function abstract($max = 40)
    {
        $abstract = substr($this->descrizione, 0, $max) . "...";
        return $abstract;
    } 
}

?>