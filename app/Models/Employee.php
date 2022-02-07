<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'full_name',
        'position_id',
        'employee_id',
        'hired_at',
        'phone_number',
        'email',
        'salary',
        'path_to_photo',
        'admin_created_id',
        'admin_updated_id',
    ];
}
