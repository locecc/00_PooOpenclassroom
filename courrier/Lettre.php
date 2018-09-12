<?php

class Lettre extends Courrier
{
    protected $format = "";
    
    public function __construct($poids, $express, $adresse, $format)
    {
        parent::__construct($poids, $express, $adresse);
        $this->format = $format;
    }
    
    public function affranchirNormal()
    {
       $montant = 0;
        if ($this->format == "A4"){
            $montant = 2.0;
        } else {
            $montant = 3.5;
        }

        $montant += $this->poids/1000;

        return $montant;
    }

    public function __toString()
    {
        $s = " Lettre <br>";
        $s.= parent::__toString();
        $s.= "Format :".$this->format;

        return $s;
    }
}