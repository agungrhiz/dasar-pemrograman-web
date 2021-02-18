<?php

function input(string $info): string
{
    echo "$info : ";
    // function fgets resource standar input(STDIN)
    $result = fgets(STDIN);
    return trim($result);
}