<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            <a href="{{route('task.create')}}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded float-right">
                Create Task
            </a>
        </h2>

    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @foreach ($tasks as $task )
                @if($task->completed == true)
                <div class="p-6 bg-white border-b border-gray-200 line-through">
                    {{$task->task}}
                    <div class="float-right">
                        <a href="{{route('task.finish',$task)}}" class="mr-3 bg-transparent hover:bg-yellow-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            Undo
                        </a>
                    </div>
                </div>
                @else
                <div class="p-6 bg-white border-b border-gray-200">
                    {{$task->task}}
                    <div class="float-right">
                        <a href="{{route('task.finish',$task)}}" class="mr-3 bg-transparent hover:bg-yellow-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            Done
                        </a>
                        <a href="{{route('task.edit',$task)}}" class="mr-3 bg-transparent hover:bg-green-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                            Edit
                        </a>
                        <form action="{{route('task.destroy',$task)}}" class="inline-block" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="mr-3 bg-transparent hover:bg-red-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" type="submit">
                                Delete
                            </button>
                        </form>

                    </div>
                </div>
                @endif

                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
