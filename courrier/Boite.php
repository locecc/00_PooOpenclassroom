<?php

class Boite
{
    protected $contenu = [];
    protected $index = 0;

    public function __construct($index)
    {
        $this->index = $index;
    }


    public function size()
    {
        return $this->index;
    }

    public function getCourrier($index) {
        if ($index < count($this->contenu)){
            return $this->contenu[$index];
        } else {
            return null;
        }
    }

    public function courriersInvalides()
    {
        $count = 0;
        for($i = 0; $i< $this->index; $i++){
            if (!$this->contenu[$i]->valide()){
                $count++;
            }
        }
        return $count;
    }

    public function ajouterCourrier(Courrier $courrier){
        if($this->index >count($this->contenu)){
            array_push($this->contenu, $courrier);
            $this->index++;
            echo count($this->contenu);
        }else{
            echo " boite aux lettres pleines";
            echo $this->index;
            echo count($this->contenu);
        }
    }


}