<?php

echo 'Name : ';
echo 'Agungrhiz';
echo "\n";

// "" petik 2 dapat menggunakan escape sequence sedangka '' kutip satu tidak
echo "Alamat : ";
echo "Kota\t Bekasi\n";

echo <<<TEKS
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc

TEKS;

// nowdoc tidak memiliki kemampuan parsing seperti di herdoc atau double qoute
echo <<<'TEKS'
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-4 membuat string
bisa menggunakan nowdoc
TEKS;