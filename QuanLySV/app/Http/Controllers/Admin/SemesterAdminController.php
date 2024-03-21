<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Semester;
use App\Models\SemesterSubject;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SemesterAdminController extends Controller
{
    public function formSemester()
    {
        $semester = Semester::with('course')
            ->orderBy('course_id', 'DESC')
            ->paginate(10);
        return view('Admin.Semester.listSemester', compact('semester'));
    }

    public function formAddSemester()
    {
        $course = Course::get();
        return view('Admin.Semester.addSemester', compact('course'));
    }

    public function addSemester(Request $request)
    {
        $request->validate([
            'semester_name' => 'required',
            'school_year' => 'required',
            'course_id' => 'required',
            'term' => 'required|integer|min:1'
        ]);
        $unique = Semester::where('semester_name', $request->semester_name)
            ->where('school_year', $request->school_year)
            ->where('course_id', $request->course_id)
            ->where('term', $request->term)
            ->first();
        if ($unique !== null) {
            return redirect()->back()
                ->with('error', "Duplicate entry: $request->semester_name - $request->school_year - $request->course_id - $request->term");
        }
        $semester = Semester::create([
            'semester_name' => $request->semester_name,
            'school_year' => $request->school_year,
            'course_id' => $request->course_id,
            'term' => $request->term,
            'IsOpenForRegistration' => '0'
        ]);
        if ($semester !== null) { // laravel sẽ tự chuyển đổi thành true/false nên có thể dùng if($student)
            return redirect()->back()->with('success', 'Data has been processed successfully.');
        } else {
            return redirect()->back()->with('error', 'Data processing failed. Please try again.');
        }
    }

    public function formUpdateSemester($semester_id)
    {
        $course = Course::get();
        $semester = Semester::where('semester_id', $semester_id)->first();
        return view('Admin.Semester.updateSemester', compact('semester', 'course'));
    }

    public function updateSemester(Request $request, $semester_id)
    {
        $semester = Semester::where('semester_id', $semester_id)->first();

        $unique = Semester::where('semester_name', $request->semester_name)
            ->where('school_year', $request->school_year)
            ->where('course_id', $request->course_id)
            ->where('term', $request->term)
            ->first();

        if ($unique !== null && $unique->semester_id != $semester->semester_id) {
            return redirect()->back()
                ->with('error', "Duplicate entry: $request->semester_name - $request->school_year - $request->course_id - $request->term");
        }

        $semester = Semester::where('semester_id', $semester_id)->update([
            'semester_name' => $request->semester_name,
            'school_year' => $request->school_year,
            'course_id' => $request->course_id,
            'term' => $request->term
        ]);
        if ($semester !== null) {
            return redirect()->route('admin.semester.form')->with('success', 'Data has been processed successfully.');
        }
        return redirect()->route('admin.semester.form')->with('error', 'Data processing failed. Please try again.');
    }

    public function updateSemesterCheckbox(Request $request, $semester_id)
    {
        if ($request->checked) {
            $semester = Semester::where('course_id', $request->course_id)->get();
            foreach ($semester as $item) {
                if ($item->IsOpenForRegistration != 0) {
                    return redirect()->route('admin.semester.form')->with('error', 'Only open 1 semester per course');
                }
            }
            $semester = Semester::where('semester_id', $semester_id)->update([
                'IsOpenForRegistration' => '1'
            ]);
            if ($semester !== null) {
                return redirect()->route('admin.semester.form')->with('success', 'Data has been processed successfully.');
            }
            return redirect()->route('admin.semester.form')->with('error', 'Data processing failed. Please try again.');
        } else {
            $semester = Semester::where('semester_id', $semester_id)->update([
                'IsOpenForRegistration' => '0'
            ]);
            if ($semester !== null) {
                return redirect()->route('admin.semester.form')->with('success', 'Data has been processed successfully.');
            }
            return redirect()->route('admin.semester.form')->with('error', 'Data processing failed. Please try again.');
        }
    }
    public function deleteSemester(Request $request)
    {
        if ($request->has('selected_items')) {
            $selectedItems = $request->selected_items;
            $semester = Semester::whereIn('semester_id', $selectedItems)->delete();
            if ($semester) {
                return response()->json(['success' => 'Semester deleted successfully'], 200);
            } else {
                return response()->json(['error' => 'Failed to delete semester'], 500);
            }
        }
    }

    public function listSubjectInSemester($semester_id)
    {
        $semester = Semester::where('semester_id', $semester_id)->with('course')->first();
        $listSemesterSubject = SemesterSubject::with('semester', 'subject')
            ->where('semester_id', $semester_id)->get();
        return view('Admin.Semester.listSemesterSubject', compact('listSemesterSubject', 'semester'));
    }

    public function formAddSemesterSubject()
    {
        $subject = Subject::get();
        $semester = Semester::with('course')->get();
        return view('Admin.Semester.addSemesterSubject', compact('subject', 'semester'));
    }

    public function addSemesterSubject(Request $request)
    {
        $request->validate([
            'semester_id' => 'required',
            'subject_id' => 'required'
        ]);
        $unique = SemesterSubject::where('semester_id', $request->semester_id)
            ->where('subject_id', $request->subject_id)->first();
        if ($unique !== null) {
            return redirect()->back()->with('error', "Duplicate entry: $request->semester_id - $request->subject_id ");
        }
        $semesterSubject = SemesterSubject::create([
            'semester_id' => $request->semester_id,
            'subject_id' => $request->subject_id
        ]);
        if($semesterSubject !== null ){
            return redirect()->back()->with('success', 'Data has been processed successfully.');
        } else {
            return redirect()->back()->with('error', 'Data processing failed. Please try again.');
        }
    }

    public function deleteSemesterSubject(Request $request)
    {
        if ($request->has('selected_items')) {
            $selectedItems = $request->selected_items;
            $semesterSubject = SemesterSubject::whereIn('semester_subject_id', $selectedItems)->delete();
            if ($semesterSubject) {
                return response()->json(['success' => 'Semester-Subject deleted successfully'], 200);
            } else {
                return response()->json(['error' => 'Failed to delete semester-subject'], 500);
            }
        }
    }
    // public function searchSemester(Request $request)
    // {
    //     $keyword = $request->keyword;
    //     $semester = Semester::where('sem', $request->keyword)
    //         ->orWhere('class_name', 'like', '%' . $request->keyword . '%')
    //         ->paginate(10);
    //     if ($class->isNotEmpty()) {
    //         return view('Admin.Class.searchClass', compact('class', 'keyword'));
    //     }
    //     $error = 'No matching data found';
    //     return view('Admin.Class.searchClass', compact('error', 'keyword'));
    // }
}
