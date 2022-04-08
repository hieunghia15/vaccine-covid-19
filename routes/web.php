<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\AssignController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\PriorityGroupController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ManufactureController;
use App\Http\Controllers\Admin\MedicalController;
use App\Http\Controllers\Admin\VaccinationSiteController;
use App\Http\Controllers\Admin\VaccinationTypeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Guest\IndexController;






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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

//Get location
Route::prefix('locations')->namespace('Locations')->name('locations.')->group(function () {
    Route::get('/', [LocationController::class, 'index'])->name('location');
    Route::post('/get-province-by-region', [LocationController::class, 'getProvince'])->name('get-province');
    Route::post('/get-district-by-province', [LocationController::class, 'getDistrict'])->name('get-district');
    Route::post('/get-ward-by-district', [LocationController::class, 'getWard'])->name('get-ward');
});

//User: GUEST
Route::prefix('/')->namespace('Guest')->name('guest.')->group(function () {

    Route::get('/', [IndexController::class, 'index'])->name('index');

    Route::get('/about', function () {
        return view('guest.about');
    })->name('about');

    Route::get('/basic-symptoms', function () {
        return view('guest.basic-symptoms');
    })->name('basic-symptoms');

    Route::get('/blog', [IndexController::class, 'indexPost'])->name('blog');
    Route::get('/category/{category_slug}', [IndexController::class, 'categoryPost'])->name('category');
    Route::get('/posts/{post_slug}', [IndexController::class, 'readPost'])->name('read');
    Route::get('/search', [IndexController::class, 'search'])->name('search');
});

//User: ADMIN
Route::prefix('admin')->namespace('Admin')->middleware('auth')->name('admin.')->group(function () {

    Route::get('/index', function () {
        return view('admin.layout-admin');
    })->name('index');

    Route::prefix('permissions')->namespace('Permissions')->name('permissions.')->group(function () {

        Route::get('/role', [RoleController::class, 'index'])->name('index-role');
        Route::get('/create-role', [RoleController::class, 'create'])->name('create-role');
        Route::post('/create-role', [RoleController::class, 'store'])->name('store-role');
        Route::get('/update-role/{id}', [RoleController::class, 'edit'])->name('edit-role');
        Route::patch('/update-role/{id}', [RoleController::class, 'update'])->name('update-role');
        Route::get('/delete-role/{id}', [RoleController::class, 'destroy'])->name('destroy-role');
        Route::delete('/delete-role/{id}', [RoleController::class, 'delete'])->name('delete-role');

        Route::get('/', [PermissionController::class, 'index'])->name('index-permission');
        Route::get('/create-permission', [PermissionController::class, 'create'])->name('create-permission');
        Route::post('/create-permission', [PermissionController::class, 'store'])->name('store-permission');
        Route::get('/update-permission/{id}', [PermissionController::class, 'edit'])->name('edit-permission');
        Route::patch('/update-permission/{id}', [PermissionController::class, 'update'])->name('update-permission');
        Route::get('/delete-permission/{id}', [PermissionController::class, 'destroy'])->name('destroy-permission');
        Route::delete('/delete-permission/{id}', [PermissionController::class, 'delete'])->name('delete-permission');

        Route::get('/user-permission', [AssignController::class, 'index'])->name('user-permission');
        Route::get('/role-permission', [AssignController::class, 'rolePermission'])->name('role-permission');
        Route::get('/assign-permission/{id}', [AssignController::class, 'assignPermission'])->name('assign-permission');
        Route::patch('/assign-permission/{id}', [AssignController::class, 'insertPermission'])->name('insert-permission');
        Route::get('/assign-role/{id}', [AssignController::class, 'assignRole'])->name('assign-role');
        Route::patch('/assign-role/{id}', [AssignController::class, 'insertRole'])->name('insert-role');
    });
    Route::prefix('priority-groups')->namespace('Priority-groups')->name('priority-groups.')->group(function () {
        Route::get('/', [PriorityGroupController::class, 'index'])->name('index');
        Route::get('/create', [PriorityGroupController::class, 'create'])->name('create');
        Route::post('/create', [PriorityGroupController::class, 'store'])->name('store');
        Route::get('/update/{id}', [PriorityGroupController::class, 'edit'])->name('edit');
        Route::patch('/update/{id}', [PriorityGroupController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [PriorityGroupController::class, 'delete'])->name('delete');
    });
    Route::prefix('categories')->namespace('Categories')->name('categories.')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/create', [CategoryController::class, 'store'])->name('store');
        Route::get('/update/{id}', [CategoryController::class, 'edit'])->name('edit');
        Route::patch('/update/{id}', [CategoryController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [CategoryController::class, 'delete'])->name('delete');
    });
    Route::prefix('manufactures')->namespace('Manufactures')->name('manufactures.')->group(function () {
        Route::get('/', [ManufactureController::class, 'index'])->name('index');
        Route::get('/create', [ManufactureController::class, 'create'])->name('create');
        Route::post('/create', [ManufactureController::class, 'store'])->name('store');
        Route::get('/update/{id}', [ManufactureController::class, 'edit'])->name('edit');
        Route::patch('/update/{id}', [ManufactureController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [ManufactureController::class, 'delete'])->name('delete');
    });
    Route::prefix('medicals')->namespace('Medicals')->name('medicals.')->group(function () {
        Route::get('/', [MedicalController::class, 'index'])->name('index');
        Route::get('/create', [MedicalController::class, 'create'])->name('create');
        Route::post('/create', [MedicalController::class, 'store'])->name('store');
        Route::get('/update/{id}', [MedicalController::class, 'edit'])->name('edit');
        Route::patch('/update/{id}', [MedicalController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [MedicalController::class, 'delete'])->name('delete');
    });
    Route::prefix('vaccination-sites')->namespace('Vaccination-sites')->name('vaccination-sites.')->group(function () {
        Route::get('/', [VaccinationSiteController::class, 'index'])->name('index');
        Route::get('/create', [VaccinationSiteController::class, 'create'])->name('create');
        Route::post('/create', [VaccinationSiteController::class, 'store'])->name('store');
        Route::get('/update/{id}', [VaccinationSiteController::class, 'edit'])->name('edit');
        Route::patch('/update/{id}', [VaccinationSiteController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [VaccinationSiteController::class, 'delete'])->name('delete');
    });
    Route::prefix('vaccination-types')->namespace('Vaccination-types')->name('vaccination-types.')->group(function () {
        Route::get('/', [VaccinationTypeController::class, 'index'])->name('index');
        Route::get('/create', [VaccinationTypeController::class, 'create'])->name('create');
        Route::post('/create', [VaccinationTypeController::class, 'store'])->name('store');
        Route::get('/update/{id}', [VaccinationTypeController::class, 'edit'])->name('edit');
        Route::patch('/update/{id}', [VaccinationTypeController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [VaccinationTypeController::class, 'delete'])->name('delete');
    });
    Route::prefix('posts')->namespace('Posts')->name('posts.')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('index');
        Route::get('/create', [PostController::class, 'create'])->name('create');
        Route::post('/create', [PostController::class, 'store'])->name('store');
        Route::get('/update/{id}', [PostController::class, 'edit'])->name('edit');
        Route::patch('/update/{id}', [PostController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [PostController::class, 'destroy'])->name('destroy');
        Route::delete('/delete/{id}', [PostController::class, 'delete'])->name('delete');
        Route::get('/show/{id}', [PostController::class, 'show'])->name('show');
    });
});

//User: CITIZEN
Route::prefix('citizen')->namespace('Citizen')->middleware('auth')->name('citizen.')->group(function () {

    Route::prefix('user')->namespace('User')->name('user.')->group(function () {

        Route::get('/personal-info', [UserController::class, 'index'])->name('index');
        Route::get('/update-profile/{id}', [UserController::class, 'editProfile'])->name('edit-profile');
        Route::patch('/update-profile/{id}', [UserController::class, 'updateProfile'])->name('update-profile');

        Route::get('/change-password', [UserController::class, 'showChangePassword'])->name('show-change-password');
        Route::post('/change-Password', [UserController::class, 'changePassword'])->name('change-password');
    });
});