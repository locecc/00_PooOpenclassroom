<?php

/**
 * Created by PhpStorm.
 * User: lo
 * Date: 11/09/18
 * Time: 20:48
 */
class Representant extends Commercial
{
    const POURCENT_REPRESENTANT  = 0.2;
    const BONUS_REPRESENTANT = 800;

    public function calculerSalaire()
    {
       return (self::POURCENT_REPRESENTANT * $this->getChiffreAffaire() + self::BONUS_REPRESENTANT);
    }

    public function getTitre()
    {
        return " Le representant";
    }

}