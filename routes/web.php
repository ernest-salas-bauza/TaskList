<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Models\Task;
use Illuminate\Http\Request;


Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::resource('tasks', TaskController::class);

Route::put('tasks/{task}/toggle-complete', function (Task $task) {
    $task->toggleComplete();
    return redirect()->back()->with('success','Task updated successfully');
})->name('tasks.toggle-complete');

Route::fallback(function () {
    return 'skere';
});
