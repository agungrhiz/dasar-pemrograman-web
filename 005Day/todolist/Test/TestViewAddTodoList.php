<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Agung");
addTodoList("Arsyan");
addTodoList("Adit");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();