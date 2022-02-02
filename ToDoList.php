<?php

class TodoList{
public array $todos = [];

public function addTodo(Todo $todo):self{
$this->todos[] = $todo;
return $this;
}

public function filter(callable $filterFunction): array {
return array_filter($this->todos, $filterFunction);
}

// public function filter(){

// }

public function search(string $search): array{
return $this->filter(fn(Todo $todo) =>str_contains($todo->title, $search) || str_contains($todo->description, $search));
}


public function showCompleted(): array
{
return $this->filter(fn(Todo $todo) =>$todo->isCompleted()); // code simplifié qui retourne true ou false
}
public function showNotCompleted(): array
{
return $this->filter(fn(Todo $todo) =>!$todo->isCompleted());
}
public function setAllCompleted(): self
{
foreach($this->todos as $todo) {
$todo->setCompleted();
}
return $this;
}

}