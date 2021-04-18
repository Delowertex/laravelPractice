<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmpController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\DropzoneController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ZipController;

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

Route::get('/add-post', [StudentController::class, 'addPost']);
//Route::post('/add-post', [StudentController::class, 'addPostSubmit'])->name('add.post');
Route::get('/posts', [StudentController::class, 'getPost']);
Route::get('/posts/{id}', [StudentController::class, 'getPostById']);
Route::get('/delete-post/{id}', [StudentController::class, 'deletepost']);
Route::get('/add-user', [UserController::class, 'insertRecord']);
Route::get('/add-post', [PostController::class, 'addPost']);
Route::get('/add-comment/{id}', [PostController::class, 'addComment']);
Route::get('/add-role', [RoleController::class, 'addRole']);
Route::get('/add-users', [RoleController::class, 'addUser']);
Route::get('/allroles/{id}', [RoleController::class, 'getAllRolesByUser']);
Route::get('/allusers/{id}', [RoleController::class, 'getAllUsersByRole']);
Route::get('/add-employee', [EmployeeController::class, 'addEmployee']);
Route::get('/export-excel', [EmployeeController::class, 'exportIntoExcel']);
Route::get('/export-csv', [EmployeeController::class, 'exportIntoCSV']);
Route::get('/pfdemployee', [EmpController::class, 'getAllEmployee']);
Route::get('/downloadpdf', [EmpController::class, 'downloadPDF']);
Route::get('/import-form', [EmployeeController::class, 'importForm']);
Route::post('/import', [EmployeeController::class, 'import'])->name('employee.import');
Route::get('/resize-image', [ImageController::class, 'resizeImage']);
Route::post('/resize-image', [ImageController::class, 'resizeImageSubmit'])->name('resize.image');
Route::get('/dropzone', [DropzoneController::class, 'dropzone']);
Route::post('/dropzone-store', [DropzoneController::class, 'dropzoneStore'])->name('dropzone.store');
Route::get('/contact', [ContactController::class, 'contact']);
Route::post('/contact', [ContactController::class, 'sendEmail'])->name('sent.mail');
Route::get('/get-name', [TestController::class, 'getFirstNameLastName']);
Route::get('/add-product', [ProductController::class, 'addProduct']);
Route::get('/search', [ProductController::class, 'searchProduct']);
Route::get('/auto-search', [ProductController::class, 'autoCompliteSearch'])->name('autocomplite');
Route::get('/zip', [ZipController::class, 'zipFile']);
