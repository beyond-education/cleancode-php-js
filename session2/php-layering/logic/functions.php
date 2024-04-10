<?php

function getMostPowerfulHeroes($heroes)
{
    $powerfulHeroes = [];
    foreach($heroes as $hero)
    {
        if($hero->power >= 90)
        {
            array_push($powerfulHeroes, $hero);
        }
    }
    return $powerfulHeroes;
}