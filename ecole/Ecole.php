<?php

class Ecole
{
    protected $gens =[];

    public function add(EPFlien $epflien)
    {

        array_push($this->gens, $epflien);
    }


    public function afficherLiens()
    {
        for($i=0; $i<count($this->gens);$i++ )
        {
            $this->gens[$i]->afficher();
            echo"<br>";
        }
    }


}