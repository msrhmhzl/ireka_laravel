
<?php
use App\Http\Controllers\PagesController;

use App\Http\Controllers\TasksController;

Route::get('/',[PagesController::class, 'home']);

Route::resource('tasks', TasksController::class);