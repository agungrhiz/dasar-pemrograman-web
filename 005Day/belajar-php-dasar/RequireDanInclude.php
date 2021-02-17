<?php

/* require dan include untuk penulisan hampir sama
hanya saja menggunakan require, jika file yang kita ambil tidak ada
maka akan terjadi error dan program akan berhenti, sedangkan include
hanya akan memberi peringatan namun program akan tetap dilanjutkan */

include_once "Lib/MyFunction.php";
include_once "Lib/MyFunction.php";

echo sayHello("Eko", "Kurniawan");