<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnrollmentDetail extends Model
{
    use HasFactory;
    protected $table = 'tbl_enrollmentDetail';
    protected $primaryKey = 'enrollmentDetail_id ';
    public $timestamps = false;
    protected $fillable = ['enrollment_id  ', 'class_section_id ', 'enrollmentDetail_date '];
}
