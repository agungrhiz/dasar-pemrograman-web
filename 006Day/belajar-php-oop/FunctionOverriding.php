<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Arsyan";
$manager->sayHello("Adit");

$vp = new VicePresident();
$vp->name = "Adit";
$vp->sayHello("Arsyan");