<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodBye("Arsyan");
$person->hello("Adit");

$person->name = "Agung";
var_dump($person);

$person->run();