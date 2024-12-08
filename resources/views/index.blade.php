@extends('layouts.app')

@section('title', 'Listas de taks')

@section('content')

<div>
    @forelse ( $tasks as $task )
    <div>
        <a href="{{ route('tasks.show', ['id' => $task->id ]) }}">{{ $task->title }}</a>
    </div>

    @empty
    <div>no hay tasks</div>
    @endforelse
</div>

@endsection
