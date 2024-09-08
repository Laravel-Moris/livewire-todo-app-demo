<?php

namespace App\Livewire;

use App\Models\Todo as ModelsTodo;
use Livewire\Attributes\On;
use Livewire\Component;

class Todo extends Component
{
    public ModelsTodo $todo;

    public bool $completed = false;

    public function mount(): void
    {
        $this->completed = $this->todo->completed;
    }

    #[On('todo.completed')]
    public function markAsCompleted(): void
    {
        $this->todo->update(['completed' => $this->completed]);
    }

    public function deleteTodo(): void
    {
        $this->todo->delete();

        $this->dispatch('todo.deleted');
    }
}
