<?php

namespace App\Http\Controllers\Admin;

use App\Exports\StudentsExport;
use App\Exports\TemplateStudent;
use App\Http\Controllers\Controller;
use App\Imports\StudentsImport;
use App\Models\Classs;
use App\Models\Student;
use App\Models\StudentAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;

class StudentAdminController extends Controller
{
    public function formStudent()
    {
        $students = Student::join('tbl_class', 'tbl_class.class_id', '=', 'tbl_student.class_id')
            ->join('tbl_course', 'tbl_class.course_id', '=', 'tbl_course.course_id')
            ->orderBy('student_id', 'DESC')->paginate(10);
        return view('Admin.Student.listStudent', compact('students'));
    }

    public function formAddStudent()
    {
        $class = Classs::with('course')->get();
        return view('Admin.Student.addStudent', compact('class'));
    }

    public function addStudent(Request $request)
    {
        $request->validate([
            'student_code' => 'required|size:9|unique:tbl_student,student_code',
            'first_name' => 'required',
            'last_name' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'email' => 'required|unique:tbl_student,email|email',
            'phone' => 'required|integer|digits:10|unique:tbl_student,phone',
            'student_avatar' => 'required',
            'class_id' => 'required'
        ]);

        $data = $request->all();
        $student = Student::create([  // nếu create thât bại sẽ trả về giá trị null
            'student_code' => $data['student_code'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'date_of_birth' => $data['date_of_birth'],
            'gender' => $data['gender'],
            'address' => $data['address'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'student_avatar' => $data['student_avatar'],
            'class_id' => $data['class_id']
        ]);

        if ($student !== null) { // laravel sẽ tự chuyển đổi thành true/false nên có thể dùng if($student)
            StudentAccount::create([
                'email' => $data['student_code'],
                'password' => '1', //với trường password laravel sẽ tự động mã hóa trước khi lưu vào csdl
                'student_id' => $student->student_id
            ]);
            return redirect()->back()->with('success', 'Data has been processed successfully.');
        } else {
            return redirect()->back()->with('error', 'Data processing failed. Please try again.');
        }
    }

    public function formUpdateStudent($student_id)
    {
        $student = Student::where('student_id', $student_id)->first();
        $class = Classs::get();
        return view('Admin.Student.updateStudent', compact('student', 'class'));
    }

    public function updateStudent(Request $request, $student_id)
    {
        $student = Student::where('student_id', $student_id)->first();
        $request->validate([
            'student_code' => [
                'required',
                'size:9',
                Rule::unique('tbl_student')
                    ->ignore($student->student_code, 'student_code')
                //ignore(giá trị bỏ qua, tên cột)
            ],
            'first_name' => 'required',
            'last_name' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('tbl_student')->ignore($student->email, 'email')
            ],
            'phone' => [
                'required',
                'integer',
                'digits:10',
                Rule::unique('tbl_student')->ignore($student->phone, 'phone'),
                'numeric'
            ],
            'class_id' => 'required'
        ]);

        $data = $request->all();
        if ($request->hasFile('student_avatar')) {
            $avatar = $request->student_avatar;
        } else {
            $avatar = $request->old_student_avatar;
        }
        $student = Student::where('student_id', $student_id)->update([
            'student_code' => $data['student_code'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'date_of_birth' => $data['date_of_birth'],
            'gender' => $data['gender'],
            'address' => $data['address'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'student_avatar' => $avatar,
            'class_id' => $data['class_id']
        ]);
        if ($student !== null) {
            return redirect()->route('admin.student.form')->with('success', 'Data has been processed successfully.');
        } else {
            return redirect()->back()->with('error', 'Data processing failed. Please try again.');
        }
    }

    public function searchStudent(Request $request)
    {
        $keyword = $request->keyword;
        $keywords = explode(' ', $keyword);
        $firstName = $keywords[0];
        $lastName = $keywords[count($keywords) - 1];
        $students = Student::join('tbl_class', 'tbl_class.class_id', '=', 'tbl_student.class_id')
            ->join('tbl_course', 'tbl_class.course_id', '=', 'tbl_course.course_id')
            ->where('student_code', $keyword)
            ->orWhere('first_name', 'like', '%' . $firstName . '%')
            ->orWhere('last_name', 'like', '%' . $lastName . '%')
            ->orWhere('first_name', 'like', '%' . $lastName . '%')
            ->orWhere('last_name', 'like', '%' . $firstName . '%')
            ->paginate(5); // trả về 1 mảng
        if ($students->isNotEmpty()) {
            return view('Admin.Student.searchStudent', compact('students', 'keyword'));
        } else {
            $error = 'No matching data found';
            return view('Admin.Student.searchStudent', compact('error', 'keyword'));
        }
    }

    public function exportStudents()
    {
        return Excel::download(new StudentsExport, 'list-student-export.xlsx');
    }

    public function formImportStudents()
    {
        return view('Admin.Student.import');
    }

    public function teamplateExport()
    {
        return Excel::download(new TemplateStudent, 'template-student.xlsx');
    }

    public function importStudents(Request $request)
    {
        if ($request->hasFile('import-students')) {
            $file = $request->file('import-students');
            $filePath = $file->getPathname();
            try {
                Excel::import(new StudentsImport, $filePath);
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Data import failed');
            }
            return redirect()->back()->with('success', 'Enter data successfully');
        } else {
            return redirect()->back()->with('error', 'File does not exist');
        }
    }

    public function deleteStudent(Request $request)
    {
        if ($request->has('selected_items')) {
            $selectedItems = $request->selected_items;
            DB::beginTransaction();
            StudentAccount::whereIn('student_id', $selectedItems)->delete();
            $deleteStudent = Student::whereIn('student_id', $selectedItems)->delete();
            if ($deleteStudent) {
                DB::commit();
                return response()->json(['success' => 'Student deleted successfully'], 200);
            } else {
                DB::rollback();
                return response()->json(['error' => 'Failed to delete students'], 500);
            }
        }
    }
}
