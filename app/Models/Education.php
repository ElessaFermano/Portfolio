<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'education';
    protected $primaryKey = 'id';
    protected $fillable = [
        'grade_level',
        'year',
        'school_name',
        'address'];

    use HasFactory;
}
