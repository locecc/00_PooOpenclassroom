<?php

class Secretaire extends Personnel
{
    public function __construct($nom, $annee, $labo, $salaire)
    {
        parent::__construct($nom, $annee, $labo, $salaire);
    }

    public function afficher()
    {
        echo " Secretaire ";
        parent::afficher(); // TODO: Change the autogenerated stub
    }
}