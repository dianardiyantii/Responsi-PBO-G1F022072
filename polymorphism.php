<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("rafsha");
var_dump($company);

$company->programmer = new BackendProgrammer("rafsha");
var_dump($company);

$company->programmer = new FrontendProgrammer("rafsha");
var_dump($company);

sayHelloProgrammer(new Programmer("rafsha"));
sayHelloProgrammer(new BackendProgrammer("rafsha"));
sayHelloProgrammer(new FrontendProgrammer("rafsha"));