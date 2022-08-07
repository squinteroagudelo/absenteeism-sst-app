<?php

use App\Http\Controllers\HomeController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth:sanctum', 'verified'])->get('/', [HomeController::class, 'index'])->name('home');

Route::get('/users', function () {
    return datatables()
        ->eloquent(User::query())
        ->addColumn('actions', 'admin.users.partials.actions')
        ->rawColumns(['actions'])
        ->toJson();
})->name('getUsers.datatable');
