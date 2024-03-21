<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAccount extends Model
{
    use HasFactory;
    protected $table = 'tbl_student_account';
    protected $primaryKey = 'student_account_id';
    public $timestamps = false;
    protected $fillable = [
        'email',
        'password',
        'student_id'
    ];
}
