<?php

function chargerClasse($classe)
{
    require $classe . '.php';
}

spl_autoload_register('chargerClasse');


$robert = new Vendeur("nomRobert","robert",50,1978,1000);


var_dump($robert->calculerSalaire());


$tst = new Manutentionnaire("mnua","moi",45,1978,80);



$aoiz = new ManutArisque("ljqsf","mlkjsfd",45,1987,50);

var_dump($aoiz->calculerSalaire());