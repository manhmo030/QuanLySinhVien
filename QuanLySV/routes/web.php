<?php

use App\Http\Controllers\Admin\ClassAdminController;
use App\Http\Controllers\Admin\ClassroomAdminController;
use App\Http\Controllers\Admin\CourseAdminController;
use App\Http\Controllers\Admin\FacultyAdminController;
use App\Http\Controllers\Admin\LoginAdminController;
use App\Http\Controllers\Admin\MajorAdminController;
use App\Http\Controllers\Admin\StudentAdminController;
use App\Http\Controllers\Admin\TeacherAdminController;
use App\Http\Controllers\Admin\PermissionsAdminController;
use App\Http\Controllers\Admin\PostsAdminController;
use App\Http\Controllers\Admin\SemesterAdminController;
use App\Http\Controllers\Admin\SubjectAdminController;
use App\Http\Controllers\Admin\SubjectAssignmentController;
use App\Http\Middleware\AccessPermission;
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
    return view('Error.404');
})->name('Error.404');
Route::prefix('admin')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::get('/login', [LoginAdminController::class, 'formLogin'])->name('admin.login.form');
        Route::post('/login', [LoginAdminController::class, 'login'])->name('admin.login.submit');
        Route::get('/register', [LoginAdminController::class, 'formRegister'])->name('admin.register.form');
        Route::get('/logout', [LoginAdminController::class, 'logout'])->name('admin.logout');
    });
    Route::get('/dash-board', [LoginAdminController::class, 'formDashBoard'])->name('admin.dashboard');
    Route::prefix('student')->group(function () {
        Route::get('/', [StudentAdminController::class, 'formStudent'])->name('admin.student.form');
        Route::get('/search-student', [StudentAdminController::class, 'searchStudent'])->name('admin.searchStudent.submit');
        Route::middleware(AccessPermission::class . ':Admin,Editor')->group(function () {
            Route::get('/add-student', [StudentAdminController::class, 'formAddStudent'])->name('admin.addStudent.form');
            Route::post('/add-student', [StudentAdminController::class, 'addStudent'])->name('admin.addStudent.submit');
            Route::get('/update-student/{student_id}', [StudentAdminController::class, 'formUpdateStudent'])->name('admin.updateStudent.form');
            Route::post('/update-student/{student_id}', [StudentAdminController::class, 'updateStudent'])->name('admin.updateStudent.submit');
            Route::get('/export-students', [StudentAdminController::class, 'exportStudents'])->name('admin.exportStudents.submit');
            Route::get('/import-student', [StudentAdminController::class, 'formImportStudents'])->name('admin.importStudents.form');
            Route::post('/import-student', [StudentAdminController::class, 'importStudents'])->name('admin.importStudents.submit');
            Route::get('/template-export', [StudentAdminController::class, 'teamplateExport'])->name('admin.templateExport.submit');
            Route::post('/delete-student', [StudentAdminController::class, 'deleteStudent']);
        });
    });
    Route::prefix('teacher')->group(function () {
        Route::get('/', [TeacherAdminController::class, 'formTeacher'])->name('admin.teacher.form');
        Route::get('/search-teacher', [TeacherAdminController::class, 'searchTeacher'])->name('admin.searchTeacher.submit');
        Route::middleware(AccessPermission::class . ':Admin,Editor')->group(function () {
            Route::get('/add-teacher', [TeacherAdminController::class, 'formAddTeacher'])->name('admin.addTeacher.form');
            Route::post('/add-teacher', [TeacherAdminController::class, 'addTeacher'])->name('admin.addTeacher.submit');
            Route::get('/update-teacher/{teacher_id}', [TeacherAdminController::class, 'formUpdateTeacher'])->name('admin.updateTeacher.form');
            Route::post('/update-teacher/{teacher_id}', [TeacherAdminController::class, 'updateTeacher'])->name('admin.updateTeacher.submit');
            Route::get('/export-teachers', [TeacherAdminController::class, 'exportTeacher'])->name('admin.exportTeacher.submit');
            Route::get('/import-teachers', [TeacherAdminController::class, 'formImportTeachers'])->name('admin.importTeachers.form');
            Route::post('/import-teachers', [TeacherAdminController::class, 'importTeachers'])->name('admin.importTeachers.submit');
            Route::get('/template-export', [TeacherAdminController::class, 'teamplateExport'])->name('admin.templateTeacherExport.submit');
            Route::post('/delete-teacher', [TeacherAdminController::class, 'deleteTeacher']);
        });
    });
    Route::prefix('faculty')->group(function () {
        Route::get('/', [FacultyAdminController::class, 'formFaculty'])->name('admin.faculty.form');
        Route::get('/search-faculty', [FacultyAdminController::class, 'searchFaculty'])->name('admin.searchFaculty.submit');
        Route::middleware(AccessPermission::class . ':Admin,Editor')->group(function () {
            Route::get('/add-faculty', [FacultyAdminController::class, 'formAddFaculty'])->name('admin.addFaculty.form');
            Route::post('/add-faculty', [FacultyAdminController::class, 'addFaculty'])->name('admin.addFaculty.submit');
            Route::get('/update-faculty/{faculty_id}', [FacultyAdminController::class, 'formUpdateFaculty'])->name('admin.updateFaculty.form');
            Route::post('/update-faculty/{faculty_id}', [FacultyAdminController::class, 'updateFaculty'])->name('admin.updateFaculty.submit');
            Route::post('/delete-faculty', [FacultyAdminController::class, 'deleteFaculty']);
        });
    });
    Route::prefix('major')->group(function () {
        Route::get('/', [MajorAdminController::class, 'formMajor'])->name('admin.major.form');
        Route::get('/search-major', [MajorAdminController::class, 'searchMajor'])->name('admin.searchMajor.submit');
        Route::middleware(AccessPermission::class . ':Admin,Editor')->group(function () {
            Route::get('/add-major', [MajorAdminController::class, 'formAddMajor'])->name('admin.addMajor.form');
            Route::post('/add-major', [MajorAdminController::class, 'addMajor'])->name('admin.addMajor.submit');
            Route::get('/update-major/{major_id}', [MajorAdminController::class, 'formUpdateMajor'])->name('admin.updateMajor.form');
            Route::post('/update-major/{major_id}', [MajorAdminController::class, 'updateMajor'])->name('admin.updateMajor.submit');
            Route::post('/delete-major', [MajorAdminController::class, 'deleteMajor']);
        });
    });
    Route::prefix('classroom')->group(function () {
        Route::get('/', [ClassroomAdminController::class, 'formClassroom'])->name('admin.classroom.form');
        Route::get('/search-classroom', [ClassroomAdminController::class, 'searchClassroom'])->name('admin.searchClassroom.submit');
        Route::middleware(AccessPermission::class . ':Admin,Editor')->group(function () {
            Route::get('/add-classroom', [ClassroomAdminController::class, 'formAddClassroom'])->name('admin.addClassroom.form');
            Route::post('/add-classroom', [ClassroomAdminController::class, 'addClassroom'])->name('admin.addClassroom.submit');
            Route::get('/update-classroom/{classroom_id}', [ClassroomAdminController::class, 'formUpdateClassroom'])->name('admin.updateClassroom.form');
            Route::post('/update-classroom/{classroom_id}', [ClassroomAdminController::class, 'updateClassroom'])->name('admin.updateClassroom.submit');
            Route::post('/delete-classroom', [ClassroomAdminController::class, 'deleteClassroom']);
        });
    });
    Route::prefix('class')->group(function () {
        Route::get('/', [ClassAdminController::class, 'formClass'])->name('admin.class.form');
        Route::get('/search-class', [ClassAdminController::class, 'searchClass'])->name('admin.searchClass.submit');
        Route::middleware(AccessPermission::class . ':Admin,Editor')->group(function () {
            Route::get('/add-class', [ClassAdminController::class, 'formAddClass'])->name('admin.addClass.form');
            Route::post('/add-class', [ClassAdminController::class, 'addClass'])->name('admin.addClass.submit');
            Route::get('/update-class/{class_id}', [ClassAdminController::class, 'formUpdateClass'])->name('admin.updateClass.form');
            Route::post('/update-class/{class_id}', [ClassAdminController::class, 'updateClass'])->name('admin.updateClass.submit');
            Route::post('/delete-class', [ClassAdminController::class, 'deleteClass']);
        });
    });
    Route::prefix('subject')->group(function () {
        Route::get('/', [SubjectAdminController::class, 'formSubject'])->name('admin.subject.form');
        Route::get('/search-subject', [SubjectAdminController::class, 'searchSubject'])->name('admin.searchSubject.submit');
        Route::middleware(AccessPermission::class . ':Admin,Editor')->group(function () {
            Route::get('/add-subject', [SubjectAdminController::class, 'formAddSubject'])->name('admin.addSubject.form');
            Route::post('/add-subject', [SubjectAdminController::class, 'addSubject'])->name('admin.addSubject.submit');
            Route::get('/update-subject/{subject_id}', [SubjectAdminController::class, 'formUpdateSubject'])->name('admin.updateSubject.form');
            Route::post('/update-subject/{subject_id}', [SubjectAdminController::class, 'updateSubject'])->name('admin.updateSubject.submit');
            Route::post('/delete-subject', [SubjectAdminController::class, 'deleteSubject']);
        });
    });
    Route::prefix('course')->group(function () {
        Route::get('/', [CourseAdminController::class, 'formCourse'])->name('admin.course.form');
        Route::post('/add-course', [CourseAdminController::class, 'addCourse'])->name('admin.addCourse.submit');
        Route::get('/update-course/{course_id}', [CourseAdminController::class, 'formUpdateCourse'])->name('admin.updateCourse.form');
        Route::post('/update-course/{course_id}', [CourseAdminController::class, 'updateCourse'])->name('admin.updateCourse.submit');
        Route::post('/delete-course', [CourseAdminController::class, 'deleteCourse']);
    });
    Route::prefix('semester')->group(function(){
        Route::get('/', [SemesterAdminController::class, 'formSemester'])->name('admin.semester.form');
        Route::get('/list-semster-subject/{semester_id}', [SemesterAdminController::class, 'listSubjectInSemester'])->name('admin.listSemesterSubject.form');
        //Route::get('/search-semester', [SemesterAdminController::class, 'searchSemester'])->name('admin.searchSemester.submit');
        Route::middleware(AccessPermission::class . ':Admin,Editor')->group(function () {
            Route::get('/add-semester', [SemesterAdminController::class, 'formAddSemester'])->name('admin.addSemester.form');
            Route::post('/add-semester', [SemesterAdminController::class, 'addSemester'])->name('admin.addSemester.submit');
            Route::get('/update-semester/{semester_id}', [SemesterAdminController::class, 'formUpdateSemester'])->name('admin.updateSemester.form');
            Route::post('/update-semester/{semester_id}', [SemesterAdminController::class, 'updateSemester'])->name('admin.updateSemester.submit');
            Route::post('/update-semester-checkbox/{semester_id}', [SemesterAdminController::class, 'updateSemesterCheckbox'])->name('admin.updateSemesterCheckbox.submit');
            Route::post('/delete-semester', [SemesterAdminController::class, 'deleteSemester']);
            Route::get('/add-semster-subject', [SemesterAdminController::class, 'formAddSemesterSubject'])->name('admin.addSemesterSubject.form');
            Route::post('/add-semster-subject', [SemesterAdminController::class, 'addSemesterSubject'])->name('admin.addSemesterSubject.submit');
            Route::get('/update-semester-subject/{semester_subject_id}', [SemesterAdminController::class, 'formUpdateSemesterSubject'])->name('admin.updateSemesterSubject.form');
            Route::post('/update-semester-subject/{semester_subject_id}', [SemesterAdminController::class, 'updateSemesterSubject'])->name('admin.updateSemesterSubject.submit');
            Route::post('/delete-semester-subject', [SemesterAdminController::class, 'deleteSemesterSubject']);

        });
    });
    Route::middleware(AccessPermission::class . ':Admin,Editor')->prefix('posts')->group(function () {
        Route::get('/', [PostsAdminController::class, 'formPosts'])->name('admin.posts.form');
        Route::get('/add-posts', [PostsAdminController::class, 'formAddPosts'])->name('admin.addPosts.form');
        Route::post('/add-posts', [PostsAdminController::class, 'addPosts'])->name('admin.addPosts.submit');
        Route::get('/update-posts/{posts_id}', [PostsAdminController::class, 'formUpdatePosts'])->name('admin.updatePosts.form');
        Route::post('/update-posts/{posts_id}', [PostsAdminController::class, 'updatePosts'])->name('admin.updatePosts.submit');
        Route::post('/delete-posts', [PostsAdminController::class, 'deletePosts']);
        Route::get('/search-posts', [PostsAdminController::class, 'searchPosts'])->name('admin.searchPosts.submit');
    });
    Route::middleware(AccessPermission::class . ':Admin')->prefix('permissions')->group(function () {
        Route::get('/', [PermissionsAdminController::class, 'formPermissions'])->name('admin.permissions.form');
        Route::post('/assign-roles', [PermissionsAdminController::class, 'assignRoles'])->name('admin.assignRoles.submit');
        Route::get('/add-admin', [PermissionsAdminController::class, 'formAddAdmin'])->name('admin.addAdmin.form');
        Route::post('/add-admin', [PermissionsAdminController::class, 'addAdmin'])->name('admin.addAdmin.submit');
        Route::post('/delete-admin', [PermissionsAdminController::class, 'deleteAdmin']);
        Route::get('/search-admin', [PermissionsAdminController::class, 'searchAdmin'])->name('admin.searchAdmin.submit');
    });
});
