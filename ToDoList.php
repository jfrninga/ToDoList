<?php

class TodoList
{
    public array $todos = [];

    public function addTodo(Todo $todo): self
    {
        $this->todos[] = $todo;
        return $this;
    }

    public function filter(callable $filterFunction): array
    {
        return array_filter($this->todos, $filterFunction);
    }

    // public function filter(){

    // }

    public function search(string $search): array
    {
        return $this->filter(fn (Todo $todo) => str_contains($todo->title, $search) || str_contains($todo->description, $search));
        // str_contains($todo->title . $todo->description)
    }


    public function showCompleted(): array
    {
        return $this->filter(fn (Todo $todo) => $todo->isCompleted()); // code simplifié qui retourne true ou false
    }
    public function showNotCompleted(): array
    {
        return $this->filter(fn (Todo $todo) => !$todo->isCompleted());
    }
    public function setAllCompleted(): self
    {
        foreach ($this->todos as $todo) {
            $todo->setCompleted();
        }
        return $this;
    }
}

$list = new TodoList();
 $list
    ->addTodo(new Todo ('Homework titre', '12-12-2021'))
    ->addTodo(new Todo ('Sport', '12-02-2022'))
    ->addTodo(new Todo ('Cook titre', '12-04-2022'))
    ->setAllCompleted()
    ->showNotCompleted();
 


 $searchedTodos = $list->search('2022');
 
 var_dump($searchedTodos);
