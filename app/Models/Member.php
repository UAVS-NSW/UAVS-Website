<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table = 'member';
    protected $fillable = ['image', 'name', 'yob', 'major', 'school', 'position', 'achievement', 'linkined', 'year', 'sort', 'other_position', 'status', 'created_at', 'updated_at'];
}
