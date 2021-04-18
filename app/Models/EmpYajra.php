<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpYajra extends Model
{
    use HasFactory;

    protected $table = "emp_yajras";

    protected $fillable = [
        'name',
        'email',
        'phone',
        'salary',
        'department',
    ];  
}
