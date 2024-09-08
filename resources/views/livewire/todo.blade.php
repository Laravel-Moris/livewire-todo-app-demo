<div
  @class([
      'bg-slate-50 w-full grid grid-cols-8 gap-x-8 items-center px-4 py-2',
      'line-through' => $todo->completed
    ])
>
  <input
    type="checkbox"
    wire:model.live="completed"
    @change="$dispatch('todo.completed')"
  />

  <span class="text-center">{{ $todo->id }}.</span>
  <span class="col-span-2 text-center">{{ $todo->task }}</span>
  <span class="col-span-2 text-center">{{ $todo->created_at->format('Y-m-d H:i') }}</span>
  <button
    class="bg-red-500 text-white rounded-md w-16 h-8"
    wire:click="deleteTodo"
  >
    Delete
  </button>
</div>
