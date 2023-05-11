<?php

use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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
Route::get('/',[UserController::class,'index']);
Route::get('/allblogs',[BlogController::class,'allblog']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Admin dashbord
Route::get('alluser',[AdminController::class, 'alluser']);
Route::get('adduser',[AdminController::class, 'adduser']);
Route::post('insertuser',[AdminController::class, 'insertuser']);
Route::get('edituser/{id}',[AdminController::class, 'edituser']);
Route::get('updateuser/{id}',[AdminController::class, 'updateuser']);
Route::get('blogtable',[AdminController::class, 'blogtable']);
Route::get('addblog',[AdminController::class, 'addblog']);
Route::POST('insertblog',[AdminController::class, 'insertblog']);
Route::PUT('updateblog/{id}',[AdminController::class, 'updateblog']);
Route::get('inserteditblog',[AdminController::class, 'inserteditblog']);
Route::get('editblog/{id}',[AdminController::class, 'editblog']);
Route::get('allcontact',[AdminController::class, 'allcontact']);
Route::get('insertcontact',[AdminController::class, 'insertcontact']);
Route::get('approveadmin/{id}',[AdminController::class, 'approveadmin/id']);
Route::get('canceladmin/{id}',[AdminController::class, 'canceladmin/id']);
Route::get('deleteuser/{id}',[AdminController::class, 'deleteuser']);
Route::get('deleteblog/{id}',[AdminController::class, 'deleteblog']);
Route::post('/users/permissions/{user}',[AdminController::class, 'givePermission'])->name('editblog');
Route::post('/users/roles/{user}',[AdminController::class, 'assignRole'])->name('editblog');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'adminindex'])->name('admin.index')->middleware('role:admin');

Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function(){
   Route::resource('/roles', RoleController::class);
    Route::resource('/permissions', PermissionController::class);
    Route::Post('roles/{role}/permissions', [RoleController::class,'givePermission'])->name('roles.permissions');
    Route::delete('roles/{role}/permissions/{permission}', [RoleController::class,'revokePermission'])->name('roles.permissions.revoke');
    Route::Post('permissions/{permission}/roles', [PermissionController::class,'assignRole'])->name('permissions.roles');
    Route::delete('permissions/{permission}/roles/{role}', [PermissionController::class,'removeRole'])->name('permissions.role.remove');
  //  Route::post('/users/{user}/roles',[AdminController::class, 'assignRole'])->name('user.roles');
    Route::delete('users/{user}/roles/{role}',[AdminController::class, 'removeRole'])->name('user.roles.remove');
  //  Route::post('/users/permissions',[AdminController::class, 'givePermission'])->name('user.permissions');
    Route::delete('users/{user}/permissions/{permissions}',[AdminController::class, 'removePermission'])->name('user.permissions.revoke');

});

Route::get('/', function () {
    return view('index');
})->name('index');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog-details', [BlogController::class, 'blogdetails'])->name('blogdetails');
Route::get('/portfolio-details', [PortfolioController::class, 'portfoliodetails'])->name('portfoliodetails');
Route::get('/adminlogin', [PortfolioController::class, 'adminlogin'])->name('portfoliodetails');

