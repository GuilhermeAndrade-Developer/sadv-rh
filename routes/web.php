<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\EmployeeController;
use App\Http\Controllers\Admin\PayslipController;
use App\Http\Controllers\Admin\TaxesController;
use App\Http\Controllers\Site\HomeController as SiteHomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Auth::routes();

Route::get('/', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('index');

Route::as('site.')->middleware(['is_admin', 'auth'])->group(Function() {
    Route::get('/site', [SiteHomeController::class, 'index'])->name('index');

    Route::resource('/site/employees', EmployeeController::class);
    Route::resource('/site/payslip', PayslipController::class);
    Route::resource('/site/taxes', TaxesController::class);
});

Route::as('admin.')->middleware(['is_admin', 'auth'])->group(function () {
    Route::get('/admin', [HomeController::class, 'index'])->name('index');

    Route::get('/admin/lista-empresas', [CompanyController::class, 'index'])->name('company');
    Route::get('/admin/criar-empresa', [CompanyController::class, 'create'])->name('company.new');
    Route::post('/admin/criar-empresa', [CompanyController::class, 'store'])->name('company.create');
    Route::get('/admin/editar-empresa/{id}', [CompanyController::class, 'edit'])->name('company.edit');
    Route::get('/admin/deletar-empresa/{id}', [CompanyController::class, 'destroy'])->name('company.delete');

    Route::resource('/admin/employees', EmployeeController::class)->names([
        'index'     => 'employees.list',
        'create'    => 'employees.new',
        'store'     => 'employees.create',
        'show'      => 'employees.view',
        'edit'      => 'employees.edit',
        'update'    => 'employees.update',
        'destroy'   => 'employees.delete',
    ]);
    Route::resource('/admin/taxes', TaxesController::class)->names([
        'index'     => 'taxes.list',
        'create'    => 'taxes.new',
        'store'     => 'taxes.create',
        'show'      => 'taxes.view',
        'edit'      => 'taxes.edit',
        'update'    => 'taxes.update',
        'destroy'   => 'taxes.delete',
    ]);
    Route::resource('/admin/payslips', PayslipController::class)->names([
        'index'     => 'payslips.list',
        'create'    => 'payslips.new',
        'store'     => 'payslips.create',
        'show'      => 'payslips.view',
        'edit'      => 'payslips.edit',
        'update'    => 'payslips.update',
        'destroy'   => 'payslips.delete',
    ]);
});
