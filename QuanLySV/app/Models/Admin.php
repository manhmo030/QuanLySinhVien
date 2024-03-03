<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthAuthenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model implements AuthAuthenticatable
{
    use HasFactory;
    use Authenticatable;
    protected $table = 'tbl_admin';
    protected $primaryKey = 'admin_id';
    public $timestamps = false;
    protected $fillable = ['email', 'password', 'teacher_id'];

}
