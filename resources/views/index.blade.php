@extends('layouts.app')

@section('title', 'Listas de taks')

@section('content')

<div>
    <div>
        <a href="{{ route('tasks.create') }}">Create</a>
    </div>
    @forelse ( $tasks as $task )
    <div>
        <a href="{{ route('tasks.show', ['task' => $task->id ]) }}">{{ $task->title }}</a>
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
