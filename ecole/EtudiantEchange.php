<?php

class EtudiantEchange extends Etudiant
{
    private $uniOrigine;

    public function __construct($nom, $annee, $section, $uniOrigine)
    {
        parent::__construct($nom, $annee, $section);
        $this->uniOrigine = $uniOrigine;
    }

    public function afficher()
    {
        echo " Etudiant Echange :";
        parent::afficher(); // TODO: Change the autogenerated stub
        echo " Universite origine ".$this->uniOrigine;
    }

    public function getUniOrigine()
    {
        return $this->uniOrigine;
    }
}