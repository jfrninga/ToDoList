<?php
require_once 'ToDo.php';
require_once 'ToDoList.php';

$list = new TodoList();
$list
    ->addTodo(new Todo ('Homework titre', '12-12-2021'))
    ->addTodo(new Todo ('Sport', '12-02-2022'))
    ->addTodo(new Todo ('Cook titre', '12-04-2022'))
    ->setAllCompleted()
    ->showNotCompleted();



$searchedTodos = $list->search('2022');

var_dump($searchedTodos);