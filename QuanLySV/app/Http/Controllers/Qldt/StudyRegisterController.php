<?php

namespace App\Http\Controllers\Qldt;

use App\Http\Controllers\Controller;
use App\Models\ClassSection;
use App\Models\EnrollmentDetail;
use App\Models\SemesterSubject;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudyRegisterController extends Controller
{
    public function form()
    {
        $user = Auth::guard('user')->user();
        if ($user) {
            $studentId = $user->student_id;
            $studentValue = Student::with('class')->where('student_id', $studentId)->first();
            $listSubject = SemesterSubject::with('subject')->whereHas('semester', function ($query) {
                $query->where('IsOpenForRegistration', 1);
            })->get();

            return view('Qldt.StudyRegister', compact('studentValue', 'listSubject'));
        }
        return redirect()->route('user.logout.submit');
    }

    public function listClass(Request $request)
    {
        $semester_subject_id = $request->semester_subject_id;
        $drpWeekDay = $request->drpWeekDay;
        if ($semester_subject_id !== null) {
            if ($drpWeekDay == 0) {
                $listClass = ClassSection::with('startEndDate', 'semesterSubject')
                    ->where('semester_subject_id', $semester_subject_id)
                    ->get();
                $registrationNumbers = [];
                foreach ($listClass as $item) {
                    $registration_number = EnrollmentDetail::where('class_section_id', $item->class_section_id)->count();
                    $registrationNumbers[$item->class_section_id] = $registration_number;
                }
                return redirect()->back()->with('listClass', $listClass)->with('registrationNumbers', $registrationNumbers);
            } else {
                $listClass = ClassSection::with(['startEndDate.schedule', 'semesterSubject'])
                    ->whereHas('startEndDate.schedule', function ($query) use ($drpWeekDay) {
                        $query->where('schedule_day', $drpWeekDay);
                    })
                    ->where('semester_subject_id', $semester_subject_id)
                    ->get();
                $registrationNumbers = [];
                foreach ($listClass as $item) {
                    $registration_number = EnrollmentDetail::where('class_section_id', $item->class_section_id)->count();
                    $registrationNumbers[$item->class_section_id] = $registration_number;
                }
                return redirect()->back()->with('listClass', $listClass)->with('registrationNumbers', $registrationNumbers);
            }
        } else {
            return redirect()->back()->with('error', 'You must select a study section to display classes!');
        }
    }

    public function dangKy(Request $request){
        $id = $request->radiodangky;

    }
}
