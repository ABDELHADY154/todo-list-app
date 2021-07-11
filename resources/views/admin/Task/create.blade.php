<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Task') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form class="bg-white  rounded px-8 pt-6 pb-8 mb-4" action="{{route('task.store')}}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="task">
                            Task
                        </label>
                        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="task" type="text" placeholder="Task" name="task">
                        @error('task')
                        <div class="alert alert-danger text-red-600">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                            Add Task
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
