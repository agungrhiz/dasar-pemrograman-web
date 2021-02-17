<?php

// menggabungkan array menjadi string
var_dump(join(",", [10, 11, 12, 13, 14, 15]));

// memecah string menjadi array
var_dump(explode(" ", "Eko Kurniawan Khanendy"));
var_dump(strtolower("EKO KURNIAWNA KHANNEDY"));
var_dump(strtoupper("eko kurniawna khannedy"));

// menghapus whitespace
var_dump(trim("        eko      kurniawan       "));

// mengambil sebagian string
var_dump(substr("Eko Kurniawan Khannedy", 0, 3));