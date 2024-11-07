<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/karyawanizin', function () {
    return view('Dashboard/karyawanizin');
});

Route::get('/absent', function () {
    return view('Dashboard/absent');
});

Route::get('/gohomearly', function () {
    return view('Dashboard/gohomearly');
});

Route::get('/late', function () {
    return view('Dashboard/late');
});

Route::get('/permit', function () {
    return view('Dashboard/permit');
});

Route::get('/user', function () {
    return view('layouts.user');
})->name('user');

Route::get('/admin', function () {
    return view('layouts.admin');
})->name('admin');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/setup-payroll', [DashboardController::class, 'setupPayroll'])->name('setup-payroll');
Route::get('/employees-list', [DashboardController::class, 'employeesList'])->name('employees-list');


Route::get('/Userdashboard', [DashboardController::class, 'indexUser'])->name('Userdashboard');
Route::get('/Usersetup-payroll', [DashboardController::class, 'setupPayrollUser'])->name('Usersetup-payroll');
Route::get('/Useremployees-list', [DashboardController::class, 'employeesListUser'])->name('Useremployees-list');