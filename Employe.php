<?php

/**
 * Created by PhpStorm.
 * User: lo
 * Date: 11/09/18
 * Time: 20:20
 */
abstract  class Employe
{
    private $nom;
    private $prenom;
    private $age;
    private $date;

    /**
     * Employe constructor.
     * @param $nom
     * @param $prenom
     * @param $age
     * @param $date
     */
    public function __construct($nom, $prenom, $age, $date)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->date = $date;
    }

    abstract public function calculerSalaire();

    public function getTitre()
    {
        return "L'employé";
    }

    public function getNom()
    {
        return $this->getTitre()." ".$this->prenom." ".$this->nom;
    }


}