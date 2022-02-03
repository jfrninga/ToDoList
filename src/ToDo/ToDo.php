<?php

namespace Exo2\ToDo;
use DateTime;

class ToDo
{
    public ?DateTime $completed_at = null;
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