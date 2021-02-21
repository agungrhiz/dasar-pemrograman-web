<?php

require_once "data/Person.php";

$agung = new Person("Agung", "Bekasi");
$agung->name = "Agung";
$agung->sayHello("Arsyan");

$adit = new Person("Adit","Tambun");
$adit->name = "Adit";
$adit->sayHello(null);

$agung->info();
$adit->info();