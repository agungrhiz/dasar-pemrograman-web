<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";


addTodoList("Agung");
addTodoList("Arsyan");
addTodoList("Adit");

var_dump($todoList);