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


