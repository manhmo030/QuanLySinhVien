<?php

namespace App\Http\Controllers\Admin;

use App\Exports\StudentsExport;
use App\Exports\TemplateStudent;
use App\Http\Controllers\Controller;
use App\Imports\StudentsImport;
use App\Models\Classs;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;

class StudentAdminController extends Controller
{
    public function formStudent()
    {
        $students = Student::join('tbl_class', 'tbl_class.class_id', '=', 'tbl_student.class_id')
            ->paginate(10);
        return view('Admin.Student.listStudent', compact('students'));
    }

    public function formAddStudent()
    {
        $class = Classs::get();
        return view('Admin.Student.addStudent', compact('class'));
    }

    public function addStudent(Request $request)
    {
        $request->validate([
            'student_code' => 'required|min:9|unique:tbl_student,student_code',
            'first_name' => 'required',
            'last_name' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'email' => 'required|unique:tbl_student,email|email',
            'phone' => 'required|min:10|unique:tbl_student,phone|numeric',
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
            return redirect()->route('admin.student.form')->with('message', 'Data has been processed successfully.');
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
        $request->validate([
            'student_code' => [
                'required',
                'min:9',
                Rule::unique('tbl_student')
                    ->ignore($request->student_code, 'student_code'),
                    //ignore(giá trị bỏ qua, tên cột)
            ],
            'first_name' => 'required',
            'last_name' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'email' => [
                'required',
                Rule::unique('tbl_student')->ignore($request->email, 'email')
            ],
            'phone' => [
                'required',
                'min:10',
                Rule::unique('tbl_student')->ignore($request->phone, 'phone'),
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
            return redirect()->route('admin.student.form')->with('message', 'Data has been processed successfully.');
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
            ->where('student_code', $keyword)
            ->orWhere('first_name', 'like', '%' . $firstName . '%')
            ->orWhere('last_name', 'like', '%' . $lastName . '%')
            ->orWhere('first_name', 'like', '%' . $lastName . '%')
            ->orWhere('last_name', 'like', '%' . $firstName . '%')
            ->paginate(5);
        if ($students->isNotEmpty()) {
            return view('Admin.Student.searchStudent', compact('students', 'keyword'));
        } else {
            $error = 'No matching data found';
            return view('Admin.Student.searchStudent', compact('error'));
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
                return redirect()->back()->with('message', 'Data import failed');
            }
            return redirect()->back()->with('message', 'Enter data successfully');
        } else {
            return redirect()->back()->with('message', 'File does not exist');
        }
    }
}
