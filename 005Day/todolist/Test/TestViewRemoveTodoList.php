<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Agung");
addTodoList("Arsyan");
addTodoList("Adit");
addTodoList("Halim");
addTodoList("Geraldo");
addTodoList("Ilham");

showTodoList();

viewRemoveTodoList();

showTodoList();