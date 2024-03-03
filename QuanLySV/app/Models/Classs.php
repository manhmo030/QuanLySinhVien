<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classs extends Model
{
    use HasFactory;

    protected $table = 'tbl_class';
    protected $primaryKey = 'class_id';
    public $timestamps = false;
    protected $fillable = ['class_name', 'major_id', 'department_id', 'homeroom_teacher', 'year_of_admission'];
}
