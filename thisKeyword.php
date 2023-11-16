<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$alzah = new Person("rafsha", "linggau");

// tambahkan value nama di object
$alzah->nama = "rafsha";

// panggil function sayHelloNull dengan parameter
$alzah->sayHelloNull("Kic");

// buat object dari kelas person
$fariski = new Person("syauqi", "bengkulu");

// tambahkan value nama di object
$fariski->nama = "syauqi";

// panggil function sayHelloNull dengan parameter null
$fariski->sayHelloNull(null);
