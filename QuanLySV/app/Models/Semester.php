<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;

    protected $table = 'tbl_semester';
    protected $primaryKey = 'semester_id';
    public $timestamps = false;
    protected $fillable = ['semester_name', 'school_year', 'course_id', 'term', 'IsOpenForRegistration'];

    public function course()
    {
        return $this->hasOne(Course::class, 'course_id', 'course_id');
    }

    public function subject()
    {
        return $this->belongsToMany(Subject::class, 'tbl_semester_subject', 'subject_id', 'semester_id');
    }
}
