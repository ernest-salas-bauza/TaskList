@extends('layouts.app')

@section('title', 'Listas de taks')

@section('content')

    <div>
        <nav class="mb-4">
            <a href="{{ route('tasks.create') }}" class="link">Add Task!</a>
        </nav>
        @forelse ($tasks as $task)
            <div>
                <a href="{{ route('tasks.show', ['task' => $task->id]) }}"
                    @class(['line-through' => $task->completed])>{{ $task->title }}</a>
            </div>

        @empty
            <div>no hay tasks</div>
        @endforelse

        @if ($tasks->count())
            <nav>
                {{ $tasks->links() }}
            </nav>
        @endif
    </div>

@endsection
