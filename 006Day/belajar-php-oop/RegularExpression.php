<?php

$matches = [];
$result = preg_match_all("/arsyan|edi|sap/i", "Arsyan Dedi Sapto", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu ANJING dan BANGSAT!");

var_dump($result);

$result = preg_split("/[\s,-]/", "Ichsan Mufhti Alfaritzy,Programmer,EUE-Vibes");

var_dump($result);