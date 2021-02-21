<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Halim");
var_dump($company);

$company->programmer = new BackendProgrammer("Halim");
var_dump($company);

$company->programmer = new FrontendProgrammer("Halim");
var_dump($company);

sayHelloProgrammer(new Programmer("Halim"));
sayHelloProgrammer(new BackendProgrammer("Halim"));
sayHelloProgrammer(new FrontendProgrammer("Halim"));