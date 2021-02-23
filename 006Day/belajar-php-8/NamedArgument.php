<?php

function sayHello(string $first, string $middle = "", string $last): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}

// without named argument
sayHello("Ichsan", "Mufti", "Raharjo");
// sayHello("Ichsan", "Raharjo"); // error

// with name argument
sayHello(last: "Raharjo", first: "Ichsan", middle: "Mufti");
sayHello(first: "Ichsan", last: "Raharjo");