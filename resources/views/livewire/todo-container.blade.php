<div class="w-full max-w-7xl mx-auto">
  <div class="grid grid-cols-8 w-full">
    <livewire:create-todo/>
    
    <div class="flex flex-col items-center space-y-2 mx-4 col-span-4">
      @if($todos->isNotEmpty())
        <div class="bg-slate-50 py-8 px-4 w-full">
          <input
            type="text"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
            wire:model.live.debounce.200ms="search"
            placeholder="Search task list"
          />
        </div>
        
        <div class="w-full grid grid-cols-8 gap-x-8 items-center px-4 py-2">
          <span class="text-sm text-center font-semibold">Completed</span>
          <span class="text-sm text-center font-semibold">Id</span>
          <span class="text-sm text-center font-semibold col-span-2">Task</span>
          <span class="text-sm text-center font-semibold col-span-2">Created</span>
        </div>
      @endif
      
      @foreach($todos as $todo)
        <livewire:todo
          wire:key="{{ $todo->id }}"
          :todo="$todo"
        />
      @endforeach
    </div>
  </div>
</div>
