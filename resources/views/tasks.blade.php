@extends('layouts.app', ['title' => 'TODO app'])

@section('content')
    <div class="title">
        TODO
    </div>

    <div class="tasks">
        @foreach($tasks as $task)
            <p><a>{{ $task->name }}</a></p>
        @endforeach
    </div>
@endsection
