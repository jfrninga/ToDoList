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


    class TodoList{
        public array $todos = [];

        public function addTodo(Todo $todo):self{
            $this->todos[] = $todo;
            return $this;
        }

        public function showCompleted(): array
        {
           return $this->filter(fn(Todo $todo) =>$todo->isCompleted());
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
            return$this;
        }
        public function filter(callable $filterFunction): array {
            return array_filter($this->todos, $filterFunction);
        }
       
    }

 $list = new TodoList();
 $list
    ->addTodo(new Todo ('Homework', '12-12-2021'))
    ->addTodo(new Todo ('Sport', '12-02-2022'))
    ->addTodo(new Todo ('Cook', '12-04-2022'))
    ->setAllCompleted()
    ->showNotCompleted();
 
 var_dump($list);
 

