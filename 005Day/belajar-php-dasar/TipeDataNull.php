<?php

$name = "Agung";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";


// cek variabel null
echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";

// hapus variabel
$contoh = "Agung";
unset ($contoh);

$contoh = "rhiz";
$contoh = null;

// cek variable ada dan nilainya tidak null
var_dump(isset($contoh));