<?php 
    class Todo
    {
        public ?DateTime $completed = null;
        public function __construct(public string $title, public string $description,)
        {
        }
        public function setCompleted(): self{
           $this->completed_at = new DateTime();
           return $this;
        }
        public function isCompleted(): bool{
            return $this->completed_at !==null;
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

