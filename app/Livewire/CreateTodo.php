<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateTodo extends Component
{
    #[Validate('required')]
    public ?string $task;

    public function save(): void
    {
        $this->validate();

        $task = Todo::create([
            'task' => $this->task,
        ]);

        $this->task = null;
        $this->dispatch('todo.created');
    }
}
