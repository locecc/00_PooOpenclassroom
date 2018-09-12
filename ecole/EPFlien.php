<?php

class EPFlien
{
    private $nom;
    private $annee;

    /**
     * EPFlien constructor.
     * @param $nom
     * @param $annee
     */
    public function __construct($nom, $annee)
    {
        $this->nom = $nom;
        $this->annee = $annee;
    }

    public function afficher()
    {
        echo "Nom : ".$this->nom;
        echo"<br>";
        echo"Annee : ".$this->annee;
    }

    public function getAnnee():int
    {
        return $this->annee;
    }

    public function getNom():string
    {
        return $this->nom;
    }

    public function estEtudiant():bool
    {
        return false;
    }


}