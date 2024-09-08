<?php

namespace App\Livewire;

use App\Models\Todo;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class TodoContainer extends Component
{
    public Collection $todoList;

    public ?string $search = null;

    public function mount(): void
    {
        $this->loadTodo();
    }

    #[On('todo.created')]
    #[On('todo.deleted')]
    public function refreshTodoList(): void
    {
        $this->loadTodo();
    }

    public function render(): View
    {
       $this->loadTodo();

        return view('livewire.todo-container', [
            'todos' => $this->todoList,
        ]);
    }

    protected function loadTodo(): void
    {
        $this->todoList = Todo::query()->where('task', 'like', "%{$this->search}%")->get();
    }
}
