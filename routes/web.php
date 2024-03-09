<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdServController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\ComboController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomerAccessController;
use App\Http\Controllers\CustomerController;
use app\Http\Middleware\MultGuard;
use App\Http\Controllers\EmployeePartController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::post('/register', [CustomerController::class, 'register'])->name('Customers.register');




Route::get('/prodServ', [ProdServController::class, 'index'])->name('ProdServ.index');
Route::get('/appointment', [AppointmentController::class, 'index'])->name('Appointments.index');


// Route::prefix('admin/services')->middleware('MultGuard:manager, employee')->group(function () {
//     Route::get('/',[ServiceController::class, 'index'] )->name('services.index');
//     // ->middleware('checkguards:manager,employee')
//     Route::get('/create',[ServiceController::class, 'create'] )->name('services.create');
//     Route::post('/store',[ServiceController::class, 'store'] )->name('services.store');
//     Route::get('/{id}/edit',[ServiceController::class, 'edit'] )->name('services.edit');
//     Route::post('/update',[ServiceController::class, 'update'] )->name('services.update');
//     Route::delete('/{id}/delete',[ServiceController::class, 'delete'] )->name('services.delete');
// });

// Route::prefix('admin/products')->middleware('MultGuard:manager, employee')->group(function () {
//     Route::get('/',[ProductController::class, 'index'] )->name('products.index');
//     Route::get('/create',[ProductController::class, 'create'] )->name('products.create');
//     Route::post('/store',[ProductController::class, 'store'] )->name('products.store');
//     Route::get('/{id}/edit',[ProductController::class, 'edit'] )->name('products.edit');
//     Route::post('/update',[ProductController::class, 'update'] )->name('products.update');
//     Route::delete('/{id}/delete',[ProductController::class, 'delete'] )->name('products.delete');
// });

// Route::prefix('admin/employees')->middleware('MultGuard:manager, employee')->group(function () {
//     Route::get('/',[EmployeeController::class, 'index'] )->name('employees.index');
//     Route::get('/create',[EmployeeController::class, 'create'] )->name('employees.create');
//     Route::post('/store',[EmployeeController::class, 'store'] )->name('employees.store');
//     Route::get('/{id}/edit',[EmployeeController::class, 'edit'] )->name('employees.edit');
//     Route::post('/update',[EmployeeController::class, 'update'] )->name('employees.update');
//     Route::delete('/{id}/delete',[EmployeeController::class, 'delete'] )->name('employees.delete');
// });

// Route::prefix('admin/managers')->middleware('MultGuard:manager, employee')->group(function () {
//     Route::get('/',[ManagerController::class, 'index'] )->name('managers.index');
//     // ->middleware('auth:manager');
//     Route::get('/create',[ManagerController::class, 'create'] )->name('managers.create');
//     Route::post('/store',[ManagerController::class, 'store'] )->name('managers.store');
//     Route::get('/{id}/edit',[ManagerController::class, 'edit'] )->name('managers.edit');
//     Route::post('/update',[ManagerController::class, 'update'] )->name('managers.update');
//     Route::delete('/{id}/delete',[ManagerController::class, 'delete'] )->name('managers.delete');
// });


// Route::prefix('admin/payrolls')->middleware('MultGuard:manager, employee')->group( function () {
//     Route::get('/{id}/index',[PayrollController::class, 'index'] )->name('payrolls.index');
//     Route::get('/create',[PayrollController::class, 'create'] )->name('payrolls.create');
//     Route::post('/store',[PayrollController::class, 'store'] )->name('payrolls.store');
// });

// Route::prefix('admin/combos')->middleware('MultGuard:manager, employee')->group(function () {
//     Route::get('/index',[ComboController::class, 'index'] )->name('combos.index');
//     Route::get('/create',[ComboController::class, 'create'] )->name('combos.create');
//     Route::post('/store',[ComboController::class, 'store'] )->name('combos.store');
// });

Route::prefix('admin')->group(function () {
    Route::get('/',[LoginController::class, 'index'] )->name('adminlogin.index');
    Route::get('/profile',[LoginController::class, 'profile'] )->name('adminlogin.profile');
    Route::post('/login',[LoginController::class, 'auth'] )->name('adminlogin.auth
    
    
    ');
    Route::get('/logout',[LoginController::class, 'out'] )->name('adminlogin.out');

        Route::prefix('/services')->group(function () {
            Route::get('/',[ServiceController::class, 'index'] )->name('services.index');
            // ->middleware('checkguards:manager,employee')
            Route::get('/create',[ServiceController::class, 'create'] )->name('services.create');
            Route::post('/store',[ServiceController::class, 'store'] )->name('services.store');
            Route::get('/{id}/edit',[ServiceController::class, 'edit'] )->name('services.edit');
            Route::post('/update',[ServiceController::class, 'update'] )->name('services.update');
            Route::delete('/{id}/delete',[ServiceController::class, 'delete'] )->name('services.delete');
        });

        Route::prefix('/products')->group(function () {
            Route::get('/',[ProductController::class, 'index'] )->name('products.index');
            Route::get('/create',[ProductController::class, 'create'] )->name('products.create');
            Route::post('/store',[ProductController::class, 'store'] )->name('products.store');
            Route::get('/{id}/edit',[ProductController::class, 'edit'] )->name('products.edit');
            Route::post('/update',[ProductController::class, 'update'] )->name('products.update');
            Route::delete('/{id}/delete',[ProductController::class, 'delete'] )->name('products.delete');
        });

        Route::prefix('/employees')->group(function () {
            Route::get('/',[EmployeeController::class, 'index'] )->name('employees.index');
            Route::get('/create',[EmployeeController::class, 'create'] )->name('employees.create');
            Route::post('/store',[EmployeeController::class, 'store'] )->name('employees.store');
            Route::get('/{id}/edit',[EmployeeController::class, 'edit'] )->name('employees.edit');
            Route::post('/update',[EmployeeController::class, 'update'] )->name('employees.update');
            Route::delete('/{id}/delete',[EmployeeController::class, 'delete'] )->name('employees.delete');
        });
        
        Route::prefix('/customers')->group(function () {
            Route::get('/',[CustomerController::class, 'index'] )->name('customers.index');
            Route::get('/create',[CustomerController::class, 'create'] )->name('customers.create');
            Route::post('/store',[CustomerController::class, 'store'] )->name('customers.store');
            Route::get('/{id}/edit',[CustomerController::class, 'edit'] )->name('customers.edit');
            Route::post('/update',[CustomerController::class, 'update'] )->name('customers.update');
            Route::delete('/{id}/delete',[CustomerController::class, 'delete'] )->name('customers.delete');
        });

        Route::prefix('/managers')->group(function () {
            Route::get('/',[ManagerController::class, 'index'] )->name('managers.index');
            // ->middleware('auth:manager');
            Route::get('/create',[ManagerController::class, 'create'] )->name('managers.create');
            Route::post('/store',[ManagerController::class, 'store'] )->name('managers.store');
            Route::get('/{id}/edit',[ManagerController::class, 'edit'] )->name('managers.edit');
            Route::post('/update',[ManagerController::class, 'update'] )->name('managers.update');
            Route::delete('/{id}/delete',[ManagerController::class, 'delete'] )->name('managers.delete');
        });

        Route::prefix('/payrolls')->group( function () {
            Route::get('/{id}/index',[PayrollController::class, 'index'] )->name('payrolls.index');
            Route::get('/create',[PayrollController::class, 'create'] )->name('payrolls.create');
            Route::post('/store',[PayrollController::class, 'store'] )->name('payrolls.store');

        });

        Route::prefix('/combos')->group(function () {
            Route::get('/index',[ComboController::class, 'index'] )->name('combos.index');
            Route::get('/create',[ComboController::class, 'create'] )->name('combos.create');
            Route::post('/store',[ComboController::class, 'store'] )->name('combos.store');
            Route::get('/{id}/edit',[ComboController::class, 'edit'] )->name('combos.edit');
            Route::post('/update',[ComboController::class, 'update'] )->name('combos.update');
            Route::delete('/{id}/delete',[ComboController::class, 'delete'] )->name('combos.delete');
        });
});
Route::post('/customer',[LoginController::class, 'auth'] )->name('log');
Route::prefix('customer')->middleware('MultGuard:customer')->group(function () {
    Route::get('/items',[CustomerAccessController::class, 'items_index'] )->name('itemList');
});




Route::get('/adduser', 'App\Http\Controllers\PagesController@adduser');

Route::get('/signup', 'App\Http\Controllers\PagesController@signup');

Route::get('/summary', 'App\Http\Controllers\PagesController@summary');

Route::get('/addproduct', 'App\Http\Controllers\PagesController@addproduct');

Route::get('/addservices', 'App\Http\Controllers\PagesController@addservices');

Route::get('/addcombos', 'App\Http\Controllers\PagesController@addcombos');

Route::get('/addemployee', 'App\Http\Controllers\PagesController@addemployee');

Route::get('/employeelist', 'App\Http\Controllers\PagesController@employeelist');


Route::get('/sidebar', 'App\Http\Controllers\PagesController@sidebar');
 
Route::get('/reviews', 'App\Http\Controllers\PagesController@reviews');

Route::get('/skillcard', 'App\Http\Controllers\PagesController@skillcard');


Route::get('/appointments', 'App\Http\Controllers\PagesController@appointments');

Route::get('/reschedule', 'App\Http\Controllers\PagesController@reschedule');

Route::get('/profile', 'App\Http\Controllers\PagesController@Profile');

Route::get('/product', 'App\Http\Controllers\PagesController@product');

Route::get('/workspace', 'App\Http\Controllers\PagesController@workspace');

Route::get('/employeepart/dashboard', [EmployeePartController::class, 'dashboard']);