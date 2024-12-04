<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table = 'member';
    protected $fillable = ['image', 'name', 'position', 'linkined', 'year', 'sort', 'status', 'created_at', 'updated_at'];
}
