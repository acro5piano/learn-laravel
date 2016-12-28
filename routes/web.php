<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
 */

use App\Task as Task;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function () {
    $task = new Task;
    $task->name = 'aaa';
    $task->save();

    return view('tasks', [
        'tasks' => Task::all(),
    ]);
});
