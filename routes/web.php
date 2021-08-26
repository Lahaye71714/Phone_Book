<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeesController;
use App\Models\Company;
use App\Models\Employees;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Editor;

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

/*Route::get('/', function () {
    return view('welcome');
});*/



Route::group(['middleware' => ['protectedPageAdmin']], function(){
    Route::delete('/company/delete/{id}', [CompanyController::class, 'delete'])->name('company.delete');
    Route::delete('/employees/delete/{id}', [EmployeesController::class, 'delete'])->name('employees.delete');
});

Route::group(['middleware' => ['protectedPage']], function(){
    Route::get('/company/register', [CompanyController::class, 'create'])->name('company.create');
    Route::get('/company/list', [CompanyController::class, 'list'])->name('company.list');
    Route::get('/company/update/{id}', [CompanyController::class, 'formedit'])->name('company.formedit');
    Route::put('/company/update/{id}', [CompanyController::class, 'update'])->name('company.update');

    Route::get('/employees/register', [EmployeesController::class, 'create'])->name('employees.create');
    Route::get('/employees/list', [EmployeesController::class, 'list'])->name('employees.list');
    Route::get('/employees/update/{id}', [EmployeesController::class, 'formedit'])->name('employees.formedit');
    Route::put('/employees/update/{id}', [EmployeesController::class, 'update'])->name('employees.update');
});

Route::get('/', function () {
    return view('home');
})->name('home');

require __DIR__.'/auth.php';

//Company
Route::get('/company', [CompanyController::class, 'see'])->name('company.see');
Route::get('/company/view/{id}', [CompanyController::class, 'view'])->name('company.view');
Route::post('/company/register', [CompanyController::class, 'store'])->name('company.store');

//Employees
Route::get('/employees', [EmployeesController::class, 'see'])->name('employees.see');
Route::post('/employees/register', [EmployeesController::class, 'store'])->name('employees.store');
Route::get('/employees/view/{id}', [EmployeesController::class, 'view'])->name('employees.view');

