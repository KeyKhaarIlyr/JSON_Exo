<?php

function getInfo($field, $character)
{
    $file = file_get_contents("src/characters.json");
    $array = json_decode($file, true);

    echo $array[$field][$character];
}
