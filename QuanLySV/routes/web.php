<?php

use App\Http\Controllers\Admin\LoginAdminController;
use App\Http\Controllers\Admin\StudentAdminController;
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

Route::get('/', function () {
    return view('LayoutAdmin.index');
});
Route::prefix('admin')->group(function(){
    Route::prefix('auth')->group(function(){
        Route::get('/login', [LoginAdminController::class, 'formLogin'])->name('admin.login.form');
        Route::post('/login', [LoginAdminController::class, 'login'])->name('admin.login.submit');
        Route::get('/register', [LoginAdminController::class, 'formRegister'])->name('admin.register.form');
        Route::get('/logout', [LoginAdminController::class, 'logout'])->name('admin.logout');

    });
    Route::get('/dash-board', [LoginAdminController::class, 'formDashBoard'])->name('admin.dashboard');

    Route::prefix('student')->group(function(){
        Route::get('/', [StudentAdminController::class, 'formStudent'])->name('admin.student.form');
        Route::get('/add-student', [StudentAdminController::class, 'formAddStudent'])->name('admin.addStudent.form');
        Route::post('/add-student', [StudentAdminController::class, 'addStudent'])->name('admin.addStudent.submit');
        Route::get('/update-student/{student_id}', [StudentAdminController::class, 'formUpdateStudent'])->name('admin.updateStudent.form');
        Route::post('/update-student/{student_id}', [StudentAdminController::class, 'updateStudent'])->name('admin.updateStudent.submit');
        Route::get('/search-student', [StudentAdminController::class, 'searchStudent'])->name('admin.searchStudent.submit');
        Route::get('/export-students', [StudentAdminController::class, 'exportStudents'])->name('admin.exportStudents.submit');
        Route::get('/import-student', [StudentAdminController::class, 'formImportStudents'])->name('admin.importStudents.form');
        Route::post('/import-student', [StudentAdminController::class, 'importStudents'])->name('admin.importStudents.submit');
        Route::get('/template-export', [StudentAdminController::class, 'teamplateExport'])->name('admin.templateExport.submit');

    });
});


