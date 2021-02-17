<?php

$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["Adit", "Agung", "Arsyan"];
var_dump($names);

// cek nilai array berdasarkan indeks
var_dump($names[0]);

// mengubah nilai array berdasarkan indeks
$names[0] = "Hatta";
var_dump($names);

// menghapus nilai array berdasrkan indeks
unset($names[1]);
var_dump($names);

// menambah data pada array
var_dump($names);

// menghitung jumlah array
var_dump(count($names));

// array sebagai map dan array di dalam array
$agung = array(
    "id" => "agung",
    "name" => "Agungrhiz",
    "age" => 19,
    "address" => array(
        "city" => "Bekasi",
        "country" => "Indonesia"
    )
);

var_dump($agung["name"]);
var_dump($agung["address"]["country"]);

$adit = [
    "id" => "adit",
    "name" => "Ichsandit",
    "age" => 19,
    "address" => [
        "city" => "Bekasi",
        "country" => "Indonesia"
    ]
];
var_dump($adit);