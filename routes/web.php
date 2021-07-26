<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CompanyController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Auth::routes();

Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('index');

Route::as('admin.')->middleware(['is_admin', 'auth'])->group(function () {
    Route::get('/admin', [HomeController::class, 'index'])->name('index');
    Route::resource('/admin/companies', CompanyController::class)->names([
        'index'     => 'companies.list',
        'create'    => 'companies.new',
        'store'     => 'companies.create',
        'show'      => 'companies.view',
        'edit'      => 'companies.edit',
        'update'    => 'companies.update',
        'destroy'   => 'companies.delete'
    ]);
});
