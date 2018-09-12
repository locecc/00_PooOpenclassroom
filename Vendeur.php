<?php

/**
 * Created by PhpStorm.
 * User: lo
 * Date: 11/09/18
 * Time: 20:28
 */
class Vendeur extends Commercial
{
    const POURCENT_VENDEUR  = 0.2;
    const BONUS_VENDEUR = 400;
    
    public function calculerSalaire()
    {
        return (self::POURCENT_VENDEUR * $this->getChiffreAffaire() + self::BONUS_VENDEUR);
    }
    
    public function getTitre()
    {
        return " Le vendeur ";
    }
}