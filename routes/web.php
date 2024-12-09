<?php

use Illuminate\Support\Facades\Route;
use App\Models\Task;
use Illuminate\Http\Request;


Route::view('/tasks/create', 'create')->name('tesks.create');

Route::get('/tasks/{id}/edit', function ($id)  {
    $task = Task::findOrFail($id);

    return view('edit', ['task' => $task]);

})->name('tasks.edit');

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function ()  {
    $tasks = Task::latest()->get();

    return view('index', [
        'tasks' => $tasks,
    ]);
})->name('tasks.index');

Route::get('/tasks/{id}', function ($id)  {
    $task = Task::findOrFail($id);

    return view('show', ['task' => $task]);

})->name('tasks.show');



Route::post('/tasks', function (Request $request) {

    $data = $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'long_description' => 'required',
    ]);

    $task = new Task;
    $task->title = $data['title'];
    $task->description = $data['description'];
    $task->long_description = $data['long_description'];
    $task->save();

    return redirect()->route('tasks.show', ['id' => $task->id])
        ->with('success', 'Task created successfully');

})->name('tasks.store');

Route::put('/tasks/{id}', function ($id, Request $request) {

    $data = $request->validate([
        'title' => 'required|max:255',
        'description' => 'required',
        'long_description' => 'required',
    ]);

    $task = Task::findOrFail($id);
    $task->title = $data['title'];
    $task->description = $data['description'];
    $task->long_description = $data['long_description'];
    $task->save();

    return redirect()->route('tasks.show', ['id' => $task->id])
        ->with('success', 'Task updated successfully');

})->name('tasks.update');

// Route::get('/hello', function () {
//     return 'Hello';
// })->name('hello');

// Route::get('/greet/{name}', function ($name) {
//     return 'Hello' . $name;
// });

// Route::get('/hallo', function () {
//     return redirect()->route('hello');
// });

Route::fallback(function () {
    return 'skere';
});
