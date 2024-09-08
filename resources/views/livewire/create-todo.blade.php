<form
  wire:submit="save"
  class="bg-slate-100 px-6 py-8 h-40 col-span-3 relative"
>
  <div>
    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900"></label>
    <input
      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
      wire:model="task"
      type="text"
      placeholder="Add task"
    />

    @error('task')
      <span class="text-red-600 text-sm">{{ $message }}</span>
    @enderror
  </div>
  
  <button
    type="submit"
    class="absolute bottom-0 mb-4 mr-4 h-8 right-0 bg-indigo-500 text-white rounded-md w-32"
  >
    Add
  </button>
</form>
