<?php

require_once('./logic/functions.php');
require_once('./data/constants.php');

$powerfulHeroes = getMostPowerfulHeroes($heroes);

print_r($powerfulHeroes);