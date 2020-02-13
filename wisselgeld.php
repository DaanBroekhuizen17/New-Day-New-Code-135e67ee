<?php

$input = $argv[1];
$bedrag = intval($input);

define("geldeenheden", [
    50,
    20,
    10,
    5,
    2,
    1
]);

$restbedrag = $bedrag;

foreach(geldeenheden as $geldeenheid){
    if($restbedrag >= $geldeenheid){
        $aantalKeerGeldEenheidInRestBedrag = floor($restbedrag / $geldeenheid);
        $restbedrag = $restbedrag % $geldeenheid;
        echo($aantalKeerGeldEenheidInRestBedrag. " keer " .$geldeenheid. " euro".PHP_EOL);
    }
}

?>