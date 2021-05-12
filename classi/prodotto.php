<?php

class Prodotto
{
    // ATTRIBUTI
    protected  $nome;
    protected  $descrizione;
    public  $prezzo;
    // constructs
    public function __construct($_nome, $_descrizione, $_prezzo)
    {
        $this->nome = $_nome;
        $this->descrizione = $_descrizione;
        $this->prezzo = $_prezzo;
    }
    // METODI  
    public function recap($max = 40)
    {
        $abstract = substr($this->descrizione, 0, $max) . "...";
        return $abstract;
    } 
}

?>