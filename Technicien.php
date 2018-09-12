<?php

/**
 * Created by PhpStorm.
 * User: lo
 * Date: 11/09/18
 * Time: 20:52
 */
class Technicien extends Employe
{
    const FACTEUR_UNITE = 5;
    private $unites;

    public function __construct($nom, $prenom, $age, $date, $unites)
    {
        parent::__construct($nom, $prenom, $age, $date);
        $this->unites = $unites;
    }

    public function calculerSalaire()
    {
        return self::FACTEUR_UNITE * $this->unites;
    }

    public function getTitre()
    {
        return "Le technicien ";
    }
}