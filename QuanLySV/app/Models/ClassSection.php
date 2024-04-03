<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassSection extends Model
{
    use HasFactory;
    protected $table = 'tbl_class_section';
    protected $primaryKey = 'class_section_id ';
    public $timestamps = false;
    protected $fillable = ['class_section_code', 'class_section_name', 'semester_subject_id', 'class_section_capacity'];

    public function startEndDate(){
        return $this->hasMany(StartEndDate::class, 'class_section_id', 'class_section_id')->with('schedule');
    }

    public function enrollmentDetail(){
        return $this->hasMany(EnrollmentDetail::class, 'class_section_id', 'class_section_id');
    }

    public function semesterSubject(){
        return $this->hasOne(SemesterSubject::class, 'semester_subject_id', 'semester_subject_id')->with('subject');
    }
}
