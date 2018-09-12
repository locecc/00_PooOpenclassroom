<?php

/**
 * Created by PhpStorm.
 * User: lo
 * Date: 11/09/18
 * Time: 20:56
 */
class Manutentionnaire extends Employe
{
    const SALAIRE_HORAIRE = 65;
    protected $heures;
    
    public  function __construct($nom, $prenom, $age, $date, $heures)
    {
        parent::__construct($nom, $prenom, $age, $date);
        $this->heures = $heures;
    }
    
    public function calculerSalaire()
    {
        return self::SALAIRE_HORAIRE * $this->heures;
    }
    
    public function getTitre()
    {
        return " Le manut";
    }

}