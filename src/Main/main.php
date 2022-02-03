<?php
require '../../vendor/autoload.php';

use Exo2\ToDo\ToDoList;
use Exo2\ToDo\ToDo;

$list = new ToDoList();
$list
    ->addTodo(new Todo ('Homework titre', '12-12-2021'))
    ->addTodo(new Todo ('Sport', '12-02-2022'))
    ->addTodo(new Todo ('Cook titre', '12-04-2022'))
    ->setAllCompleted()
    ->showNotCompleted();



$searchedTodos = $list->search('2022');

dump($searchedTodos);