<?php

/**
 * Created by PhpStorm.
 * User: lo
 * Date: 11/09/18
 * Time: 20:25
 */
abstract  class Commercial extends Employe
{
    private $chiffreAffaire;
    
    public function __construct($nom, $prenom, $age, $date, $chiffreAffaire)
    {
        parent::__construct($nom, $prenom, $age, $date);
        $this->chiffreAffaire = $chiffreAffaire;
    }
    
    public function getChiffreAffaire()
    {
        return $this->chiffreAffaire;
    }

}