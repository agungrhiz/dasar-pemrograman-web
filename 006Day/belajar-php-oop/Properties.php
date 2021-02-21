<?php

require_once "data/Person.php";

$person = new Person("Adit", "Tambun");
$person->name = "Adit";
$person->address = "Tambun";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

$person2 = new Person("Arsyan", null);
$person2->name = "Asryan";
$person2->address = null;

var_dump($person2);

// error
// $person2->name = [];