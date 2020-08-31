<?php

const gaiem = 0;
const meika = 1;
const irene = 2;
const sao = 3;
const z = 4;
const sorgoh = 5;


function getInfo($field, $character)
{
    $file = file_get_contents("src/characters.json");
    $array = json_decode($file, true);

    echo $array[$field][$character];
}
