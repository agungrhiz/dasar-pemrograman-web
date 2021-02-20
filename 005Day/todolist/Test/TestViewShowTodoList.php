<?php

require_once "../View/ViewShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Agung");
addTodoList("Arsyan");
addTodoList("Adit");
addTodoList("Halim");
addTodoList("Geraldo");
addTodoList("Ilham");

viewShowTodoList();