<?php

use Illuminate\Support\Facades\Route;
use App\Models\Task;
use Illuminate\Http\Request;


Route::view('/tasks/create', 'create')->name('tesks.create');

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
    dd($request->all());
})->name('tasks.store');

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
