<?php
require_once "./vendor/autoload.php";

use App\Chicken;
use App\Cow;
use App\Ferme;



function clientCode()
{
    $ferme = new Ferme();

    $cow = new Cow($ferme);

    $chicken= new Chicken($ferme);



    $cows[0]=$cow;

    for ($i=0;$i<6;$i++ ){

        $cows[]=clone $cow;
    }
    $chickens[0]=$chicken;

    for ($i=0;$i<14;$i++ ){

        $chickens[]=clone $chicken;
    }

    $ferme->collectionEggs();

    $ferme->collectionLitersMilk();

    echo $ferme->countEggs().PHP_EOL;

    echo  $ferme->countLitersMilk();

}

clientCode();



