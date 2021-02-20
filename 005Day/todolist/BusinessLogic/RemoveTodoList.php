<?php

// menghapus todo di list
function removeTodoList(int $number): bool
{
    global $todoList;

    // cek jika melebihi jumlah dari indeks yg ada
    if ($number > sizeof($todoList)) {
        return false;
    }

    // menggeser indeks yg ingin dihapus menjadi paling akhir
    for ($i = $number; $i < sizeof($todoList); $i++) {
        $todoList[$i] = $todoList[$i + 1];
    }

    // menghapus indeks yg paling akhir
    unset($todoList[sizeof($todoList)]);

    return true;
}